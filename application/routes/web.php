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

  //return view('welcome');

  return view('pages.home')->with('title', 'Welcome');

});

Route::get('/analytics', function () {

  //return view('pages.welcome');

  return view('pages.analytics')->with('title', 'Analytics');

});

Route::get('/amp', function () {

  //return view('pages.welcome');

  return view('pages.amp')->with('title', 'AMP');

});

// Contact form GET

Route::get('/contact' ,'ContactController@index');

// Contact form POST
Route::post('/contact' ,'ContactController@sendMail');


Route::get('/font-test', function () {


  return view('pages.font-test')->with('title', 'font-test');

});

Route::get('/cookies','CookieController@index');

Route::post('/cookies','CookieController@store');
