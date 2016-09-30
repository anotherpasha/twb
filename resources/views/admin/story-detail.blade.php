@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Story Detail</span>
                        <span class="pull-right">
                            <a href="@if($from == 'dashboard') {{ asset('adm') }} @else {{ asset('adm/' . $from) }} @endif">Back</a>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="container__photo-detail">
                            <div class="column__span-6 text--center">
                                <figure class="image--figured--admin">
                                    <img class="image--responsive" src="{!! asset('uploads/' . $story->image_path) !!}">
                                </figure>

                                <div class="photo--detail text--left">
                                    @if($story->approval_status == 0)
                                    <a href="{{ url('adm/approve/' . $story->id) }}" class="btn btn-primary" role="button">Approve</a> <a href="{{ url('adm/reject/' . $story->id) }}" class="btn btn-default btn-warning" role="button">Reject</a>
                                    @endif

                                    @if($story->approval_status != 3)
                                    <a href="{{ url('adm/delete/' . $story->id) }}" class="btn btn-default btn-danger" role="button">Delete</a>
                                    @endif
                                </div>

                                <div class="photo--detail text--left">
                                    <div class="caption--header">
                                        <h2 class="title">{!! $story->title !!}</h2>
                                    </div>
                                    <p class="text--primary">oleh {!! $story->user->name !!}</p>
                                    <p>{!! $story->story !!}</p>
                                </div>
                                <br>
                                <div class="photo--detail text--left">
                                    @if($story->approval_status == 0)
                                        <a href="{{ url('adm/approve/' . $story->id) }}" class="btn btn-primary" role="button">Approve</a> <a href="{{ url('adm/reject/' . $story->id) }}" class="btn btn-default btn-warning" role="button">Reject</a>
                                    @endif

                                    @if($story->approval_status != 3)
                                        <a href="{{ url('adm/delete/' . $story->id) }}" class="btn btn-default btn-danger" role="button">Delete</a>
                                    @endif
                                </div>
                                <hr>
                            </div>
                        </div> <!-- end of container__photo-detail -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
