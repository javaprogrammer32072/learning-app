<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/", 'App\Http\Controllers\TestController@index');
Route::get("/login", 'App\Http\Controllers\TestController@login');
Route::get("/home", 'App\Http\Controllers\TestController@home');
Route::post("/login", 'App\Http\Controllers\TestController@loginPost');
Route::get("/signup", 'App\Http\Controllers\TestController@signup');
Route::post("/signup", 'App\Http\Controllers\TestController@signupPost');
Route::get("/about", 'App\Http\Controllers\TestController@about');