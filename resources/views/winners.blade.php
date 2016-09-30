@extends('layouts.app')

@section('content')
<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

	<section id="section--prize" class="  section ">
		<div class="content--vertical-middle">

			<div class="section__container">
				<a href="{!! url('/') !!}" class="text--primary">< Kembali ke beranda</a>
        <h1 class="text--center-mobile">Pemenang</h1>

				<br>
        <div class="column__span-3 column__span-6-mobile">
            <br><br><br>
				      <h1 class="text--center-mobile">Pemenang</h1>
              <h1 class="text--center-mobile">Grand Prize</h1>
				</div>
				<div class="column__span-3 column__span-6-mobile">
					<figure>

						<img class="image--responsive" src="{{asset('images/prizes.png')}}">

					</figure>
				</div>

        <div class="column__span-6 hard winner--container">

            <div class="cards__wrapper">
                <ul class="cards cards--winner">
                    <li class="images">
                      <img class="image--responsive" src="{{asset('dummy/dummy-winner.jpg')}}">
                      <span class="winner--label">
                        1st Winner
                      </span>
                    </li>
                    <li class="title">
                      Judul Foto
                    </li>
                    <li class="author">
                      Oleh John Smith
                    </li>

                </ul>
            </div>

            <div class="cards__wrapper">
                <ul class="cards cards--winner">
                    <li class="images">
                        <img class="image--responsive" src="{{asset('dummy/dummy-winner.jpg')}}">
                        <span class="winner--label">
                          2nd Winner
                        </span>
                    </li>

                    <li class="title">
                      Judul Foto
                    </li>
                    <li class="author">
                      Oleh John Smith
                    </li>
                </ul>
            </div>

            <div class="cards__wrapper">
                <ul class="cards cards--winner">


                    <li class="images">
                      <img class="image--responsive" src="{{asset('dummy/dummy-winner.jpg')}}">
                      <span class="winner--label">
                        3rd Winner
                      </span>
                    </li>

                    <li class="title">
                      Judul Foto
                    </li>
                    <li class="author">
                      Oleh John Smith
                    </li>

                </ul>
            </div>


        </div>

			</div>


		</div>

	</section>


	<section class="section "  id="section--hadiah-hiburan">
		<div class="section__container">
			<br>

				<h1 class="text--red text--center">Pemenang Hadiah Hiburan</h1>
				<br>
				<div class="column__span-2-desktop column__span-6-mobile text--left push--bottom">
					<figure class="wrapper--consolation-prize">
						<img class="image--responsive image--prize" src="{{asset('images/consolation-prize-01.png')}}">
					</figure>
					<br>
					<h6>2 Unit</h6>
					<h3>Samsung Galaxy J3</h3>
          <ol class="list--winner">
            <li>Winner</li>
            <li>Winner</li>
          </ol>
				</div>

				<div class="column__span-2-desktop column__span-6-mobile text--left push--bottom">
					<figure class="wrapper--consolation-prize">
						<img class="image--responsive image--prize" src="{{asset('images/consolation-prize-02.png')}}">
					</figure>
					<br>
					<h6>5 Unit</h6>
					<h3>Samsung Galaxy V</h3>
          <ol class="list--winner">
            <li>Winner</li>
            <li>Winner</li>
          </ol>

				</div>

				<div class="column__span-2-desktop column__span-6-mobile text--left push--bottom">
					<figure class=" wrapper--consolation-prize">
						<img class="image--responsive image--prize" src="{{asset('images/consolation-prize-03.png')}}">
					</figure>
					<br>
					<h6>2 Unit</h6>
					<h3>Lego Set</h3>
          <ol class="list--winner">
            <li>Winner</li>
            <li>Winner</li>
          </ol>

				</div>


		</section>


	<section class="section section--subpage">
			<div class="section__container">
				<br><br><br>


					<h1 class="text--red text--center">Pemenang Hadiah Mingguan</h1>
					<br><br>
          <!-- Periode 1 -->

          @for ($i = 1; $i <= 4; $i++)
            <hr>
            <div class="column__span-6-mobilepush--bottom">
              <div class="column__span-2-desktop text--left">
                  <h1 class="text--jet-grey">Periode {{$i}}</h1>
              </div>
              <div class="column__span-6-mobile column__span-4-desktop top-bordered">
                  <div class="column__span-3-desktop column-span-6-mobile">
                    <h3>Sodexo Voucher<br>@IDR 250,000</h3>
                  </div>
                  <div class="column__span-3-desktop column-span-6-mobile">
                    <ol class="list--winner consolation">
                      <li>Winner</li>
                      <li>Winner</li>
                    </ol>
                  </div>
                  <div class="column__span-6 hard push--top">
                      <div class="column__span-3-desktop column-span-6-mobile">
                        <h3>Voucher Pulsa<br>@IDR 100,000</h3>
                      </div>
                      <div class="column__span-3-desktop column-span-6-mobile">
                        <ol class="list--winner consolation">
                          <li>Winner</li>
                          <li>Winner</li>
                        </ol>
                      </div>
                  </div>
              </div>

  					</div>

          @endfor





			</div>
                <br><br>
		</div>
	</section>

</div><!-- end of main container -->
@endsection
