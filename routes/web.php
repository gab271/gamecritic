<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

use App\Http\Controllers\VideogameController;

Route::resource('videogames', VideogameController::class);