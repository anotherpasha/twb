@extends('layouts.app')

@section('content')



<div class="container__main "><!-- start main container -->
    <header class="navbar__subpage">
        <div class="container">
            
        <a href="index.html" class="navbar--logo push-half--top"><img src="{{asset('images/logo-small.png')}}"></a>

        <nav class="navigation--home hard">
            <!-- is login = true -->
            <ul class="list__inline">
                <li class=""><a href="javascript:;" class="navigation--link black">Logout</a></li>
                <li class=""><a href="profile.html" class="navigation--link black">Profilku</a></li>
                <li class="navigation--button"><a href="submission.html" class="button button__primary button--small " data-target="login">Submit</a></li>
            </ul>

            <!-- is login = false -->

            <!--ul class="list__inline">
                <li class=""><a href="javascript:;" class="button button__quertiary  button--small toggle--modal" data-target="login">Login</a></li>
                <li><a href=""><img class="image--responsive" src="assets/images/logo-twb-small.png"></a></li>
            </ul-->
        </nav>
        </div>

    </header>
    <!-- start photo detail section -->
    <section id="section--photo-detail" class="  section  section--subpage">
        <div class="container">         
            <a href="gallery.html" class="text--white">< Kembali ke gallery</a>
        
            <div class="container__photo-detail">
                    <div class="column__span-6 text--center">
                        <figure class="image--figured">
                            <img class="image--responsive" src="{{asset('images/submission-01.jpg')}}">
                        </figure>

                        <div class="photo--detail text--left">
                            <div class="caption--header">                           
                                <h2 class="title">Judul Foto Disini</h2>
                                <span class="likes--counter"><i class="icon--likes icon"></i> Likes</span>
                            </div>

                            <p class="text--primary">oleh Jane Doe</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus!</p>                          
                        </div>

                        <div class="share--group  text--left">
                            <a href="" class="button button__split button--facebook-share  ">
                                <span class="button--icon"><i class="icon icon--facebook"></i></span>
                                <span class="button--text">Share</span>
                            </a>
                            <a href="" class="button button__split button--tweet  ">
                                <span class="button--icon"><i class="icon icon--twitter"></i></span>
                                <span class="button--text">Tweet</span>
                            </a>                
                        </div>
                        <hr>
                    </div>

                    <div class="column__span-6">
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

                    </div>
            </div>
        </div>
    </section>
    <!-- end of photo detail section -->



</div><!-- end of main container -->



@endsection
