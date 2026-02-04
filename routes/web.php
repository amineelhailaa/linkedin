<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\JobOfferController;

Route::get('/', function () {
    return view('home');
});
// Route::get('/production',function(){ return view('recruteur.jobOffer');});





require __DIR__.'/auth.php';



Route::get('/dashboard',[UserController::class,'index'])->name('dashboard');


//to show profiles after
Route::get('/profile/{id}',[ProfileController::class,'discoverProfile'])->name('discover');

//edit profile my profile
Route::middleware('auth')->group(function(){


Route::get('/myprofile',[ProfileController::class,'myprofile'])->name('myprofile');

Route::patch('/myprofile',[ProfileController::class,'update'])->name('myprofile/save');
});



//for offer
Route::get('/create_offer',[JobOfferController::class,'create']);
Route::post('/create_offer',[JobOfferController::class,'store'])->name('jobCreate');
//candiat browse offers
Route::get('/offers',[JobOfferController::class,'index'])->name('offers');
//recruteur his offers
Route::get('/dashboard/offers',[JobOfferController::class,'myoffers']);
//offer details ( for both plz )
Route::get('/offer/{offer}/detail',[JobOfferController::class,'offerDetails'])->name('offer_detail');
