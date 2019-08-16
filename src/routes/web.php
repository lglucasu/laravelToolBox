<?php 
Route::group(['namespace' => 'lglucasu\laravelToolBox\Http\Controllers', 'middleware' => ['web']] , function () {
	Route::get('laravelTool', 'BaseController@index');
});