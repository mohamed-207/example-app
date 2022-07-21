<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/test1', function (Request $request) {

        return response()->json("test");



});

Route::get('/emp', 'App\Http\Controllers\employeeController@index');
Route::get('/dep', 'App\Http\Controllers\departmentController@index');
Route::get('/projects', 'App\Http\Controllers\projectController@index');
