@extends('layouts.app')

@section('content')
<div class="container__main "><!-- start main container -->

<!-- start header -->
    <header>
        <div class="container">
            
            <a href="/" class="navbar--logo"><img src="{{asset('images/logo.png')}}"></a>
            <nav class="navigation--home">
                <!-- is login == true -->
                <!--ul class="list__inline">
                    <li class=""><a href="javascript:;" class="navigation--link white">Logout</a></li>
                    <li class=""><a href="javascript:;" class="navigation--link white">Profilku</a></li>
                    <li class=""><a href="javascript:;" class="button button__tertiary  button--small toggle--modal" data-target="login">Login</a></li>
                    <li><a href=""><img src="assets/images/logo-twb.png"></a></li>
                </ul-->         

                <ul class="list__inline ">
                    <li class="login--link"><a href="javascript:;" class="button button__tertiary  button--small toggle--modal navigation--button" data-target="login">Login</a></li>
                </ul>
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
                        <figure class="hidden-on-large"><img class="image--responsive" src="{{asset('images/logo.png')}}"></figure>           
                        <h2 class="">Ikuti kompetisi foto kreatif Dunia Tini Wini Biti, dan dapatkan puluhan <strong class="text--red">hadiah menarik!</strong></h2>
                        <br>
                        <button data-target="login" class="toggle--modal button button__primary button--small ">Ikutan Sekarang</button>
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
                    <img src="{{asset('images/fallbacks/duck.png')}}" alt="[turtle]" />
                </div>

                <div id="fish" class="decoration__character character--fish">
                    <img src="{{asset('images/fallbacks/duck.png')}}" alt="[fish]" />
                </div>
                <div id="butterfly" class="decoration__character character--butterfly" >
                    <img src="{{asset('images/fallbacks/duck.png')}}" alt="[butterfly]" />
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
                <a href="/prize" class="button button__secondary button--small">Selengkapnya</a>
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

                    <div class="wrapper__thumb">
                        <a href="photo.html" class="thumb--gallery">
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
                        <a href="photo.html" class="thumb--gallery">
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
                        <a href="photo.html" class="thumb--gallery">
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
                        <a href="photo.html" class="thumb--gallery">
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
                        <a href="photo.html" class="thumb--gallery">
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
                        <a href="photo.html" class="thumb--gallery">
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
                        <a href="photo.html" class="thumb--gallery">
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
                        <a href="photo.html" class="thumb--gallery">
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

            <div class="column__span-6">
                <a href="gallery.html" class="button button--small button__secondary">Lihat Semua</a>
            </div>

        </div>

    </section>
    <!-- end of gallery section -->


</div><!-- end of main container -->

<div id="login" class="container__modal modal--login">
    
    <div class="modal__dialog">
        <div class="modal__header">
            <h2>Masuk</h2>
        </div>
        <br>
        <div class="modal__body">

            <div class="">
                <p>Masuk dengan Facebook</p>
                <a href="" class="button button__split button--facebook ">
                    <span class="button--icon"><i class="icon icon--facebook"></i></span>
                    <span class="button--text">Facebook</span>
                </a>
            </div>

            <div class="divider--horizontal divider--login">
                <span>atau</span>
            </div>

            <div class="form--login">
                <p>Masuk dengan email</p>
                <form>
                    <div class="form__control">
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="form__control">
                        <input type="password" placeholder="Password" />
                    </div>
                    <div class="form__submit">
                        <button type="submit" class="button flush--top push--bottom button__form button--expand">Masuk</button>
                    </div>

                </form>
                <div>
                    <p>Belum terdaftar? <a href="" class="toggle--modal text--red" data-target="signup">Daftar disini</a></p>
                </div>
            </div>


        </div>
        <a href="" class="toggle--close"><i class="icon icon--close"></i></a>
    </div>

</div>



<div id="signup" class="container__modal modal--signup">
    <div class="modal__dialog">

        <div class="modal__header">
            <h2>Daftar</h2>
        </div>
        <br>

        <div class="modal__body">       

                <h6>Daftarkan diri kamu untuk dapat <br>berpartisipasi dalam kompetisi ini</h6>
                <br><br>
            <div class="modal--span span--signup">
                <p>Daftar dengan Facebook</p>
                <a href="" class="button button__split button--facebook flush--top button--expand">
                    <span class="button--icon"><i class="icon icon--facebook"></i></span>
                    <span class="button--text">Facebook</span>
                </a>
            </div>
            <div class="modal--span span--signup divider--vertical divider--signup">
                <span>atau</span>
            </div>
            <div class="modal--span span--signup">
                <p>Daftar dengan Email</p>
                <a href="signup.html" class="button flush--top push--bottom button__form button--expand">Email</a>
            </div>
            <br><br>
        </div>
        <div class="modal__footer">
            <p>Sudah terdaftar? <a href="/signup" class="text--red">Masuk disini</a></p>
        </div>

        <a href="" class="toggle--close"><i class="icon icon--close"></i></a>
    </div>
</div>






@endsection
