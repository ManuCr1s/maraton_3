<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RegionControler;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;

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
Route::controller(RegisterController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::get('/form','form')->name('form');
    Route::post('/register','store')->name('register');
});
Route::controller(CountryController::class)->group(function(){
    Route::post('/country','index')->name('country');
});
Route::controller(RegionControler::class)->group(function(){
    Route::post('/region','index')->name('region');
});
Route::controller(ProvinceController::class)->group(function(){
    Route::post('/province','store')->name('province');
});
Route::controller(DistrictController::class)->group(function(){
    Route::post('/district','store')->name('district');
});

