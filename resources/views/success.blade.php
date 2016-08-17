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
	<section  class="  section  section--subpage">
		
		<div class="container">
			<div class="column__span-3-desktop text--left column__span-6-mobile ">
				<a href="index.html" class="button__back">< Kembali ke beranda</a>
				 <h1 class="text--center-mobile">Pendaftaran Berhasil</h1>
				 <br><br>
				 <h6 class="text--center-mobile">Sekarang kamu telah terdaftar dalam kompetisi ini, ayo kirimkan foto kreatifmu!</h6>
				 <br>
			</div>
			<div class="column__span-6 text--center-mobile">
				<a href="submission.html" class="button button__primary button--small">Kirim Photo</a>
			</div>
		</div>

	</section>
	<!-- end of success section -->



</div><!-- end of main container -->



@endsection
