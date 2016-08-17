@extends('layouts.app')

@section('content')



<div class="container__main "><!-- start main container -->

    @include('partials.navbar')

    <!-- start submission setion -->
    <section  class="  section  section--subpage text--center">
        
        <div class="container">
            <div class="column__span-6 text--left column__span-6-mobile">
                <a href="{!! url('/') !!}" class="button__back">< Kembali ke beranda</a>
                <h1 class="text--center-mobile">Submission Form</h1>
                <br><br>
                <form class="form__validation " method="post" action="">
                    {{ csrf_field() }}
                    <div class="column__span-3-desktop column__span-6-mobile text--center bordered--left">
                        <div class="uploader__wrapper">             
                            <div id="uploader"></div>
                            <div class="uploader--label">
                                <div class="content--vertical-middle">
                                    <span class="upload--label">Lampirkan foto</span> <br>
                                    <small>Max 2MB</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column__span-3-desktop column__span-6-mobile bordered--left">   
                        <p>Ceritakan fotomu!</p>            
                        <div class="form__control ">
                            <input type="text" name="title" placeholder="Judul Cerita Seru Moms dan si kecil"/>
                        </div>
                        <div class="form__control ">
                            <textarea name="story" placeholder="Sertakan serita seru Moms dan si kecil bersama karakter Tini Wini Biti" ></textarea>
                        </div>
                        <div class="form__control">
                            <button type="submit" class="button button__secondary button--small disabled">Daftar</button>
                            <!-- a href="success-submission.html" class="button button__secondary button--small disabled">Daftar</a -->

                        </div>
                    </div>

                    <div class="column__span-3-desktop">
                        
                    </div>
                </form>
            </div>
        </div>

    </section>
    <!-- end of submission section -->


</div><!-- end of main container -->

<!-- uploader preview template -->
<div id="preview-template" style="display: none;">
    <div class="dz-preview dz-file-preview">

      <figure class="wrapper--img-preview">
        <img data-dz-thumbnail />
            <div class="dz-details">
                <span data-dz-name class="text--grey-darker"></span>
                <a href="javascript:;"  class="remove text--grey-darker" data-dz-remove>x</a>                               
            </div>
      </figure>

      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
      <div class="dz-error-message"><span data-dz-errormessage></span></div>
    </div>
</div>





@endsection
