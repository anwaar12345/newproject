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

Route::get('home','HomeController@show');

Route::get('home/{name}/{email}','AdminControl@index');

Route::get('admin/abc',function(){
return "hello";
})->name('abcroute');

Route::get('hello',function(){
	return route('abcroute');
});

Route::get('books','AdminControl@index')->name('books');

Route::post('books/create','AdminControl@store')->name('books.store');
Route::get('books/edit/{id}','AdminControl@edit')->name('books.edit');
Route::post('books/update/{id}','AdminControl@update')->name('books.update');
Route::post('books/delete/{id}','AdminControl@destroy')->name('books.delete');

