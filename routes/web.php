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

$app->get('/', function () use ($app) {
    return $app->version();
});

// $app->get('notes', 'NotesController@index');
// $app->get('notes/{id}', 'NotesController@show');
// $app->post('notes', 'NotesController@create');
// $app->put('notes/{id}', 'NotesController@update');
// $app->delete('notes/{id}', 'NotesController@delete');

$app->group(['prefix' => 'api/notes'], function ($app) {
    $app->get('/', 'NotesController@index');
    $app->get('{id}', 'NotesController@show');
    $app->post('/', 'NotesController@create');
    $app->put('{id}', 'NotesController@update');
    $app->delete('{id}', 'NotesController@delete');
});



