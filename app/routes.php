<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::group(array('prefix' => 'admin'), function(){
	Route::get('login', array('as' => 'admin.login', 'uses' => 'AdminAuthController@getLogin'));
	Route::post('login', array('as' => 'admin.login.post', 'uses' => 'AdminAuthController@postLogin'));
	Route::get('logout', array('as' => 'admin.logout', 'uses' => 'AdminAuthController@getLogout'));
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
	Route::resource('posts', 'AdminPostsController', array('except' => array('show')));
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
	Route::resource('users', 'AdminUsersController', array('except' => array('show')));
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
	Route::resource('images', 'AdminImagesController', array('except' => array('show')));
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
	Route::resource('works', 'AdminWorksController', array('except' => array('show')));
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
	Route::resource('tags', 'AdminTagsController', array('except' => array('show')));
});


Route::get('/', array('as' => 'home', 'uses' => 'PostsController@getIndex'));
Route::get('post/{slug}', array('as' => 'post', 'uses' => 'PostsController@getPost'));
Route::get('about', function(){ return View::make('about'); });
Route::get('work', array('as'=> 'work', 'uses' => 'WorksController@getIndex'));
Route::get('work/{slug}', array('as' => 'work', 'uses' => 'WorksController@getPost'));

// ===============================================
// 404 ===========================================
// ===============================================

App::missing(function($exception)
{

	// shows an error page (app/views/error.blade.php)
	// returns a page not found error
	return Response::view('error', array(), 404);
});

