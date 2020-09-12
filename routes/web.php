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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/empresa', 'EmpresaController@index')->name('empresa');
Route::get('/empresaEdit/{id}', 'EmpresaController@edit')->name('empresaEdit');
Route::post('/arrivedAPI/{id}', 'EmpresaController@arrivedAPI')->name('arrivedAPI');
Route::get('/empresaShow/{id}', 'EmpresaController@showAPI')->name('empresaShow');
