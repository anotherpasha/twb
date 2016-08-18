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


<!-- @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <div class="panel--error">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <div class="panel--error">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a href="auth/redirect/facebook" class="btn btn-primary">FB Login</a>

                                <a href="auth/redirect/twitter" class="btn btn-primary">Twitter Login</a>
                            </div>
                            <div class="col-md-6 col-md-offset-4">
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 -->
