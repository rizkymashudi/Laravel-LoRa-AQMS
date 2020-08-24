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

Route::get('/', 'componentController@index')->name('dashboard');
Route::get('/About', 'aboutController@index')->name('About');
Route::get('/Misc', 'miscellaneousController@index')->name('Misc');
Route::get('/Hist', 'historyController@index')->name('History');