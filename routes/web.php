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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Auth::routes();

Route::get('/', 'MainController@index')->name('main');
Route::get('/programm', 'MainController@programm')->name('programm');
Route::get('/photos', 'MainController@photos')->name('photos');
Route::get('/result', 'MainController@result')->name('result');

Route::post('/contact', 'MainController@contact');
Route::post('/main_form', 'MainController@main_form');
Route::post('/update_main_form', 'MainController@update_main_form');

Route::get('/excel_export', 'MainController@excel_export');
Route::get('/news{id}', 'MainController@news');