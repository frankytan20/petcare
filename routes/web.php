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

Route::get('/login', 'AuthController@getLogin')->name('login');
Route::post('/login', 'AuthController@postLogin');
Route::get('/register', 'AuthController@getRegister')->name('register');
Route::post('/register', 'AuthController@postRegister');
Route::get('/home', function(){
	return view('pages.home');
})->name('home');
Route::get('/logout','AuthController@logout')->name('logout');
Route::get('/service','ServiceController@getService')->name('service');
Route::get('/service/health','ServiceController@getHealths')->name('healths');
Route::get('/service/salon','ServiceController@getSalon')->name('salon');
Route::get('/service/hotel','ServiceController@getHotel')->name('hotel');

Route::get('/service-post/create', 'PostController@create')-> name('post.healths');
Route::post('/service-post/create', 'PostController@store')-> name('post.healths');