@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span >Participants ({{ $participantNumber }})</span>
                            <span class="pull-right"><a href="{{ url('adm/participants') }}">See All</a></span>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                            @foreach($participants as $participant)
                                <li class="list-group-item">{{ $participant->name }}</li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span >Most Liked</span>
                            <span class="pull-right"><a href="{{ url('adm/most-liked') }}">See All</a></span>
                        </div>
                        <div class="panel-body">
                            <ul class="list-group">
                            @foreach($mostLikes as $mostLike)
                                <li class="list-group-item">
                                    <span class="badge">{{ $mostLike->totalcount }}</span>
                                    <a href="{{ url('adm/story/dashboard/' . $mostLike->id) }}">{{ $mostLike->title }}</a>
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading ">
                            <span >Most Viewed</span>
                            <span class="pull-right"><a href="{{ url('adm/most-viewed') }}">See All</a></span>
                        </div>
                        <div class="panel-body">
                            @foreach($mostViews as $mostView)
                                <li class="list-group-item">
                                    <span class="badge">{{ $mostView->totalview }}</span>
                                    <a href="{{ url('adm/story/dashboard/' . $mostView->id) }}">{{ $mostView->title }}</a>
                                </li>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading "><span >Submission ({{ $submissionNumber }})</span></div>
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="badge">{{ $openStory }}</span>
                                    <a href="{{ url('adm/stories/?status=0') }}">Open</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">{{ $approvedStory }}</span>
                                    <a href="{{ url('adm/stories/?status=1') }}">Approved</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="badge">{{ $rejectedStory }}</span>
                                    <a href="{{ url('adm/stories/?status=2') }}">Rejected</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Latest Stories</span>
                        <span class="pull-right"><a href="{{ url('adm/stories') }}">See All</a></span>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">

                            <tr align="center">
                                <td>Nama</td>
                                <td>Email</td>
                                <td>Tgl Submit</td>
                                <td>Cerita</td>
                                <td>Foto</td>
                                <td>Likes</td>
                                <td>Status</td>
                            </tr>

                            @foreach( $stories as $story )
                                <tr>
                                    <td>{{ $story->user->name }}</td>
                                    <td>{{ $story->user->email }}</td>
                                    <td>{{ $story->created_at->format('d-M-Y') }}</td>
                                    <td><a href="{{ url('adm/story/dashboard/' . $story->id) }}">{{ $story->title }}</a></td>
                                    <td><img width="100" src="{{ asset('uploads/' . $story->image_path) }}"></td>
                                    <td>{{ $story->likes->count() }}</td>
                                    <td>
                                        @if($story->approval_status == 0)
                                            OPEN
                                        @elseif($story->approval_status == 1)
                                            APPROVED
                                        @else
                                            REJECTED
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
