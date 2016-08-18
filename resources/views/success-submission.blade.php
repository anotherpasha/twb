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

    <!-- start success setion -->
    <section  id="section--success-submission" class=" section   section--subpage">
        
        <div class="container">
            <div class="column__span-3-desktop text--left column__span-6-mobile">

                 <h1 class="text--center-mobile">Berhasil</h1>
                 <br><br>
                 <h6 class="text--white text--center-mobile">
                     Terima kasih Moms telah berpartisipasi dalam kompetisi foto kreatif Dunia Tini Wini Biti! 
                     <br><br>
                    Ayo share fotonya dan kumpulkan likes untuk foto dan cerita seru Moms dan si kecil bersama karakter Tini Wini Biti. Ada banyak hadiah menarik untuk Moms dan si kecil.
                </h6>
                 <br>
            </div>
            <div class="column__span-6 text--center-mobile">
                <a href="" class="button button__split button--facebook-share rounded ">
                    <span class="button--icon"><i class="icon icon--facebook"></i></span>
                    <span class="button--text">Share</span>
                </a>
                <br><br>
                <a href="index.html" class="button__back text--white">< Kembali ke beranda</a>
            </div>
        </div>
    <br><br><br><br>

    </section>
    <!-- end of success section -->


</div><!-- end of main container -->



@endsection
