<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

//rotta della home
Route::get('/', [PublicController::class, 'home'])->name('home');
