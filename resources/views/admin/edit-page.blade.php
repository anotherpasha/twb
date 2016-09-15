@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Page Form</div>
                    <div class="panel-body">

                        <form action="{!! url('adm/save-page/' . $page->id) !!}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{!! $page->title !!}">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" id="content" class="form-control">{!! $page->content !!}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" value="save" name="save" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            height: 350
        });
    </script>
@endsection