<?php

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

$router->group(['prefix' => 'api/v1'], function() use ($router) {

    $router->get('/libraries', 'LibraryController@index');
    $router->post('/libraries', 'LibraryController@store');
    $router->put('/libraries/{id}', 'LibraryController@update');
    $router->delete('/libraries/{id}', 'LibraryController@destroy');
    $router->get('/libraries/{id}', 'LibraryController@show');

});
