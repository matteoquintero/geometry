<?php
	Route::get("/",'VideoController@showall');
	Route::get("/video/{id}",'VideoController@showbyid');

	Route::get("/login-register",function(){
		return view('login-register', ['alert' => array('show' => 'no')]);
	});
	Route::get("/new-user",'UserController@create');

	Route::post("/auth",'CacheController@create');

	Route::get('admin-login', array('uses' => 'AuthController@show'));
	Route::post('login', array('uses' => 'AuthController@login'));

	Route::get("/views/{id}",'ViewsController@showbyid');

	Auth::routes();

	Route::get('/admin-login', 'HomeController@index')->name('dashborad');

?>
