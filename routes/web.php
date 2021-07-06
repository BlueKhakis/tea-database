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
    return view('home');
});

//Route::('/register', 'RegisterController@');

//Route::get('/', 'HomeController@index');

Route::middleware(['verified'])->group(function () {

    // Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

    Route::get('/create', 'TeaController@create');

    Route::post('/create', 'TeaController@store');

    Route::post('/create/review/{tea}', 'ReviewController@create');

    Route::get('/userpage', 'UserController@index');

    Route::put('/userpage/user', 'UserController@edit');

    Route::get('/userpage/username', 'UserController@userNameUpdate');

    Route::put('/userpage/username2', 'UserController@userNameUpdate2');

    Route::get('/userpage/useremails','UserController@userEmailUpdate2');

    Route::put('/userpage/useremail', 'UserController@userEmailUpdate');

    // Route::get('/userpage/userpassword', 'UserController@editUserPassword');
    Route::get('/react', 'ReviewController@index');

    // Showing and editing an existing review
    Route::get('/review/{id}/edit', 'ReviewController@edit');
    Route::put('/review/{id}/edit', 'ReviewController@update');

});

Route::get('/home', 'HomeController@index');

Route::get('/show/{id}', 'TeaController@show');

Route::get('/teas', 'TeaController@index');