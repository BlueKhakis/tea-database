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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index');

//Route::('/register', 'RegisterController@');

//Route::get('/', 'HomeController@index');

Route::middleware(['verified'])->group(function () {

    // Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

    Route::get('/create', 'TeaController@create');

    Route::post('/create', 'TeaController@store');

    Route::post('/create/review/{tea}', 'ReviewController@create');

    Route::get('/userpage', 'UserController@index');

    Route::post('/userpage', 'UserController@store');

    Route::put('/userpage/user', 'UserController@edit');

    Route::get('/userpage/username', 'UserController@userNameUpdate');

    Route::put('/userpage/username2', 'UserController@userNameUpdate2');

    Route::get('/userpage/useremails','UserController@userEmailUpdate2');

    Route::put('/userpage/useremail', 'UserController@userEmailUpdate');

    //Route::post('/upload', 'UserController@store');

    //Route::get('/account', 'UserController@store');
    
    // Route::get('/userpage/userpassword', 'UserController@editUserPassword');
    Route::get('/react', 'ReviewController@index');

    // Showing and editing an existing review
    Route::get('/review/{id}/edit', 'ReviewController@edit');
    Route::put('/review/{id}/edit', 'ReviewController@update');
    Route::post('/show/{id}', 'ReviewController@update');
    Route::post('/review/{id}/update', 'ReviewController@update');
    Route::post('/review/{id}/delete', 'ReviewController@destroy');


});

Route::get('/home', 'HomeController@index');
Route::get('/browse', 'HomeController@browse');

Route::get('/show/{id}', 'TeaController@show');
// Route::get('/show/{id}', 'ReviewController@show');

// Route::get('/userpage/userpassword', 'UserController@editUserPassword');
Route::get('/react', 'ReviewController@index');

Route::get('/lists', 'CatalogueController@index');

Route::get('/createlist/new', 'CatalogueController@create');

Route::post('/createlist/create', 'CatalogueController@store');

Route::get('/editlist/{id}', 'CatalogueController@edit');

Route::put('/updatelist/{id}', 'CatalogueController@update');
Route::get('/teas', 'TeaController@index');

Route::put('/updatedelete/{tea_id}/{catalogue_id}', 'CatalogueController@updateDelete');

Route::get('/search/{query}', 'SearchController@search');
Route::get('/teas', 'TeaController@index');

Route::get('/countries', 'CountryController@index');
Route::get('/countries/{id}', 'CountryController@show');

Route::get('/basics', 'HomeController@basics');
Route::get('/top', 'TeaController@top');

Route::get('/region/{id}', 'CountryController@region');

Route::get('/region/{id}', 'CountryController@region');

Route::get('/type/{id}', 'TypeController@show');

Route::get('/types', 'TypeController@index');

Route::delete('/deletelist/{id}', 'CatalogueController@destroy');

Route::delete('/deletereview/{id}', 'ReviewController@destroy');

Route::get('/reviews', 'ReviewController@userReviews');