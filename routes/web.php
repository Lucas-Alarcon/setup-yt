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

Route::get('add/youtubeur', function() { return view('addYoutubeur'); })->name('addYoutubeur');
Route::post('add/youtubeur', 'YoutubeurController@insertYoutubeur')->name('insertYoutubeur');

Route::get('add/equipment', 'EquipmentController@addEquipment')->name('addEquipment');
Route::post('add/equipment', 'EquipmentController@insertEquipment')->name('insertEquipment');

Route::get('add/setup', function() { return view('addSetup'); })->name('addSetup');
Route::post('add/setup', 'SetupController@insertSetup')->name('insertSetup');


