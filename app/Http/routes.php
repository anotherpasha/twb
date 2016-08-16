<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/prize', function () {
    return view('prize');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/snk', function () {
    return view('snk');
});
Route::get('/submission', function () {
    return view('submission');
});

Route::get('/success', function () {
    return view('success');
});
Route::get('/success-submission', function () {
    return view('success-submission');
});
Route::get('/submission', function () {
    return view('submission');
});
Route::get('/photo', function () {
    return view('photo');
});

Route::get('auth/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('auth/callback/{provider}', 'SocialAuthController@callback');


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/post-story', 'PostController@postStory');


// Route::get('auth/redirect/{provider}/registration', 'SocialAuthController@redirect');
