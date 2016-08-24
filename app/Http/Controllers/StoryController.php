<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use Auth;
use Share;
use App\StoryView;
use Image;
class StoryController extends Controller
{

    public function postStory(Request $request)
    {
        $validator = $this->validator($request->except('_token'));
        if($validator->fails()) {
            return redirect('submission')
                ->withErrors($validator)
                ->withInput();
        }

        $file = $request->file('file');
        if ($imagePath = $this->uploadImage($file)) {

            $userId = Auth::user()->id;
            $title = $request->input('title');
            $story = $request->input('story');

            Story::create([
                'user_id'       => $userId,
                'title'         => $title,
                'story'         => $story,
                'image_path'    => $imagePath
            ]);

            return redirect('success-submission');
        } else {
            $error = ['error' => 'There is a problem when upload the image, please try again.'];
            return redirect('submission')
                ->withErrors($error)
                ->withInput();
        }
    }

    public function uploadImage($file)
    {
        $destinationPath = public_path().'/uploads';
        $extension =$file->getClientOriginalExtension();
        $filename = $this->createUniqueImageFilename();
        $filePath = $filename.'.'.$extension;
        $upload_success = $file->move($destinationPath, $filePath);
        $imagePath = $destinationPath. '/' . $filePath;
        if( $upload_success ) {
            $image = Image::make($imagePath)->resize(720, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $image->save($imagePath, 90);
            return $filePath;
        }
        return false;
    }

    private function createUniqueImageFilename()
    {
        $filename = str_random(12);
        if ($this->isFilenameIsUsed($filename)) {
            return $this->createUniqueImageFilename();
        }
        return $filename;
    }

    private function isFilenameIsUsed($filename)
    {
        return (Story::where('image_path', 'like', $filename. '%.')->count() > 0);
    }

    private function validator(array $inputs)
    {
        $messages = [
            'file.required'   => 'The image field is required.'
        ];

        return Validator::make($inputs, [
            'title'     => 'required',
            'story'     => 'required',
            'file'      => 'required|image|max:2048'
        ], $messages);

    }

    public function getPostStoryView()
    {
        return view('submission');
    }

    public function showStory(Request $request, $id)
    {
        $story = Story::find($id);
        $data['story'] = $story;
        $data['shareLinks'] = Share::load(url('story/' . $story->id), $story->title)->services('facebook', 'twitter');
        $this->viewLogging($request->ip(), $id);
        return view('photo', $data);
    }

    private function viewLogging($ip, $id)
    {
        if (! $this->isViewedByThisIp($ip, $id)) {
            $userId = '';
            $userName = '';
            if (Auth::check()) {
                $user = Auth::user();
                $userId = $user->id;
                $userName = $user->name;
            }
            if ( (! $this->isViewedByThisUser($userId, $id)) || $userId == '') {
                StoryView::create([
                    'story_id'      => $id,
                    'ip_address'    => $ip,
                    'viewer_id'     => $userId,
                    'viewer_name'   => $userName
                ]);
            }
        }
    }

    private function isViewedByThisIp($ip, $id)
    {
        if (StoryView::where('ip_address', $ip)->where('story_id', $id)->count() > 0) {
            return true;
        }

        return false;
    }

    private function isViewedByThisUser($userId, $id)
    {
        if (StoryView::where('viewer_id', $userId)->where('story_id', $id)->count() > 0) {
            return true;
        }

        return false;
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
            $stories = Story::where('title', 'like', '%' . $s . '%')->orderBy('id', 'desc')->paginate(12);
            $stories->setPath('?s=' . $s);
        } else {
            $stories = Story::orderBy('id', 'desc')->paginate(12);
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
