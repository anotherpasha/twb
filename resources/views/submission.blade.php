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

    <!-- start submission setion -->
    <section  class="  section  section--subpage text--center">
        
        <div class="container">
            <div class="column__span-6 text--left column__span-6-mobile">
                <a href="index.html" class="button__back">< Kembali ke beranda</a>
                 <h1 class="text--center-mobile">Submission Form</h1>
                 <br><br>
                 <form class="form__validation ">
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
                            <input type="text" placeholder="Judul Cerita Seru Moms dan si kecil"/>
                        </div>
                        <div class="form__control ">
                            <textarea placeholder="Sertakan serita seru Moms dan si kecil bersama karakter Tini Wini Biti" ></textarea>
                        </div>
                        <div class="form__control">
                            <!--button type="submit" class="button button__secondary button--small disabled">Daftar</button-->
                            <a href="success-submission.html" class="button button__secondary button--small disabled">Daftar</a>

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
