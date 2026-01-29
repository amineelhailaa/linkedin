<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
    return view('home');
});





require __DIR__.'/auth.php';



Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');


//to show profiles after 
Route::get('/profile/{id}',function( $id){
$user = User::find($id);
echo $user;
});

//edit profile my profile
Route::middleware('auth')->group(function(){


Route::get('/myprofile',[ProfileController::class,'myprofile'])->name('myprofile');
Route::patch('/myprofile',[ProfileController::class,'update']);


});


