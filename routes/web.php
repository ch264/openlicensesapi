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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });


// $router->get('/', 'LicenceGenerator@show_all');

// Works but adds index.html
// $router->get('/', function () {
//     return response(view('index'));
// });

$router->get('/', function () {
    return response(view('index'));
});

$router->get('/{id}[/{type}]', 'LicenceGenerator@show_licence');