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

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/snk', function () {
    return view('snk');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/photo', function () {
    return view('photo');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::post( '/ajax/login', 'AjaxController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::post('file/post', 'AjaxController@postImage');

    Route::get('/submission', 'PostController@getPostStoryView' );
    Route::post('/submission', 'PostController@postStory');

    Route::get('/profile', function () {
        return view('profile');
    });

    Route::get('/success-submission', function () {
        return view('success-submission');
    });
});



Route::get('auth/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('auth/callback/{provider}', 'SocialAuthController@callback');


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/post-story', 'PostController@postStory');


// Route::get('auth/redirect/{provider}/registration', 'SocialAuthController@redirect');
