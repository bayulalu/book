<?php


Route::group(['middleware' => 'guest'], function(){
	Route::get('/register', 'AuthController@register');
	Route::post('/register', 'AuthController@simpanRegister');
	Route::post('/login', 'AuthController@postLogin');
	Route::get('/login', 'AuthController@login')->name('login');
}) ;

Route::group(['middleware' => 'auth'], function(){
	Route::get('/profile', 'AuthController@profile');
	Route::get('/logout', 'AuthController@logout');
});

// Route::get('/create', 'BookController@create');
	// Route::get('/')


Route::get('/', function () {
    return view('konten/create');
});
