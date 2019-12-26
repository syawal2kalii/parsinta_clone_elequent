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

Route::get('/home','HomeController@index')->name('home');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contack');
});

Route::get('/user', 'UserController@index')->name('users');
Route::get('/elequentcreate','Belequent@create')->name('elequent.create');
Route::get('/elequentall','Belequent@all')->name('elequent.all');
Route::get('/elequentfind','Belequent@find')->name('elequent.find'); //route wildcard

//baru lagi
