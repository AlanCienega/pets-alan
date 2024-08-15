<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\PetWalkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('pets', PetController::class)->only(['index', 'show', 'store']);
Route::resource('pet-walks', PetWalkController::class)->only(['index', 'store']);
