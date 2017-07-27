<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

$admin_url = Config::get('setting_admin.admin_url');


Auth::routes();

Route::get('/', [
	'as' => 'ui.home',
	'uses' => 'MainController@home'
	]);

Route::group(['prefix' => $admin_url, 'middleware' => 'auth'], function(){
	Route::get('/',  [
		'as' => 'ad.home',
		'uses' => 'AdminController@home'
		]);

	Route::get('/article',  [
		'as' => 'ad.a.index',
		'uses' => 'ArticleController@index'
		]);

	Route::get('/article/locked',  [
		'as' => 'ad.a.locked',
		'uses' => 'ArticleController@locked'
		]);

	Route::get('/article/create',  [
		'as' => 'ad.a.create',
		'uses' => 'ArticleController@create'
		]);

	Route::post('/article/create',  [
		'as' => 'ad.a.store',
		'uses' => 'ArticleController@store'
		]);

	Route::get('/article/{id}/edit', [
		'as' => 'ad.a.edit',
		'uses' => 'ArticleController@edit'
		]);

	Route::post('/article/{id}/edit', [
		'as' => 'ad.a.update',
		'uses' => 'ArticleController@update'
		]);


	
});

// Language
Route::get('/set-language', [
	'as' => 'ad.lang.set',
	'uses' => 'MainController@language_set'
	]);

Route::get('/blog', [
	'as' => 'ui.blog',
	'uses' => 'MainController@article_index'
	]);
