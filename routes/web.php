<?php

Route::group(['middleware' => 'auth'], function(){
	Route::post('/buku-comment/{id}', 'CommentController@store');

	Route::get('/buku-comment/{id}/edit', 'CommentController@edit' );

	Route::put('buku-comment/{id}', 'CommentController@update');

	Route::delete('buku-comment/{id}', 'CommentController@destroy');

	Route::get('/notifications', 'NotificationController@notif');

	Route::get('/profile/{id?}', 'AuthController@profile');
	Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware' => 'guest'], function(){
	Route::get('/register', 'AuthController@register');
	Route::post('/register', 'AuthController@simpanRegister');
	Route::post('/login', 'AuthController@postLogin');
	Route::get('/login', 'AuthController@login')->name('login');
}) ;



Route::group(['middleware' => 'admin'], function(){
	Route::resource('/buku', 'BookController', ['except' => ['index','show']]);
});

Route::resource('/buku', 'BookController', ['only' => ['index', 'show']]);

Route::get('/home', function(){
	return view('konten/home');
});
Route::get('/', function () {
    return view('konten/home');
});
