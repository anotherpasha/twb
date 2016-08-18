<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;

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
        $data['story'] = Story::find($id);
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
}
