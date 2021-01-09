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

Route::get('/profil', 'Controller@profil')->name('profil');

Route::get('/profil/edit', 'Controller@edit')->name('edit');

Route::get('/fournisseur', 'Controller@fournisseur')->name('fournisseur');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
