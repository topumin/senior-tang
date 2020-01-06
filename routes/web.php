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
    return view('auth.login');
});

Route::get('/show-detail', function () {
    return view('index');
});

Route::get('/calculate', function () {
    return view('calculate');
});

Route::get('/result', function () {
    return view('result');
});

Auth::routes();

