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

Route::get('/youtubeur', 'YoutubeurController@getYoutubeurs')->name('youtubeurs');
Route::get('/youtubeur/{name}', 'SetupController@getSetup')->name('setup');
Route::get('/equipment/{id}', 'EquipmentController@getEquipment')->name('equipment');


