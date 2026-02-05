<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\JobOfferController;
use App\Models\JobOffer;

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

Route::get('/dashboard/offers',[JobOfferController::class,'myoffers'])->name('myoffers');
//offer detail for recrutor tosee the applications
Route::get('/dashboard/offers/{offer}',[JobOfferController::class,'offerDetailsRecruter'])->name('R_detail_offer');
//offer details ( for both plz )
Route::get('/offer/{offer}/detail',[JobOfferController::class,'offerDetails'])->name('offer_detail');



//apply
Route::get('/offer/{offer}/apply',[\App\Http\Controllers\ApplicationController::class,'apply'])->name('apply');
//decline
Route::get('/offers/{application}/decline',[\App\Http\Controllers\ApplicationController::class,'declineApp']);
Route::get('/offers/{application}/accept',[\App\Http\Controllers\ApplicationController::class,'acceptApp']);


//myapplies
Route::get('/myapplies',[\App\Http\Controllers\ApplicationController::class,'myApplies'])->name('myapplies');





//friend ship
//list mine
Route::get('/invitations',[\App\Http\Controllers\FriendshipController::class,'index'])->name('invitations');
Route::patch('/invitations/{id}/accept',[\App\Http\Controllers\FriendshipController::class,'acceptFriend']);
Route::patch('/invitations/{id}/decline',[\App\Http\Controllers\FriendshipController::class,'declineFriend']);
Route::post('/sendInv/{id}',[\App\Http\Controllers\FriendshipController::class,'store'])->name('sendInv');

//friend list

Route::get('/friend_list',[\App\Http\Controllers\FriendshipController::class,'show'])->name('friends');
