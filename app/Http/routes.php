<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
    return \Response::json(['message' => 'true']);
});

Route::post('tables','TablesController@store');

Route::resource('tables.cards','CardsController',['only' => ['index']]);
Route::post('tables/{tableId}/cards/pull','CardsController@pull');
Route::post('tables/{tableId}/cards/deal','CardsController@deal');