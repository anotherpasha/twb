@extends('layouts.app')

@section('content')



<div class="container__main "><!-- start main container -->
    @include('partials/navbar')
	<!-- start success setion -->
	<section  class="  section  section--subpage">
		
		<div class="container">
			<div class="column__span-3-desktop text--left column__span-6-mobile ">
				<a href="/" class="button__back">< Kembali ke beranda</a>
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
