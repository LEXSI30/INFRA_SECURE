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
Route::get('/download', function (){
  return view('download');
});
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/presentation', 'Presentationcontroller@presentation')->name('presentation');
Route::get('/about', 'AboutController@about')->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
