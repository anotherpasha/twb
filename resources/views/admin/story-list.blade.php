@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Story List</div>
                    <div class="panel-body">

                        <div>
                            <form method="get">
                                <div class="form-group col-lg-6">
                                    <label for="s">Name</label>
                                    <input type="text" class="form-control" id="s" name="s" placeholder="search by name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="99" @if($status == '99') selected @endif>See All</option>
                                        <option value="0" @if($status == '0') selected @endif>Open</option>
                                        <option value="1" @if($status == '1') selected @endif>Approved</option>
                                        <option value="2" @if($status == '2') selected @endif>Rejected</option>
                                        <option value="3" @if($status == '3') selected @endif>Deleted</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <button type="submit" class="btn btn-default">Search</button>
                                </div>
                            </form>
                            <br><br>
                            <div class="column__span-6 text--center">
                                {!! (new App\TWBPaginationPresenter($stories))->render()  !!}
                            </div>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>Tgl Submit</td>
                                    <td>Cerita</td>
                                    <td>Foto</td>
                                    <td>Likes</td>
                                    <td>Action</td>
                                </tr>

                                @foreach( $stories as $story )
                                <tr>
                                    <td>{{ $story->user->name }}</td>
                                    <td>{{ $story->user->email }}</td>
                                    <td>{{ $story->created_at->format('d-M-Y') }}</td>
                                    <td><a href="{{ url('adm/story/stories/' . $story->id) }}">{{ $story->title }}</a></td>
                                    <td><img width="100" src="{{ asset('uploads/' . $story->image_path) }}"></td>
                                    <td>{{ $story->likes->count() }}</td>
                                    <td>
                                        @if($story->approval_status == 0)
                                        <a href="{{ url('adm/approve/' . $story->id) }}">Approve</a> | <a href="{{ url('adm/reject' . $story->id) }}">Reject</a>
                                        @elseif($story->approval_status == 1)
                                            APPROVED
                                        @elseif($story->approval_status == 2)
                                            REJECTED
                                        @else
                                            DELETED
                                        @endif

                                        @if($status != 3)
                                         | <a href="{{ url('adm/delete/' . $story->id) }}">Delete</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="column__span-6 text--center">
                            <!-- ul class="pagination list__inline">
                                <li><a href=""><</a></li>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">4</a></li>
                                <li><a href="">5</a></li>
                                <li><a href="">></a></li>
                            </ul -->
                            {!! (new App\TWBPaginationPresenter($stories))->render()  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
