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
Route::get('aplikimi', 'CallsController@aplikimi')->name('calls.aplikimi');

Route::get('organisations', 'OrganisationsController@index')->name('organisations.index');
Route::get('organisations/create', 'OrganisationsController@create')->name('organisations.create');
Route::post('organisations', 'OrganisationsController@store')->name('organisations.store');
//Route::get('organisations/{organisation}', 'OrganisationsController@show')->name('organisations.show')->middleware('can:view,call');
Route::get('organisations/{organisation}/edit', 'OrganisationsController@edit')->name('organisations.edit');
Route::patch('organisations/{organisation}', 'OrganisationsController@update')->name('organisations.update');


Route::get('callapplications/{call}/create', 'CallapplicationsController@create')->name('callapplications.create');
Route::post('callapplications', 'CallapplicationsController@store')->name('callapplications.store');
Route::get('callapplications/{call}/aplikimet', 'CallapplicationsController@aplikimet')->name('callapplications.aplikimet');
