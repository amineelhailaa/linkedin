<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\JobOffer;

class JobOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $offers = JobOffer::all();
       return view('recruteur.availableOffers',["jobs"=>$offers]);
    }


    
        public function myoffers(){
            $offers = Auth::user()->recruteurProfile->jobOffers()->latest()->get();
            return view('myoffers',compact('offers'));

        }


        //offer details 

        public function offerDetails
        (JobOffer $offer){
            return view('offerDetails',compact('offer'));
        }

        //




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('recruteur.jobOffer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $path = 'no image';
        if($request->hasFile('image')){
            $path= $request->file('image')->store('offerImage','public');
        }

        $user = Auth::user();
        $user->recruteurProfile->jobOffers()->create([
                'entreprise'=>$request->entreprise,
                'contrat'=>$request->contrat,
                'titre'=>$request->titre,
                'description'=>$request->description,
                'image'=>$path,
                'status'=>$request->status
                ]);

        return redirect(route('dashboard'));



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $job = JobOffer::where('id',$id)->update(['status'=>'closed']);
        return redirect(route('i need route here boy'));
    }
}
