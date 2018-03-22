<?php
	Route::get("/",'VideoController@index');
	Route::get("/video/{id}",'VideoController@getbyid');


	Route::get("/login-register",function(){
		return view('login-register', ['alert' => array('show' => 'no')]);
	});
	Route::get("/new-user",'UserController@create');

	Route::get("/auth",'CacheController@create');


	Route::get('admin-login', array('uses' => 'AuthController@show'));
	Route::post('login', array('uses' => 'AuthController@login'));

?>