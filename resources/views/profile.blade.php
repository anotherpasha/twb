@extends('layouts.app')

@section('content')



<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

    <!-- start profile setion -->
    <section  class="  section  section--subpage">
        
        <div class="container">
            <div class="column__span-3-desktop text--left column__span-6-mobile text--center-mobile">
                <a href="{!! url('/') !!}" class="button__back">< Kembali ke beranda</a>
                <h1>Profilku</h1>
                <br>
                <div class="username rounded">
                    Hello, {!! $user->name !!}
                </div>
            </div>
            <div class="column__span-6">
                <br>
                <h1 class="text--center-mobile">Entriku</h1>
                <br><br>
                <div class="row ">
                    @foreach($user->stories as $story)
                        <div class="wrapper__thumb">
                            <a href="{!! url('story/' . $story->id) !!}" class="thumb--gallery">
                                <ul class="cards cards--gallery">
                                    <li class="images"><figure><img src="{!! asset('uploads/' . $story->image_path) !!}" width="250"></figure></li>
                                    <li class="title">{!! $story->title !!}</li>
                                    <li class="author">Oleh {!! $story->user->name !!}</li>
                                    <li class="likes"><i class="icon icon--likes"></i> Likes</li>
                                </ul>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- end of profile section -->


</div><!-- end of main container -->



@endsection
