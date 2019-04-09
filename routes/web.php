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

Route::get('/','monitoringController@index');
Route::get('/store/{sensor1}/{sensor2}/{sensor3}/{sensor4}','monitoringController@store');
Route::get('/ambildata','monitoringController@ambil');
Route::get('/test','monitoringController@test');
Route::get('/home','monitoringController@home');


