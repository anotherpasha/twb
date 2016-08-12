@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Post Story</div>

                    <div class="panel-body">
                        <form name="post-story" action="" method="POST">

                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" id="image">
                            </div>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="story">Story</label>
                                <textarea class="form-control" name="story"></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
