<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

use App\Http\Requests;

class StoryController extends Controller
{
    public function showStory($id)
    {
        $data['story'] = Story::find($id);
        return view('photo', $data);
    }

    public function gallery(Request $request)
    {
        if( $request->has('s') ) {
            $s = $request->input('s');
            $stories = Story::where('title', 'like', '%' . $s . '%')->paginate(12);
            $stories->setPath('?s=' . $s);
        } else {
            $stories = Story::paginate(12);
        }
        $data['stories'] = $stories;
        return view('gallery', $data);
    }
}
