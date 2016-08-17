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
    <!-- start snk setion -->
    <section  class="  section  section--subpage">
        
        <div class="container">
            <div class="column__span-5 text--left column__span-6-mobile">
                <a href="index.html" class="button__back">< Kembali ke beranda</a>
                 <h1>Syarat &amp; Ketentuan</h1>
                 <br><br>
                 <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                 <br><br>
                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                
                 <br><br><br>
                 <strong>1. Lorem Ipsum</strong><br>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                <br><br>
                Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                
                 <br><br><br>
                 <strong>2. Lorem Ipsum</strong><br>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                <br><br>
                Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                </p>

            </div>

        </div>

    </section>
    <!-- end of snk section -->


</div><!-- end of main container -->



@endsection
