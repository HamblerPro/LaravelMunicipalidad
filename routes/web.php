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
    return view('frontend.municipalidad.index');
});

Route::get('/panel', function () {
    return view('admin.municipalidad.index');
});

Route::resource('panel/municipalidad','Admin\MenuController');
