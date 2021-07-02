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

//Route::('/register', 'RegisterController@');

//Route::get('/', 'HomeController@index');

//Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

Route::get('/tea', 'TeaController@index');

<<<<<<< HEAD
Route::post('/add-tea', 'TeaController@store');
=======
Route::get('/form', 'TeaController@index');
>>>>>>> b26c52b6129df0c6e330f6201fd73c3674876add
