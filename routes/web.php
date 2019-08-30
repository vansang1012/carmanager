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

use App\Http\Controllers\CarController;
use App\Http\Controllers\MotobikeController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('car')->group(function () {
    Route::get('/', 'CarController@index')->name('car.index');
    Route::get('create', 'CarController@create')->name('car.create');
    Route::post('store', 'CarController@store')->name('car.store');
    Route::get('update/{id}', 'CarController@update')->name('car.update');
    Route::post('edit', 'CarController@update')->name('car.edit');
    Route::get('delete/{id}', 'CarController@delete')->name('car.delete');

});

Route::prefix('motobike')->group(function () {
    Route::get('/', 'MotobikeController@index')->name('motobike.index');
    Route::get('create', 'MotobikeController@create')->name('motobike.create');
    Route::post('store', 'MotobikeController@store')->name('motobike.store');
    Route::get('edit/{id}', 'MotobikeController@edit')->name('motobike.edit');
    Route::post('update', 'MotobikeController@update')->name('motobike.update');
    Route::get('delete/{id}','MotobikeController@destroy')->name('motobike.delete');

});
