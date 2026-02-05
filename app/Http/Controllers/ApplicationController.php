<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\JobOffer;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function apply(JobOffer $offer)
    {
           Auth::user()->candidatProfile->applications()->firstOrCreate(['job_offer_id'=>$offer->id,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function myApplies()
    {
        $myApp = Auth::user()->candidatProfile->applications()->get();
        return view('candidat.myapplications', compact('myApp'));
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
    public function acceptApp(Application $application)
    {
        $application->update(['status' => 'accepted']);
        return redirect()->back();
    }
    public function declineApp(Application $application)
    {
        $application->update(['status' => 'declined']);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
