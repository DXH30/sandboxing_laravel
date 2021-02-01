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

Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('/', 'MenuController');
    Route::prefix('bst')->group(function() {
        Route::get('/', 'BstController@page');
        Route::post('/', 'BstController@input');
    });
    Route::prefix('fk')->group(function() {
        Route::get('/', 'ForwardkeyController@page');
        Route::post('/', 'ForwardkeyController@input');
        Route::get('/diagram', 'ForwardkeyController@diagram');
    });
    Route::prefix('s3')->group(function() {
        Route::post('/', 'S3Controller@uploadFile')->name('upload');
        Route::get('/', 'S3Controller@uploadView')->name('page_upload');
        Route::get('hapus', 'App\Http\Controllers\PercobaanController@deleteFile')->name('s3-hapus');
    });
});
