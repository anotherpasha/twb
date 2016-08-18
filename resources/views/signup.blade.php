@extends('layouts.app')

@section('content')
<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

    <!-- start signup setion -->
    <section  class="  section  section--subpage text--center">
        
        <div class="container">
            <div class="column__span-3-desktop text--left column__span-6-mobile">
                <a href="{!! url('/') !!}" class="button__back">< Kembali ke beranda</a>
                <h1>Formulir Pendaftaran</h1>
                <br><br>
                <h6>Lengkapilah data dirimu</h6>
                <br>
                <form class="form__validation" method="post" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form__control required">
                        <input type="text" placeholder="Nama" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form__control required">
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"/>
                    </div>
                    <div class="form__control required {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" placeholder="Password" name="password" >
                    </div>
                    <div class="form__control required">
                        <input type="password" placeholder="Confirm Password" name="password_confirmation" >
                    </div>
                    <div class="form__control">
                        <input type="text" placeholder="City" name="city" value="{{ old('city') }}"/>
                    </div>
                    <div class="form__control ">
                        <textarea placeholder="Alamat" name="address">{{ old('address') }}</textarea>
                    </div>
                    <div class="form__control required">
                        <input type="number" placeholder="Nomor Telepon/Handphone" name="phone" alue="{{ old('phone') }}"/>
                    </div>
                    <div class="form__control">
                        <label>* Wajib diisi</label>
                    </div>
                    <div class="form__control">
                        <button type="submit" class="button button__secondary button--small disabled">Daftar</button>
                    </div>
                </form>
            </div>
        </div>

    </section>
    <!-- end of signup section -->

</div><!-- end of main container -->
@endsection
