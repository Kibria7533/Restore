<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','crudc@index');

Route::get('create','crudc@create')->name('create');
Route::post('store','crudc@store')->name('store');
Route::get('show','crudc@show')->name('show');







