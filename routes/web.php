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
Route::get('/home', 'HomeController@index')->name('home');
//后台
Route::prefix(config('app.admin'))->middleware(['checkAdmin','decrypt'])->namespace('Admin')
    ->group(function () {
    Route::get('/','IndexController@index');
    Route::get('/login','LoginController@index');
    Route::post('/check','LoginController@checkAdmin');
});

