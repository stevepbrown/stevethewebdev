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


// Home GET
Route::view('/', 'pages.home',['title'=>'Welcome']); 

// Services GET
Route::get('/services', 'ServiceController@index');

// Templates GET
Route::get('/templates', 'TemplateController@index');


// Trades GET
Route::view('/trades', 'pages.templates.index');

// Contact form GET

Route::get('/contact' ,'ContactController@index');

// Contact form POST
Route::post('/contact' ,'ContactController@sendMail');


Route::get('/font-test', function () {


  return view('pages.font-test')->with('title', 'font-test');

});
// Cookie routes

Route::get('/cookies','CookieController@index');

Route::post('/cookies','CookieController@store');
