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
                        <a href="{!! $shareLinks['facebook'] !!}" class="button button__split button--facebook-share  ">
                            <span class="button--icon"><i class="icon icon--facebook"></i></span>
                            <span class="button--text">Share</span>
                        </a>
                        <a href="{!! $shareLinks['twitter'] !!}" class="button button__split button--tweet  ">
                            <span class="button--icon"><i class="icon icon--twitter"></i></span>
                            <span class="button--text">Tweet</span>
                        </a>
                    </div>
                    <hr>
                </div>

                    <!-- div class="column__span-6">
                        <h4>Comments</h4>
                        <div class="block__comment">
                            <div class="block__comment--avatar small">
                                <figure>
                                    <img src="">
                                </figure>
                            </div>
                            <div class="block__comment--form">
                                <form class="form--comment">
                                    <textarea placeholder="beri komentar"></textarea>
                                    <button type="submit" class="button button__primary button--small">Submit</button>
                                </form>
                            </div>
                        </div>

                        <div class="block__comment">
                            <div class="block__comment--avatar large">
                                <figure>
                                    <img src="">
                                </figure>
                            </div>
                            <div class="block__comment--content">
                                <ul class="list__undot">
                                    <li class="user">Jane Doe</li>
                                    <li class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                    <li class="time">1 hour ago</li>
                                </ul>
                            </div>
                        </div>                      

                        <div class="block__comment">
                            <div class="block__comment--avatar large">
                                <figure>
                                    <img src="">
                                </figure>
                            </div>
                            <div class="block__comment--content">
                                <ul class="list__undot">
                                    <li class="user">Jane Doe</li>
                                    <li class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                    <li class="time">1 hour ago</li>
                                </ul>
                            </div>
                        </div>                      
                        <div class="block__comment">
                            <div class="block__comment--avatar large">
                                <figure>
                                    <img src="">
                                </figure>
                            </div>
                            <div class="block__comment--content">
                                <ul class="list__undot">
                                    <li class="user">Jane Doe</li>
                                    <li class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                    <li class="time">1 hour ago</li>
                                </ul>
                            </div>
                        </div>                      
                        <div class="block__comment">
                            <div class="block__comment--avatar large">
                                <figure>
                                    <img src="">
                                </figure>
                            </div>
                            <div class="block__comment--content">
                                <ul class="list__undot">
                                    <li class="user">Jane Doe</li>
                                    <li class="content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                    <li class="time">1 hour ago</li>
                                </ul>
                            </div>
                        </div>                      

                    </div --> <!-- end of comment -->
            </div>
            <a href="{!! url('/gallery') !!}" class="">< Kembali ke gallery</a>
        </div>
    </section>
    <!-- end of photo detail section -->



</div><!-- end of main container -->
@endsection
