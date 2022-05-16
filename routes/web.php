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

// Route::get('/', function () {
//     return view('welcome');
// });

 Route::get('/', 'VideoController@index');
 Route::get('/uploader', 'VideoController@uploader')->name('uploader');
 Route::post('/upload', 'VideoController@store')->name('upload');

Route::get('file-upload', 'FileUploadController@fileUpload')->name('file.upload');
Route::post('file-upload', 'FileUploadController@fileUploadPost')->name('file.upload.post');


// upload file
Route::resource('books', 'BookController');
Route::get('books/{uuid}/download', 'BookController@download')->name('books.download');
// Route::get('books/{uuid}/download', 'BookController@download')->name('books.download');
