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
				@if(count($errors) > 0)
					@foreach ($errors->all('<strong>:message</strong>') as $error)
                        <div class="panel--error">
                            {!!  $error !!}
                        </div>
					@endforeach
				@endif
				<form class="form__validation " method="post" action="" enctype="multipart/form-data">
					{{ csrf_field() }}
					<input type="hidden" name="image_path" id="image_path">
					<div class="column__span-3-desktop column__span-6-mobile text--center bordered--left">
						<div class="uploader__wrapper">             
							<label class="uploader--label">
								<input type="file" name="file" id="uploader"/>
								<div class="content--vertical-middle ">
									<span class="upload--label">Lampirkan Foto</span>									
								</div>
							</label>
							<!-- uploader preview template -->
							<div id="preview-template" style="display: none;">

								  <figure class="wrapper--img-preview">
									<img id="image--preview" class='image--responsive' />
									<figcaption id="image--name"> </figcaption>
								  </figure>
															
							</div>
						</div>
					</div>

					<div class="column__span-3-desktop column__span-6-mobile bordered--left">   
						<p>Ceritakan fotomu!</p>            
						<div class="form__control ">
							<input type="text" name="title" placeholder="Judul Cerita Seru Moms dan si kecil" value="{!! old('title') !!}"/>
						</div>
						<div class="form__control ">
							<textarea id="editor--story" name="story" placeholder="Sertakan serita seru Moms dan si kecil bersama karakter Tini Wini Biti" >{!! old('story') !!}</textarea>
						</div>
						<div class="form__control">
							<button type="submit" class="button button__secondary button--small disabled">Kirim</button>
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







@endsection
