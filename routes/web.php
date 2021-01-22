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

Route::get('/','BookController@index')->name('welcome') ;
Route::get('/addbook', 'BookController@create')->name('create');
Route::get('/editbook', 'BookController@edit')->name('edit');
Route::get('/updatebook/{id}','BookController@update')->name('update');
Route::get('/showbook/{id}', 'BookController@show')->name('show');
Route::post('/storebook','BookController@store')->name('store');
Route::delete('/deletebook/{id}','BookController@destroy')->name('delete');
Route::patch('/update/book/{id}','BookController@storeupdate')->name('storeupdate');
