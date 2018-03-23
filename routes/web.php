<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
	Route::get("/",'VideoController@showall');
	Route::get("/video/{id}",'VideoController@showbyid');

    Route::get("/views/{id}",'ViewsController@showbyid');

    Route::post("/create-visitor",'VisitorController@create');
	Route::post("/enter-visitor",'CacheController@create');

    Auth::routes();
    Route::get('/admin', 'HomeController@index')->name('admin');

    Route::get("/excel-visitors",'ExcelController@visitors');
    Route::get("/excel-view/{id}",'ExcelController@view');
    Route::get("/excel-views",'ExcelController@views');