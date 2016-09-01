@extends('layouts.app')

@section('content')

<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

    <!-- start photo detail section -->
    <section id="section--photo-detail" class="  section  section--subpage">
        <div class="container">
            <a href="{!! url('/gallery') !!}" class="text--white navigation--back-to-gallery">< Kembali ke gallery</a>
            <br>
            <div class="container__photo-detail">
                <div class="column__span-6 text--center">
                    <figure class="image--figured">
                        <img class="image--responsive" src="{!! asset('uploads/' . $story->image_path) !!}">
                    </figure>

                    <div class="photo--detail text--left">
                        <div class="caption--header">
                            <h2 class="title">{!! $story->title !!}</h2>
                            <a href="{!! url('like/' . $story->id) !!}" class="likes--counter"><i class="icon--likes icon"></i> {!! $story->likes->count() !!} Likes</a>
                        </div>

                        <p class="text--primary">oleh {!! $story->user->name !!}</p>
                        <p>{!! $story->story !!}</p>
                    </div>

                    <div class="share--group  text--left">
                        <a href="{!! $facebookLink['facebook'] !!}" target="_blank" class="button button__split button--facebook-share  ">
                            <span class="button--icon"><i class="icon icon--facebook"></i></span>
                            <span class="button--text">Share</span>
                        </a>
                        <a href="{!! $twitterLink['twitter'] !!}" target="_blank" class="button button__split button--tweet  ">
                            <span class="button--icon"><i class="icon icon--twitter"></i></span>
                            <span class="button--text">Tweet</span>
                        </a>
                    </div>
                    <hr>
                </div>
            </div>
            <a href="{!! url('/gallery') !!}" class="">< Kembali ke gallery</a>
        </div>
    </section>
    <!-- end of photo detail section -->



</div><!-- end of main container -->
@endsection
