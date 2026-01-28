<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});





require __DIR__.'/auth.php';



Route::get('/dashboard/{type?}/{query?}',[UserController::class,'index'])->name('dashboard');