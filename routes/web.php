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
Route::get('/konten-homepage', function () { return view('homepage.index'); });
Route::get('/konten-tentang', function () { return view('tentang.index'); });
Route::get('/konten-homepage/header', 'HomepageController@edit_header');
Route::patch('/update_header', 'HomepageController@update_header');
Route::get('/konten-homepage/deskripsi', 'HomepageController@edit_deskripsi');
Route::patch('/update_deskripsi', 'HomepageController@update_deskripsi');
Route::get('/konten-homepage/instagram', 'HomepageController@edit_ig');
Route::patch('/update_ig', 'HomepageController@update_ig');
Route::get('/konten-homepage/youtube', 'HomepageController@edit_yt');
Route::patch('/update_yt', 'HomepageController@update_yt');
