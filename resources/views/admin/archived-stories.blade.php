@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Story List</div>
                    <div class="panel-body">
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#approved" aria-controls="approved" role="tab" data-toggle="tab">Approved Stories</a></li>
                                <li role="presentation"><a href="#rejected" aria-controls="rejected" role="tab" data-toggle="tab">Rejected Stories</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <br>
                                <div role="approved" class="tab-pane active" id="approved">
                                    @foreach( $approvedStories as $approved )
                                        <div class="wrapper__thumb">
                                            <a href="{!! url('/adm/story/' . $approved->id) !!}" class="thumb--gallery">
                                                <ul class="cards cards--gallery">
                                                    <li class="images"><figure><img width="250" src="{!! asset('uploads/' . $approved->image_path) !!}"></figure></li>
                                                    <li class=" title">{!! $approved->title !!}</li>
                                                    <li class=" author">oleh {!! $approved->user->name !!}</li>
                                                    <li class="likes">&nbsp;</li>
                                                </ul>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div role="rejected" class="tab-pane" id="rejected">
                                    @foreach( $rejectedStories as $rejected )
                                        <div class="wrapper__thumb">
                                            <a href="{!! url('/adm/story/' . $rejected->id) !!}" class="thumb--gallery">
                                                <ul class="cards cards--gallery">
                                                    <li class="images"><figure><img width="250" src="{!! asset('uploads/' . $rejected->image_path) !!}"></figure></li>
                                                    <li class=" title">{!! $rejected->title !!}</li>
                                                    <li class=" author">oleh {!! $rejected->user->name !!}</li>
                                                    <li class="likes">&nbsp;</li>
                                                </ul>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
