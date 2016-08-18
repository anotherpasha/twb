@extends('layouts.app')

@section('content')
<div class="container__main "><!-- start main container -->

<!-- start header -->
    <header>
        <div class="container">
            
            <a href="{!! url('/') !!}" class="navbar--logo"><img src="{{ asset('/images/logo.png') }}"></a>
            <nav class="navigation--home">
                @if( Auth::check() )
                <ul class="list__inline">
                    <li class=""><a href="{!! url('logout') !!}" class="navigation--link white">Logout</a></li>
                    <li class=""><a href="{!! url('profile') !!}" class="navigation--link white">Profilku</a></li>
                    <li><img src="{!! asset('images/logo-twb.png') !!}"></li>
                </ul>
                @else
                <ul class="list__inline ">
                    <li class="login--link"><a href="#login" class="button button__tertiary  button--small toggle--modal navigation--button" data-target="login">Login</a></li>
                    <li><img src="{!! asset('images/logo-twb.png') !!}"></li>
                </ul>
                @endif
            </nav>
        </div>

    </header>
<!-- end of header -->

    <!-- start main section -->
    <section id="section--main" class=" window__fit section text--center">

        <div class="content--vertical-middle ">
            
            <div class="section__container">
                
                <div class="column__span-3-desktop column__span-6-mobile column__offset-3 text--left">
                    <div class="headline--home">    
                        <figure class="hidden-on-large"><img class="image--responsive" src="{!! asset('images/logo.png') !!}"></figure>
                        <h2 class="">Ikuti kompetisi foto kreatif Dunia Tini Wini Biti, dan dapatkan puluhan <strong class="text--red">hadiah menarik!</strong></h2>
                        <br>
                        @if( Auth::check() )
                            <a class="button button__primary button--small " href="{!! url('submission') !!}">Ikutan Sekarang</a>
                        @else
                            <a  href="#login" data-target="login" class="toggle--modal button button__primary button--small ">Ikutan Sekarang</a>
                        @endif
                        <br>
                    </div>

                </div>


            </div>
            <div class="scroll--down hidden-on-small">
                <button id="scroll-bottom" class="button button__querniry button--small scroll--to-bottom">more &nbsp;&nbsp;<i id="arrow-down" class="icon icon--arrow-bottom"></i></button>
            </div>
        </div>

            <div id="land-mobile" class="decoration--land-mobile">
            </div>

        <div class="decoration__wrapper--main">
            
            <div class="decoration">

            <div id="land" class="decoration--land--desktop">
            

                <!-- start character icon positioning-->
                <div id="duck"  class="decoration__character character--duck animated">
                    <img src="{{asset('images/fallbacks/duck.png')}}" alt="[duck]" />
                </div>

                <div id="elephant" class="decoration__character character--elephant animated">
                    <img src="{{asset('images/fallbacks/elephant.png')}}" alt="[elephant]" />
                </div>

                <div id="turtle" class="decoration__character character--turtle animated">
                    <img src="{{asset('images/fallbacks/turtle.png')}}" alt="[turtle]" />
                </div>

                <div id="fish" class="decoration__character character--fish">
                    <img src="{{asset('images/fallbacks/fish.png')}}" alt="[fish]" />
                </div>
                <div id="butterfly" class="decoration__character character--butterfly" >
                    <img src="{{asset('images/fallbacks/butterfly.png')}}" alt="[butterfly]" />
                </div>
                

                <!-- start decoration positioning-->

                <div id="tree-small" class="decoration__character decoration--tree-small" >
                    <img src="{{asset('images/fallbacks/tree-small.png')}}" alt="[tree-small]" />
                </div>

                <div id="tree-grass" class="decoration__character decoration--tree-grass" >
                    <img src="{{asset('images/fallbacks/tree-grass.png')}}" alt="[tree-grass]" />
                </div>
                <div id="grass" class="decoration__character decoration--grass">
                    <img  src="{{asset('images/fallbacks/grass.png')}}"  alt="[grass]" />
                </div>

                <div id="flower-white" class="decoration__character decoration--flower-white">
                    <img src="{{asset('images/fallbacks/flower-white.png')}}" alt="[flower-white]" />
                </div>

                <div id="tree-big" class="decoration__character decoration--tree-big" >
                    <img src="{{asset('images/fallbacks/tree-big.png')}}" alt="[tree-big]" />
                </div>
                

                <!-- cloud -->
                <div id="cloud" class="decoration__character decoration--cloud-01" type="image/svg+xml" data="assets/images/characters/cloud-01.svg">
                    <img src="{{asset('images/fallbacks/cloud-01.png')}}" alt="[cloud-01]" />
                </div>

                <div id="cloud" class="decoration__character decoration--cloud-02" type="image/svg+xml" data="assets/images/characters/cloud-02.svg">
                    <img src="{{asset('images/fallbacks/cloud-02.png')}}" alt="[cloud-02]" />
                </div>

                <div id="cloud" class="decoration__character decoration--cloud-03" type="image/svg+xml" data="assets/images/characters/cloud-03.svg">
                       <img src="{{asset('images/fallbacks/cloud-03.png')}}" alt="[cloud-03]" />
                </div>
                
                <!-- end cloud -->

                <div  id="flower-red-small" class="decoration__character decoration--flower-red-small">
                    <img src="{{asset('images/fallbacks/flower-red-small.png')}}" alt="[flower-red-small]" />
                </div>
                <div id="flower-red-big"  class="decoration__character decoration--flower-red-big" >
                    <img src="{{asset('images/fallbacks/flower-red-big.png')}}" alt="[flower-red-big]" />
                </div>

            </div>
            
            </div>
        </div>
        
    </section>
    <!-- end of main section -->


    <!-- start prize section -->
    <section id="section--prize" class="  section">

        <div class="section__container">
            
            <div class="column__span-3-desktop column__span-6-mobile">
                <figure>
                    
                    <img class="image--responsive" src="{{asset('images/prizes.png')}}">

                </figure>
            </div>

            <div class="column__span-3-desktop column__span-6-mobile ">
                <br>
                <h2 class="text--red text--center-mobile">GRAND PRIZE</h2>
                <br>
                <ul class="list__undot list--prize text--center-mobile">
                    <li>
                        <h6>1 Unit</h6>
                        <h4>Nintendo Wii</h4>
                    </li>

                    <li>
                        <h6>1 Unit</h6>
                        <h4>Samsung Galaxy Tab 4 T231</h4>
                    </li>
                    <li>
                        <h6>1 Unit</h6>
                        <h4>Canon Powershot SX410 IS Camera</h4>
                    </li>

                </ul>
            </div>

            <div class="column__span-6 text--center" >
                <a href="{!! url('/prize') !!}" class="button button__secondary button--small">Selengkapnya</a>
            </div>
        </div>

    </section>
    <!-- end of prize section -->


    <!-- start howto section -->
    <section  id="section--howto" class="  section text--center">

        <div class="section__container">
            

            <div class="column__span-6">
                <h2>How To Play</h2>
                <br><br>
            </div>

            <div class="column__span-6">
                                
                <div class="cards__wrapper">
                    <ul class="cards cards--howto">
                        <li class="title">
                            Step 1
                        </li>

                        <li class="images">
                            <img class="image--responsive" src="{{asset('images/google-play.png')}}">
                        </li>

                        <li class="description">
                            Download Dunia Tini Wini Biti di Google Playstore
                        </li>
                    </ul>
                </div>

                <div class="cards__wrapper">
                    <ul class="cards cards--howto">
                        <li class="title">
                            Step 2                          
                        </li>
                        
                        <li class="images">
                            <img class="image--responsive" src="{{asset('images/step-02.png')}}">
                        </li>

                        <li class="description">
                            Scan Koin Tini Wini Biti
                        </li>
                    </ul>
                </div>

                <div class="cards__wrapper">
                    <ul class="cards cards--howto">
                        <li class="title">
                            Step 3
                        </li>
                        
                        <li class="images">
                            <img class="image--responsive" src="{{asset('images/step-03.png')}}">
                        </li>

                        <li class="description">
                            Buat foto kreatif Mom dan si kecil bersama karakter Tini Wini Biti, sertakan cerita serunya.
                        </li>
                    </ul>
                </div>


            </div>

        </div>

    </section>
    <!-- end of howto section -->


    <!-- start gallery section -->
    <section id="section--gallery" class=" window__fit section text--center">


        <div class="section__container">
            
            <div class="column__span-6">
                <h2>Gallery</h2>
                <br>
            </div>

            <div class="column__span-6">
                 
                 <div class="container__gallery">
                    @foreach($stories as $story)
                    <div class="wrapper__thumb">
                        <a href="{!! url('story/' . $story->id) !!}" class="thumb--gallery">
                            <ul class="cards cards--gallery">
                                <li class="images"><figure><img width="250" src="{!! asset('uploads/' . $story->image_path) !!}"></figure></li>
                                <li class=" title">{!! $story->title !!}</li>
                                <li class=" author">Oleh {!! $story->user->name !!}</li>
                                <li class="likes"><i class="icon icon--likes"></i> {!! $story->likes->count() !!} Likes</li>
                            </ul>
                        </a>
                    </div>
                    @endforeach
                 </div>
            
            </div>

            <div class="column__span-6">
                <a href="{!! url('/gallery') !!}" class="button button--small button__secondary">Lihat Semua</a>
            </div>

        </div>

    </section>
    <!-- end of gallery section -->


</div><!-- end of main container -->

@include('partials.sign-in-popup')




@endsection
