<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CarBrandController;
use App\Http\Controllers\CarTypeController;
use App\Http\Controllers\CityController;
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

//locations
Route::resource('locations', CityController::class);

//areas
Route::resource('areas', AreaController::class);

//car type
Route::resource('car-types', CarTypeController::class);

//car brand
Route::resource('car-brands', CarBrandController::class);