@extends('layouts.app')

@section('content')

<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

    <!-- start snk setion -->
    <section  class="  section  section--subpage">
        
        <div class="container">
            <div class="column__span-5 text--left column__span-6-mobile">
                <a href="{!! url('/') !!}" class="button__back">< Kembali ke beranda</a>
                 <h1>Syarat &amp; Ketentuan</h1>
                 <br><br>
                 <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                 <br><br>
                    Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                
                 <br><br><br>
                 <strong>1. Lorem Ipsum</strong><br>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                <br><br>
                Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                
                 <br><br><br>
                 <strong>2. Lorem Ipsum</strong><br>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                <br><br>
                Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
                </p>

            </div>

        </div>

    </section>
    <!-- end of snk section -->


</div><!-- end of main container -->
@endsection
