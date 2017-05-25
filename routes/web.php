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

$app->get('/', function ()
{
    return view('test');
});

$app->get('/{code_id}', 'LinksController@show');
$app->get('/stats/{code_id}', 'LinkStatsController@show');

$app->post('/', 'LinksController@store');
