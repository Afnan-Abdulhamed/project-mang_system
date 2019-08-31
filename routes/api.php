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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
// });


Route::get('projects/{userId}', 'Api\ProjectsApiController@index');
Route::get('projects/{projectId}/show', 'Api\ProjectsApiController@show');
Route::post('projects/{projectId}/update', 'Api\ProjectsApiController@update');


