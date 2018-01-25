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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@index');

Route::group(['prefix' => 'tasks'], function() {
    Route::get('{task}/edit', 'DashboardController@edit')->name('task.edit');
    Route::put('{task}/update', 'DashboardController@update')->name('task.update');
    Route::delete('task/{id}', 'DashboardController@delete');
});