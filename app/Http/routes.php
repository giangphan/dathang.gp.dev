<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/', ['as' => 'dashboard', function () {
		return view('admin.order.list');
	}]);
	Route::group(['prefix'=>'order'], function(){
		Route::get('add',['as' => 'order.add', 'uses' => 'OrderController@getAdd']);
		Route::post('add',['as' => 'order.addPost', 'uses' => 'OrderController@postAdd']);
	});

	Route::group(['prefix' => 'status'], function() {
		Route::get('/', ['as' => 'status.list', 'uses' => 'StatusController@getList']);
	});
});
