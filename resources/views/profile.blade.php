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

    <!-- start profile setion -->
    <section  class="  section  section--subpage">
        
        <div class="container">
            <div class="column__span-3-desktop text--left column__span-6-mobile text--center-mobile">
                <a href="index.html" class="button__back">< Kembali ke beranda</a>
                 <h1>Profilku</h1>
                 <br>
                 <div class="username rounded">
                    Hello, Jane Doe!
                 </div>

            </div>
            <div class="column__span-6">
                  <br>
                 <h1 class="text--center-mobile">Entriku</h1>
                 <br><br>
                 <div class="row ">

                    <div class="wrapper__thumb">
                        <a href="" class="thumb--gallery">
                            <ul class="cards cards--gallery">
                                <li class="images">
                                    <figure></figure>
                                </li>
                                <li class=" title">
                                    Judul foto
                                </li>
                                <li class=" author">
                                    oleh Jane Doe
                                </li>
                                <li class="likes">
                                    <i class="icon icon--likes"></i> Likes
                                </li>
                            </ul>
                        </a>
                    </div>

                    <div class="wrapper__thumb">
                        <a href="" class="thumb--gallery">
                            <ul class="cards cards--gallery">
                                <li class="images">
                                    <figure></figure>
                                </li>
                                <li class=" title">
                                    Judul foto
                                </li>
                                <li class=" author">
                                    oleh Jane Doe
                                </li>
                                <li class="likes">
                                    <i class="icon icon--likes"></i> Likes
                                </li>
                            </ul>
                        </a>
                    </div>

                    <div class="wrapper__thumb">
                        <a href="" class="thumb--gallery">
                            <ul class="cards cards--gallery">
                                <li class="images">
                                    <figure></figure>
                                </li>
                                <li class=" title">
                                    Judul foto
                                </li>
                                <li class=" author">
                                    oleh Jane Doe
                                </li>
                                <li class="likes">
                                    <i class="icon icon--likes"></i> Likes
                                </li>
                            </ul>
                        </a>
                    </div>

                    <div class="wrapper__thumb">
                        <a href="" class="thumb--gallery">
                            <ul class="cards cards--gallery">
                                <li class="images">
                                    <figure></figure>
                                </li>
                                <li class=" title">
                                    Judul foto
                                </li>
                                <li class=" author">
                                    oleh Jane Doe
                                </li>
                                <li class="likes">
                                    <i class="icon icon--likes"></i> Likes
                                </li>
                            </ul>
                        </a>
                    </div>

                 </div>
            
            </div>          
        </div>

    </section>
    <!-- end of profile section -->


</div><!-- end of main container -->



@endsection
