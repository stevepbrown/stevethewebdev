<?php

use App\Http\Controllers\AjaxController;

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
Route::get('/', 'IndexController@index');


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


// AJAX - Cookie consent
Route::post('/ajax/consent_cookies', 'AjaxController@cookieConsent');

// AJAX - Map loader
Route::get('/ajax/map_loader', 'AjaxController@mapLoader');


// DEBUG ONLY!
if((env('APP_DEBUG')==true)) {

// Font-test
 
Route::get('/font-test', 'GenericController@show');


}



