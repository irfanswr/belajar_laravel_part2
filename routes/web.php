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

Auth::routes();

//verifikasi email user
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//encrypt dan decrypt
Route::get('/enkripsi', 'MyController@enkripsi');
Route::get('/data', 'MyController@data');
Route::get('/data/{data_rahasia}', 'MyController@data_proses');

//hashing
Route::get('/hash', 'MyController@hash');

//upload File
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
//hapus File
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

//kirim email
Route::get('/kirimemail','MailController@index');

//Error Handling
Route::get('/error','ErrorController@index');
Route::get('/error/{nama}','ErrorController@pilih');


// React Front end
Route::view('/react', 'reactApp');
Route::view('/react/{path}', 'reactApp'); 