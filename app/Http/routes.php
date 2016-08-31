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

Route::get('/', 'HomeController@index');

Route::get('/prize', function () {
    return view('prize');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/syarat-ketentuan', function () {
    return view('snk');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/story/{id}', 'StoryController@showStory');

Route::get('/gallery', 'StoryController@gallery');
Route::post('/gallery', 'StoryController@gallery');

Route::post( '/ajax/login', 'AjaxController@login');

Route::group(['middleware' => 'auth'], function () {
    Route::post('file/post', 'AjaxController@postImage');

    Route::get('/submission', 'StoryController@getPostStoryView' );
    Route::post('/submission', 'StoryController@postStory');

    Route::get('/profile', 'UserController@profile');

    Route::get('/like/{id}', 'StoryController@likeStory');

    Route::get('/success', function () {
        return view('success');
    });

    Route::get('/success-submission', function () {
        return view('success-submission');
    });

});

Route::group(['middleware' => 'restricted'], function () {
    Route::group(['prefix' => 'adm'], function () {
        Route::get( '/', 'AdminController@dashboard' );
        Route::get( '/stories', 'AdminController@stories' );
        Route::post( '/stories', 'AdminController@stories' );
        Route::get( '/archived-stories', 'AdminController@archivedStories' );
        Route::get( '/story/{from}/{id}', 'AdminController@storyDetail' );
        Route::get( '/approve/{id}', 'AdminController@approveStory' );
        Route::get( '/reject/{id}', 'AdminController@rejectStory' );
        Route::get( '/delete/{id}', 'AdminController@deleteStory' );
        Route::get( '/participants', 'AdminController@participants' );
        Route::get( '/most-liked', 'AdminController@mostLiked' );
        Route::get( '/most-viewed', 'AdminController@mostViewed' );
    });
});


Route::get('auth/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('auth/callback/{provider}', 'SocialAuthController@callback');

Route::auth();

Route::get('/home', 'HomeController@index');

// Route::get('/post-story', 'PostController@postStory');
// Route::get('auth/redirect/{provider}/registration', 'SocialAuthController@redirect');
