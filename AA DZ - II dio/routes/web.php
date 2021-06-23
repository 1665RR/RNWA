<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserGoogleController;

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


Route::resource('manager', ManagerController::class);
Route::resource('location', LocationController::class);
Route::resource('users', UsersController::class);
// googlelogin - google login
Route::get('welcome', [UserGoogleController::class,'googleNewLogin']);

