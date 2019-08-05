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

Route::view('/', 'home')->name('index');

Route::get('calls', 'CallsController@index')->name('calls.index');
Route::get('calls/create', 'CallsController@create')->name('calls.create');
Route::post('calls', 'CallsController@store')->name('calls.store');
Route::get('calls/{call}', 'CallsController@show')->name('calls.show')->middleware('can:view,call');
Route::get('calls/{call}/edit', 'CallsController@edit')->name('calls.edit');
Route::patch('calls/{call}', 'CallsController@update')->name('calls.update');
