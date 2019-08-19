<?php 
Route::group(['namespace' => 'olucasu\laravelToolBox\Http\Controllers', 'middleware' => ['web']] , function () {
	Route::get('laravelTool', 'BaseController@index');
});