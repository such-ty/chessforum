<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']);

Route::middleware(['auth'])->group(function() {

    Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'] );

Route::get('/user/{id}', [\App\Http\Controllers\UserController::class, 'edit'] );

Route::put('/user/{id}', [\App\Http\Controllers\UserController::class, 'update'] );

});

