@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Participant List</div>
                    <div class="panel-body">

                        <div class="col-lg-12">
                            <form action="{!! url('adm/participants') !!}" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Participant Name">
                                </div>
                                <button type="submit" name="search" value="search" class="btn btn-default">Search</button>
                            </form>
                            <br>
                        </div>

                        <div class="col-lg-12">
                            <table class="table table-bordered table-striped">
                                <tr align="center">
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>Telepon</td>
                                    <td>Kota</td>
                                    <td>Address</td>
                                </tr>

                                @foreach( $participants as $participant )
                                    <tr>
                                        <td>{{ $participant->name }}</td>
                                        <td>{{ $participant->email }}</td>
                                        <td>{{ $participant->phone }}</td>
                                        <td>{{ $participant->city }}</td>
                                        <td>{{ $participant->address }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                        <div class="column__span-6 text--center">
                            {!! (new App\TWBPaginationPresenter($participants))->render()  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
