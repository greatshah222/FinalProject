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





Route::get('/','FrontController@index')->name('home');
Route::get('/books','FrontController@books')->name('books');
Route::get('/book','FrontController@book')->name('book');
Route::get('/aboutus','FrontController@aboutus')->name('aboutus');
Route::get('/trending','FrontController@trending')->name('trending');
Route::get('/logout', 'Auth\LoginController@logout')->name('home');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/cart', 'CartController');


Route::group(['prefix' => 'admin','middleware'=>'auth'],function ()
{
    Route::get('/', function ()
    {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product','ProductsController');
    Route::resource('category','CategoriesController');

});








