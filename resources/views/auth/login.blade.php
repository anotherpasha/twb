@extends('layouts.app')



@section('content')
    <div class="container__main ">

        @include('partials.navbar')

        <section  class="  section  section--subpage">
            
            <div class="container">
                <div class="column__span-6 text--left">

                    <a href="{!! url('/') !!}" class="button__back">< Kembali ke beranda</a>

                    <div class="wrapper--login">                              
                            <div>
                                <p>Masuk dengan Facebook</p>
                                <a href="auth/redirect/facebook" class="button button__split button--facebook ">
                                    <span class="button--icon"><i class="icon icon--facebook"></i></span>
                                    <span class="button--text">Facebook</span>
                                </a>
                            </div>

                            <div class="divider--horizontal divider--login">
                                <span>atau</span>
                            </div>

                            <div class="form--login">
                                <p>Masuk dengan email</p>
                                <form  role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}
                                    <div class="form__control{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input  id="email"  type="email" placeholder="Email" value="{{ old('email') }}" />

                                        @if ($errors->has('email'))
                                            <div class="panel--error">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form__control{{ $errors->has('password') ? ' has-error' : '' }}" >
                                        <input id="password" placeholder="Password"  type="password" class="form-control" name="password">

                                        @if ($errors->has('password'))
                                            <div class="panel--error">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </div>
                                        @endif

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
                </div>


            </div>

        </section>



    </div>
@endsection 
