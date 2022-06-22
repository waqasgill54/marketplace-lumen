<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/key', function() {
    $var = \Illuminate\Support\Str::random(32);
    return $var;
});

// Order Routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('orders',  ['uses' => 'Order\OrderController@showAllOrders']);
    $router->get('data_package_types',  ['uses' => 'Order\OrderController@getAllDataPackageType']);
    $router->post('order', ['uses' => 'Order\OrderController@storeOrUpdate']);
    $router->get('order/{id}', ['uses' => 'Order\OrderController@view']);
    $router->put('order/{id}', ['uses' => 'Order\OrderController@storeOrUpdate']);
    $router->delete('order/{id}', ['uses' => 'Order\OrderController@delete']);
});