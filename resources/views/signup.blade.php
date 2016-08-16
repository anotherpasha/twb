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

    <!-- start signup setion -->
    <section  class="  section  section--subpage text--center">
        
        <div class="container">
            <div class="column__span-3-desktop text--left column__span-6-mobile">
                <a href="index.html" class="button__back">< Kembali ke beranda</a>
                 <h1>Formulir Pendaftaran</h1>
                 <br><br>
                 <h6>Lengkapilah data dirimu</h6>
                 <br>
                 <form class="form__validation">
                    <div class="form__control required">
                        <input type="text" placeholder="Nama" />
                    </div>
                    <div class="form__control required">
                        <input type="email" placeholder="Email"/>
                    </div>
                    <div class="form__control required">
                        <input type="password" placeholder="Password" >
                    </div>
                    <div class="form__control ">
                        <textarea placeholder="Alamat" ></textarea>
                    </div>
                    <div class="form__control ">
                        <input type="number" placeholder="Nomor Telepon/Handphone"/>
                    </div>
                    <div class="form__control">
                        <label>* Wajib diisi</label>
                    </div>
                    <div class="form__control">
                        <!--button type="submit" class="button button__secondary button--small disabled">Daftar</button-->
                        <a href="success.html" type="submit" class="button button__secondary button--small disabled">Daftar</a>

                    </div>
                 </form>
            </div>
        </div>

    </section>
    <!-- end of signup section -->



</div><!-- end of main container -->



@endsection
