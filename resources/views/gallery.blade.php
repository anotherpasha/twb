@extends('layouts.app')

@section('content')

<div class="container__main "><!-- start main container -->

@include('partials.navbar')
<!-- start gallery setion -->
<section  class="  section  section--subpage">

    <div class="container">

        <div class="column__span-3-desktop text--left column__span-6-mobile ">
            <a href="{!! url('/') !!}" class="button__back">< Kembali ke beranda</a>
            <br>
            <h1 class="text--center-mobile">Gallery</h1>
            <br><br>
        </div>

        <div class="column__span-6">
            <form class="form--search" action="" method="get">
                    <div class="form__control">
                    <input type="text" name="s" placeholder="search"/>
                    <button type="submit" class="button button__primary button--submit">Cari</button>
                </div>
            </form>
        </div>

        <div class="column__span-6">
            <div class="row">
                @foreach($stories as $story)
                <div class="wrapper__thumb">
                    <a href="{!! url('story/' . $story->id) !!}" class="thumb--gallery">
                        <ul class="cards cards--gallery">
                            <li class="images"><figure><img width="250" src="{!! asset('uploads/' . $story->image_path) !!}"></figure></li>
                            <li class=" title">{!!  str_limit($story->title, 20) !!}</li>
                            <li class=" author">oleh {!! $story->user->name !!}</li>
                            <li class="likes"><i class="icon icon--likes"></i> {!! $story->likes->count() !!} Likes</li>
                        </ul>
                    </a>
                </div>
                @endforeach
            </div> <!-- end of row -->
        </div>

        <div class="column__span-6 text--center">
            <!-- ul class="pagination list__inline">
                <li><a href=""><</a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href="">5</a></li>
                <li><a href="">></a></li>
            </ul -->
            {!! (new App\TWBPaginationPresenter($stories))->render()  !!}
        </div>

    </div> <!-- end of container -->
    <br><br><br>
</section>
<!-- end of gallery section -->

</div>
@endsection