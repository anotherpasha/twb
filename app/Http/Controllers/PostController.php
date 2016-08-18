<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Validator;
use App\Story;

class PostController extends Controller
{
    public function postStory(Request $request)
    {
        $validator = $this->validator($request->except('_token'));
        if($validator->fails()) {
            return redirect('submission')
                ->withErrors($validator)
                ->withInput();
        }

        $userId = Auth::user()->id;
        $title = $request->input('title');
        $story = $request->input('story');

        $story = Story::create([
            'user_id'   => $userId,
            'title'     => $title,
            'story'     => $story
        ]);

        return redirect('success-submission');
    }

    private function validator(array $inputs)
    {
        return Validator::make($inputs, [
            'title' => 'required',
            'story' => 'required',
        ]);

    }

    public function getPostStoryView()
    {
        return view('submission');
    }
}
