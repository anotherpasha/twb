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
	<section id="section--prize" class=" window__fit section ">
		<div class="content--vertical-middle">
		
			<div class="section__container">
				<a href="index.html" class="text--primary">< Kembali ke beranda</a>
				<h1 >Hadiah-hadiah</h1>
				<br>
				<div class="column__span-3 column__span-6-mobile">
					<figure>
					
						<img class="image--responsive" src="{{asset('images/prizes.png')}}">

					</figure>
				</div>

				<div class="column__span-3 column__span-6-mobile  text--center-mobile">
					<br>
					<h2 class="text--red">GRAND PRIZE</h2>
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
			</div>
		</div>

	</section>


	<section class="section ">
		<div class="section__container">
			<br>
			<div class="row">
				<h1 class="text--red text--center">Hadiah Hiburan</h1>
				<br>
				<div class="column__span-2-desktop column__span-6-mobile text--center push--bottom">
					<figure>
						<img class="image--responsive" src="{{asset('images/consolation-prize-01.png')}}">
					</figure>
					<br>
					<h6>2 Unit</h6>
					<h3>Samsung Galaxy J3</h3>
				</div>

				<div class="column__span-2-desktop column__span-6-mobile text--center push--bottom">
					<figure>
						<img class="image--responsive" src="{{asset('images/consolation-prize-02.png')}}">
					</figure>
					<br>
					<h6>5 Unit</h6>
					<h3>Samsung Galaxy V</h3>
				</div>

				<div class="column__span-2-desktop column__span-6-mobile text--center push--bottom">
					<figure>
						<img class="image--responsive" src="{{asset('images/consolation-prize-03.png')}}">
					</figure>
					<br>
					<h6>2 Unit</h6>
					<h3>Lego Set</h3>
				</div>

			</div>
		</section>


	<section class="section section--subpage">
			<div class="section__container">	
			<br><br><br><hr>	<br><br><br>
				<div class="row">

					<h1 class="text--red text--center">Hadiah Mingguan</h1>
					<br><br>
					<div class="column__span-3-desktop column__span-6-mobile text--center push--bottom">
						<figure>
							<img class="image--responsive" src="{{asset('images/weekly-prize-01.png')}}">
						</figure>
						<br>
						<h3>Sodexo Voucher</h3>
						<h6>@IDR 250,000</h6>
					</div>

					<div class="column__span-3-desktop column__span-6-mobile text--center push--bottom">
						<figure>
							<img class="image--responsive" src="{{asset('images/weekly-prize-02.png')}}">
						</figure>
						<br>
						<h3>Voucher Pulsa</h3>
						<h6>IDR 100,000</h6>
					</div>			
				</div>
			</div>
		</div>
	</section>

</div><!-- end of main container -->
@endsection


