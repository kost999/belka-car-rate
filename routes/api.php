<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->prefix('1.0.0')->group(function () {
	Route::prefix('rates')->group(function (){
		Route::get('/')->name('rates')->uses('RatesController@list');
		Route::get('/{rate}')->name('rate')->uses('RatesController@item');
	});
});
