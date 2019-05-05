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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post("/motorista", [
    'as' => "motorista.create",
    'uses' => "MotoristaController@criarNovo"
]);

$router->get("/motorista/veiculoProprio", [
    "as" => "motorista.veiculoProprio",
    "uses" => "MotoristaController@comVeiculoProprio"
]);

$router->put('/motorista/atualizar/{id}',[
    "as" => "motorista.atualizar",
    "uses" => "MotoristaController@ataulizarRegistro"
]);
