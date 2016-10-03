@extends('layouts.app')

@section('content')
<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

	{{--<section id="section--prize" class="  section ">--}}
		{{--<div class="content--vertical-middle">--}}

			{{--<div class="section__container">--}}
				{{--<a href="{!! url('/') !!}" class="text--primary">< Kembali ke beranda</a>--}}
                {{--<h1 class="text--center-mobile">Pemenang</h1>--}}
				{{--<br>--}}
                {{--<div class="column__span-3 column__span-6-mobile">--}}
                    {{--<br><br><br>--}}
                    {{--<h1 class="text--center-mobile">Pemenang</h1>--}}
                    {{--<h1 class="text--center-mobile">Grand Prize</h1>--}}
				{{--</div>--}}
				{{--<div class="column__span-3 column__span-6-mobile">--}}
					{{--<figure>--}}
						{{--<img class="image--responsive" src="{{asset('images/prizes.png')}}">--}}
					{{--</figure>--}}
				{{--</div>--}}

                {{--<div class="column__span-6 hard winner--container">--}}

                    {{--<div class="cards__wrapper">--}}
                        {{--<ul class="cards cards--winner">--}}
                            {{--<li class="images">--}}
                                {{--<img class="image--responsive" src="{{asset('dummy/dummy-winner.jpg')}}">--}}
                                {{--<span class="winner--label">1st Winner</span>--}}
                            {{--</li>--}}
                            {{--<li class="title">Judul Foto</li>--}}
                            {{--<li class="author">Oleh John Smith</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                    {{--<div class="cards__wrapper">--}}
                        {{--<ul class="cards cards--winner">--}}
                            {{--<li class="images">--}}
                                {{--<img class="image--responsive" src="{{asset('dummy/dummy-winner.jpg')}}">--}}
                                {{--<span class="winner--label">1st Winner</span>--}}
                            {{--</li>--}}
                            {{--<li class="title">Judul Foto</li>--}}
                            {{--<li class="author">Oleh John Smith</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                    {{--<div class="cards__wrapper">--}}
                        {{--<ul class="cards cards--winner">--}}
                            {{--<li class="images">--}}
                                {{--<img class="image--responsive" src="{{asset('dummy/dummy-winner.jpg')}}">--}}
                                {{--<span class="winner--label">1st Winner</span>--}}
                            {{--</li>--}}
                            {{--<li class="title">Judul Foto</li>--}}
                            {{--<li class="author">Oleh John Smith</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                {{--</div>--}}

			{{--</div>--}}
            {{--<!-- section container -->--}}

		{{--</div>--}}
        {{--<!-- vertical middle -->--}}
	{{--</section>--}}



    @include('partials.weekly-prize')

</div><!-- end of main container -->
@endsection
