@extends('layouts.app')

@section('content')



<div class="container__main "><!-- start main container -->
    @include('partials/navbar')

    <!-- start signup setion -->
    <section  class="  section  section--subpage text--center">
        
        <div class="container">
            <div class="column__span-3-desktop text--left column__span-6-mobile">
                <a href="index.html" class="button__back">< Kembali ke beranda</a>
                 <h1 class="text--center-mobile">Formulir Pendaftaran</h1>
                 <br><br>
                 <h6 class="text--center-mobile">Lengkapilah data dirimu</h6>
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
