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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/informatika', function(){
	return view("Informatika");
});

Route::get('/elektro', function(){
	return "saya mahasiswa elektro";
});

Route::get('/sipil', function(){
	return "saya mahasiswa sipil";
});

Route::get('/agro', function(){
	return "saya mahasiswa agro";
});

Route::get('/LoginForm', function(){
	return "LoginForm";
});

Route::get('/LoginForm', function(){
	return "informatika";
});