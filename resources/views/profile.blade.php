@extends('layouts.app')

@section('content')



<div class="container__main "><!-- start main container -->
    @include('partials/navbar')

    <!-- start profile setion -->
    <section  class="  section  section--subpage">
        
        <div class="container">
            <div class="column__span-3-desktop text--left column__span-6-mobile text--center-mobile">
                <a href="/" class="button__back text--left button--expand">< Kembali ke beranda</a>
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
