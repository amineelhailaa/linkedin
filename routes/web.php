<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
});


//for loading login page
Route::get('/login',[])
Route::get('/amine', function() {
return view('index');
});

