@extends('layouts.app')

@section('content')
<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

	<section id="section--prize" class=" window__fit section ">
		<div class="content--vertical-middle">
		
			<div class="section__container">
				<a href="{!! url('/') !!}" class="text--primary">< Kembali ke beranda</a>
				<h1 class="text--center-mobile">Hadiah-hadiah</h1>
				<br>
				<div class="column__span-3 column__span-6-mobile">
					<figure>
					
						<img class="image--responsive" src="{{asset('images/prizes.png')}}">

					</figure>
				</div>

				<div class="column__span-3 column__span-6-mobile  text--center-mobile">
					<br>
					<h2 class="text--red text--center-mobile">GRAND PRIZE</h2>
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
						<img class="image--responsive image--prize" src="{{asset('images/consolation-prize-01.png')}}">
					</figure>
					<br>
					<h6>2 Unit</h6>
					<h3>Samsung Galaxy J3</h3>
				</div>

				<div class="column__span-2-desktop column__span-6-mobile text--center push--bottom">
					<figure>
						<img class="image--responsive image--prize" src="{{asset('images/consolation-prize-02.png')}}">
					</figure>
					<br>
					<h6>5 Unit</h6>
					<h3>Samsung Galaxy V</h3>
				</div>

				<div class="column__span-2-desktop column__span-6-mobile text--center push--bottom">
					<figure>
						<img class="image--responsive image--prize" src="{{asset('images/consolation-prize-03.png')}}">
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
							<img class="image--responsive image--prize" src="{{asset('images/weekly-prize-01.png')}}">
						</figure>
						<br>
						<h3>Sodexo Voucher</h3>
						<h6>@IDR 250,000</h6>
					</div>

					<div class="column__span-3-desktop column__span-6-mobile text--center push--bottom">
						<figure>
							<img class="image--responsive image--prize" src="{{asset('images/weekly-prize-02.png')}}">
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


