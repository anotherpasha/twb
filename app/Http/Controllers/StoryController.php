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
}
