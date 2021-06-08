<?php

use App\Http\Controllers\TaskController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/tasks', 'App\Http\Controllers\TaskController@index')->name('path.index');
// Route::post('/tasks', 'App\Http\Controllers\TaskController@index')->name('path.store');
// Route::put('/tasks/{id}', 'App\Http\Controllers\TaskController@index')->name('path.show');
// Route::delete('/tasks/{id}', 'App\Http\Controllers\TaskController@index')->name('path.destroy');

Route::resource('tasks', TaskController::class);
