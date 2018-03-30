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





Route::get('/','HomeController@index')->name('home');
Route::get('/books','HomeController@books')->name('books');
Route::get('/book','HomeController@book')->name('book');
Route::get('/aboutus','HomeController@aboutus')->name('aboutus');
Route::get('/trending','HomeController@trending')->name('trending');