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
                                </tr>

                                @foreach( $mostLikes as $mostLike )
                                    <tr>
                                        <td>{{ $mostLike->user->name }}</td>
                                        <td>{{ $mostLike->user->email }}</td>
                                        <td><img src="{{ asset('uploads/' . $mostLike->image_path) }}" width="100"></td>
                                        <td><a href="{{ url('adm/story/most-liked/' . $mostLike->id) }}">{{ $mostLike->title }}</a></td>
                                        <td>{{ $mostLike->totalcount }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="column__span-6 text--center">
                            {!! (new App\TWBPaginationPresenter($mostLikes))->render()  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
