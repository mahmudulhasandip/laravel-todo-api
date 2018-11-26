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
Route::get('/todos', 'TodoController@index'); //all todo item list
Route::post('/todos', 'TodoController@Store'); //create a new todo item
Route::post('/todos/{todo}', 'TodoController@update'); //edit an existing todo item
Route::post('/todos/delete/{todo}', 'TodoController@destroy'); //delete a todo item
Route::get('/todos/completed', 'TodoController@completed'); //list of all completed todo item
Route::get('/todos/undone', 'TodoController@undone'); //list of all completed todo item
