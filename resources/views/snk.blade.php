@extends('layouts.app')

@section('content')

<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

    <!-- start snk setion -->
    <section  class="  section  section--subpage">

        <div class="container">
            <div class="column__span-5 text--left column__span-6-mobile">
                <a href="{!! url('/') !!}" class="button__back">< Kembali ke beranda</a>
                 <h1>{!! $page->title !!}</h1>
                <br>

                {!! $page->content !!}

            </div>

        </div>

    </section>
    <!-- end of snk section -->


</div><!-- end of main container -->
@endsection
