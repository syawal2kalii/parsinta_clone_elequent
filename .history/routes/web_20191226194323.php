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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contack');
});

Route::get('/user', function () {
   

   // $data['nama'] = request ('nama');  // array assoc
   // $data = ['syawal','fian','ulhaq']; //array
   $data;
   $da = array(array("nama" => "Syawal","kelas" => "A3","Alamat"=>"Sidrap"))
   array_push($data, array("nama" => "Fian"));

    dd($data);
    // return view('users',compact('data')); 
});