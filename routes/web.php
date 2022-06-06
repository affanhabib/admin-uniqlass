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
Route::resource('/daftar-admin', 'UsersController')->middleware('checkRole:superadmin,owner');
Route::resource('/daftar-mitra', 'MitraController');
Route::resource('/daftar-event', 'EventController');
Route::resource('/daftar-artikel', 'ArticleController');
Route::resource('/galeri', 'GaleriController');
Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
