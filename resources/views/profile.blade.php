@extends('layouts.app')

@section('content')



<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

    <!-- start profile setion -->
    <section  class="  section  section--subpage">
        
        <div class="container">
            <div class="column__span-3-desktop text--left column__span-6-mobile text--center-mobile">
                <a href="{!! url('/') !!}" class="button__back button--expand text--left">< Kembali ke beranda</a>
                <h1>Profilku</h1>
                <br>
                <div class="username rounded">
                    Hello, {!! $user->name !!}
                </div>
            </div>
            <div class="column__span-6">
                <br>
                <h1 class="text--center-mobile">Entriku</h1>
                @if($user->stories()->count() > 0)
                <br><br>
                <div class="row ">
                    @foreach($user->stories()
                        ->where('approval_status', 1)
                        ->orderBy('id', 'desc')
                        ->get() as $story)
                        <div class="wrapper__thumb">
                            <a href="{!! url('story/' . $story->id) !!}" class="thumb--gallery">
                                <ul class="cards cards--gallery">
                                    <li class="images"><figure><img src="{!! asset('uploads/' . $story->image_path) !!}" width="250"></figure></li>
                                    <li class=" title">{!!  str_limit($story->title, 23) !!}</li>
                                    <li class="author">Oleh {!! $story->user->name !!}</li>
                                    <li class="likes"><i class="icon icon--likes"></i> {!! $story->likes->count() !!} Likes</li>
                                </ul>
                            </a>
                        </div>
                    @endforeach
                </div>
                @else
                    <br>
                    <div class="">
                        <span class="username rounded">Belum ada entri</span>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- end of profile section -->
    <br><br><br><br><br><br>

</div><!-- end of main container -->



@endsection
