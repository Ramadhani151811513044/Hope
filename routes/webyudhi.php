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

Route::get('/login',\App\Http\Controllers\LoginController::class . '@index')->name('login');
Route::post('/postlogin',\App\Http\Controllers\LoginController::class . '@postlogin');
Route::get('/logout',\App\Http\Controllers\LoginController::class . '@logout');

Route::get('/user',\App\Http\Controllers\UsersController::class . '@index');
Route::post('/user/create/save',\App\Http\Controllers\UsersController::class . '@store');
Route::get('/user/create',\App\Http\Controllers\UsersController::class . '@create');



Route::group(['middleware' => 'auth'],function(){
    Route::get('/', function () {
        return view('layouts.dashboard');
    });
});

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard', function () {
        return view('layouts.dashboard');
    });
});

Route::get('/edhope', function () {
    return view('layouts.edhope');
});