<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RegionControler;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\UserController;

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
    Route::get('/documents/{nombreArchivo}','create')->name('download');
    Route::post('/verification','verificationDni')->name('verification');
})->middleware('guest');
Route::controller(CountryController::class)->group(function(){
    Route::post('/country','index')->name('country');
})->middleware('guest');
Route::controller(RegionControler::class)->group(function(){
    Route::post('/region','index')->name('region');
})->middleware('guest');
Route::controller(ProvinceController::class)->group(function(){
    Route::post('/province','store')->name('province');
})->middleware('guest');
Route::controller(DistrictController::class)->group(function(){
    Route::post('/district','store')->name('district');
})->middleware('guest');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/logear',[UserController::class,'store'])->name('logear');
Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');
    Route::post('/logout',[UserController::class,'destroy'])->name('logout');
    Route::get('/level',[RegisterController::class,'levelCount'])->name('level');
    Route::get('/enrolled',[UserController::class,'enrolled'])->name('enrolled');
    Route::get('/low',[UserController::class,'low'])->name('low');
    Route::get('/numbered',[UserController::class,'numbered'])->name('numbered');
    Route::get('/inscriptions',[RegisterController::class,'inscription'])->name('inscriptions');
    Route::post('/numbered',[RegisterController::class,'update'])->name('updated');
    Route::get('/final',[RegisterController::class,'register'])->name('final');
    Route::get('/lower',[RegisterController::class,'edit'])->name('lower');
});