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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
	return '<h1>halo</h1>'
	        .'Selamat datang di webapp saya<br>'
	        .'laravel,emang keren' ;

	    });

//route parameter
  Route::get('/kantin/{m}/{mi}/{ce}', function($a,$b,$c){
  	return 'Makan' .$a. '<br>'.
  			'Minum' .$b. '<br>'.
  			'Cemilan' .$c. '<br>'
; });
