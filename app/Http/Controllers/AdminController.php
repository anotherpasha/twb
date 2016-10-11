<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Story;
use App\User;
use DB;
use Image;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data['mostLikes'] = Story::select(['stories.*', DB::raw('count(story_likes.id) as totalcount')])
            ->join('story_likes', 'stories.id', '=', 'story_likes.story_id')
            ->groupBy('stories.id')
            ->orderBy('totalcount', 'desc')
            ->take(5)
            ->get();

        $data['mostViews'] = Story::select(['stories.*', DB::raw('count(story_views.id) as totalview')])
            ->join('story_views', 'stories.id', '=', 'story_views.story_id')
            ->groupBy('stories.id')
            ->orderBy('totalview', 'desc')
            ->take(5)
            ->get();

        $data['participantNumber'] = User::where('email', '<>', 'admin@duniatiniwinibiti.com')->count();
        $data['participants'] = User::where('email', '<>', 'admin@duniatiniwinibiti.com')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        $data['stories'] = Story::orderBy('id', 'desc')
            ->take(15)
            ->get();

        $data['submissionNumber'] = Story::count();
        $data['openStory'] = Story::where('approval_status', 0)->count();
        $data['approvedStory'] = Story::where('approval_status', 1)->count();
        $data['rejectedStory'] = Story::where('approval_status', 2)->count();
        $data['deletedStory'] = Story::where('approval_status', 3)->count();

        return view('admin.dashboard', $data);
    }

    public function stories(Request $request)
    {
        $data['status'] = '';
        if ($request->has('s') || $request->has('status')) {
            $s = $request->input('s');
            $status = $request->input('status');
            $data['status'] = $status;
            if ($status == '99') {
                $stories = Story::where('id', '<>', 0);
            } else {
                $stories = Story::where('approval_status', $status);
            }
            $stories = $stories->orderBy('id', 'desc')->whereHas('user', function($query) use ($s) {
                $query->where('name', 'like', '%' . $s . '%');
            })->paginate(16);
            $stories->setPath('?s=' . $s . '&status=' . $status);
        } else {
            $stories = Story::orderBy('id', 'desc')->paginate(16);
        }
        $data['stories'] = $stories;
        return view('admin.story-list', $data);
    }

    public function archivedStories()
    {
        $data['approvedStories'] = Story::where('approval_status', 1)->orderBy('id', 'desc')->get();
        $data['rejectedStories'] = Story::where('approval_status', 2)->orderBy('id', 'desc')->get();

        return view('admin.archived-stories', $data);
    }

    public function storyDetail($from, $id)
    {
        $data['story'] = Story::find($id);
        $data['from'] = $from;
        return view('admin.story-detail', $data);
    }

    public function approveStory($id)
    {
        $story = Story::find($id);
        $story->approval_status = 1;
        $story->save();
        $data['story'] = $story;
        return redirect('adm/stories');
    }

    public function rejectStory($id)
    {
        $story = Story::find($id);
        $story->approval_status = 2;
        $story->save();
        $data['story'] = $story;
        return redirect('adm/stories');
    }

    public function deleteStory($id)
    {
        $story = Story::find($id);
        $story->approval_status = 3;
        $story->save();
        $data['story'] = $story;
        return redirect('adm/stories');
    }

    public function participants(Request $request)
    {
        $participants = User::where('email', '<>', 'admin@duniatiniwinibiti.com');
        if ($request->has('name')) {
            $name = $request->input('name');
            $participants = $participants->where('name', 'like', '%'.$name.'%')->orderBy('id', 'desc')->paginate(20);
            $participants->appends(['name' => $name]);
        } else {
            $participants = $participants->orderBy('id', 'desc')->paginate(20);
        }

        $data['participants'] = $participants;
        return view('admin.participants', $data);
    }

    public function mostLiked()
    {
        $data['mostLikes'] = Story::select(['*', DB::raw('count(story_likes.id) as totalcount')])
            ->join('story_likes', 'stories.id', '=', 'story_likes.story_id')
            ->groupBy('stories.id')
            ->orderBy('totalcount', 'desc')
            ->paginate(20);
        return view('admin.most-likes', $data);
    }

    public function mostViewed()
    {
        $data['mostViews'] = Story::select(['stories.*', DB::raw('count(story_views.id) as totalview')])
            ->join('story_views', 'stories.id', '=', 'story_views.story_id')
            ->groupBy('stories.id')
            ->orderBy('totalview', 'desc')
            ->paginate(20);
        return view('admin.most-views', $data);
    }

    public function editPage($id)
    {
        $page = Page::find($id);
        $data['page'] = $page;
        return view('admin.edit-page', $data);
    }

    public function savePage(Request $request, $id)
    {
        $validator = $this->validator($request->except('_token'));

        if ($validator->fails()) {
            return redirect('adm/edit-page/' . $id)
                ->withErrors($validator)
                ->withInput();
        }

        $page = Page::find($id);
        $page->title = $request->input('title');
        $page->content = $request->input('content');
        $page->save();

        return redirect('adm');
    }

    private function validator(array $inputs)
    {
        return \Validator::make($inputs, [
            'title'     => 'required',
            'content'   => 'required'
        ]);
    }

    public function generateThumbnail()
    {
        $stories = Story::where('image_path', '<>', '')->get();
        foreach ($stories as $story) {
            $imagePath = public_path('uploads') . '/' . $story->image_path;
            $path = pathinfo($imagePath);
            $imageName = $path['filename'];
            $imageExt = $path['extension'];
            $thumbnailName = $imageName . '_thumb' . '.' . $imageExt;
            $thumbnailPath = public_path('uploads') . '/' . $thumbnailName;

            $image = Image::make($imagePath)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $image->save($thumbnailPath, 100);

            $story->thumbnail_path = $thumbnailName;
            $story->save();
        }

    }
}
