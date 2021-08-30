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

// route for homepage
Route::get('/', function () {
    return view('home');
});

// route for Lvil page
Route::get('/Lviv', [\App\Http\Controllers\LvivController::class, 'CurlWeather']);

// route for Kharkiv page
Route::get('/Kharkiv', [\App\Http\Controllers\KharkivController::class, 'KhaWeather']);
