<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    //$router->resource('demo/users', ReviewController::class);

    $router->resource('/users', UserController::class);

    $router->resource('/review', ReviewController::class);

    // $router->resource('demo/image', ImageController::class);

    $router->resource('/image', ImageController::class);

    // $router->resource('demo/teas', TeaController::class);

    $router->resource('/teas', TeaController::class);


});
