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
*/;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::view('/daftar-admin', 'admin.admin');
Route::view('/daftar-mitra', 'mitra.mitra');
Route::view('/daftar-artikel', 'artikel.artikel');