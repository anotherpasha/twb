<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Share;

class StoryController extends Controller
{

    public function postStory(Request $request)
    {
        // dd($request->input());
        $validator = $this->validator($request->except('_token'));
        if($validator->fails()) {
            return redirect('submission')
                ->withErrors($validator)
                ->withInput();
        }

        $userId = Auth::user()->id;
        $title = $request->input('title');
        $story = $request->input('story');
        $imagePath = $request->input('image_path');

        Story::create([
            'user_id'       => $userId,
            'title'         => $title,
            'story'         => $story,
            'image_path'    => $imagePath
        ]);

        return redirect('success-submission');
    }

    private function validator(array $inputs)
    {
        $messages = [
            'image_path.required'   => 'Please upload the image first.'
        ];

        return Validator::make($inputs, [
            'title'         => 'required',
            'story'         => 'required',
            'image_path'    => 'required'
        ], $messages);

    }

    public function getPostStoryView()
    {
        return view('submission');
    }

    public function showStory($id)
    {
        $story = Story::find($id);
        $data['story'] = $story;
        $data['shareLinks'] = Share::load(url('story/' . $story->id), $story->title)->services('facebook', 'twitter');
        return view('photo', $data);
    }

    public function gallery(Request $request)
    {
        $stories = $this->getStories($request);
        $data['stories'] = $stories;
        return view('gallery', $data);
    }

    private function getStories(Request $request)
    {
        if( $request->has('s') ) {
            $s = $request->input('s');
            $stories = Story::where('title', 'like', '%' . $s . '%')->paginate(12);
            $stories->setPath('?s=' . $s);
        } else {
            $stories = Story::paginate(12);
        }
        return $stories;
    }

    public function likeStory($storyId)
    {
        $user = Auth::user();
        if( $user->likes()->where('story_id', $storyId)->get()->isEmpty() ) {
            $user->likes()->create([
                'story_id'  => $storyId,
                'user_id'   => $user->id
            ]);
        } else {
            return redirect('story/' . $storyId)->withErrors(['error' => 'You already liked this story.']);
        }

        return redirect('story/' . $storyId);
    }

}
