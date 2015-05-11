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

Route::resource('tables.cards','CardsController',['only' => ['store']]);
Route::get('tables/{tableId}/pull','CardsController@pull');
Route::get('tables/{tableId}/deal','CardsController@deal');