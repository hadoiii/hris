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

Route::get('/karyawan', 'KaryawanController@index');
Route::post('/karyawan/create', 'KaryawanController@create');
Route::get('/karyawan/{id}/edit', 'KaryawanController@edit');
Route::post('/karyawan/{id}/update', 'KaryawanController@update');
