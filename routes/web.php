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

$router->get('/categories','CategoryController@index');
$router->post('/categories','CategoryController@store');
$router->get('/categories/{category}','CategoryController@show');
$router->put('/categories/{category}','CategoryController@update');
$router->patch('/categories/{category}','CategoryController@update');
$router->delete('/categories/{category}','CategoryController@destroy');