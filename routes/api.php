<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// todo api's
Route::get('/todos', 'TodoController@index');
Route::post('/todos', 'TodoController@Store');
Route::post('/todos/{todo}', 'TodoController@update');
Route::post('/todos/delete/{todo}', 'TodoController@destroy');
