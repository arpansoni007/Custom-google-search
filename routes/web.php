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

Route::middleware('auth')->group(function(){

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/google-search', 'SearchController@googleSearch')->name('google-search');
    Route::get('/custom-search', 'SearchController@customSearch')->name('custom-search');
    Route::post('custom-search-request', 'SearchController@customSearchRequest')->name('custom-search-request');

    /* ----------------------- Save Search Result as PDF----------------------- */
    // Tried with DOM pdf for result print , but as data coming dynamic the render method is not rendering blade  file , so worked with window.print
    
    //Route::get('/print-result/{view}','PrintController@printPDF')->name('print-result');
});