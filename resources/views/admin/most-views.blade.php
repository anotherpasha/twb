@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Most Like</div>
                    <div class="panel-body">

                        <div>
                            <table class="table table-bordered table-striped">
                                <tr align="center">
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Photo</td>
                                    <td>Title</td>
                                    <td>Likes</td>
                                    <td>Views</td>
                                </tr>

                                @foreach( $mostViews as $mostView )
                                    <tr>
                                        <td>{{ $mostView->user->name }}</td>
                                        <td>{{ $mostView->user->email }}</td>
                                        <td><img src="{{ asset('uploads/' . $mostView->image_path) }}" width="100"></td>
                                        <td><a href="{{ url('adm/story/most-viewed/' . $mostView->id) }}">{{ $mostView->title }}</a></td>
                                        <td>{{ $mostView->likes->count() }}</td>
                                        <td>{{ $mostView->totalview }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="column__span-6 text--center">
                            {!! (new App\TWBPaginationPresenter($mostViews))->render()  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
