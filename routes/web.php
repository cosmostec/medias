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

Route::get('/test', function () {
    return view('layout.default');
});

Route::get('/create_village', function () {
    return view('villages.create');
});

Auth::routes();
route::get('/home','HomeController@index')->name('home');
route::resource('village','VillageController');