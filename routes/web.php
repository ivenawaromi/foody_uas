<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ReservationController;


Route::get('/', function () {
    return view('welcome');
});

//Home Controller
Route::get('home', [HomeController::class, 'index'])->name('home');

//Profile Controller
Route::get('profile', ProfileController::class)->name('profile');

//Food Controller
Route::resource('foods', FoodController::class);

Auth::routes();

Route::resource('resev', ReservationController::class);
