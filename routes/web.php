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

Route::group(['middleware'=>'pagesmiddleware'], function(){
    Route::get('/', 'PageController@getIndex');
    Route::get('/service', 'PageController@getService');
    Route::get('/service_internet', 'PageController@getServiceInternet');
    Route::get('/service_tv', 'PageController@getServiceTV');
    Route::get('/service_playbox', 'PageController@getPlayBox');
    Route::get('/support', 'PageController@getSupport');
    Route::get('/support_wifi', 'PageController@getSupportWifi');
    Route::get('/service_phone', 'PageController@getSupportPhone');
    Route::get('/contact', 'PageController@getContact');
});