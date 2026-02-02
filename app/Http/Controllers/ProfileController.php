<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use function PHPUnit\Framework\containsOnly;
use function PHPUnit\Framework\isEmpty;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function discoverProfile($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->load(['candidatProfile.competence', 'candidatProfile.formation', 'candidatProfile.experience']);
        }

        if ($user && $user->type === 'candidat') {
            return view('profile.candidatProfile', ['user' => $user]);
        }

        return view('profile.discoverProfile', ['user' => $user]);
    }


    public function myprofile()
    {
        $user = Auth::user();

        return view('profile.myprofile', ['user' => $user]);
    }


   public function validateEmpty($formations)
    {
        $fors=[];
        foreach ($formations as $formation ){
            $can = true;
            foreach ($formation as $key=>$value){
                if (empty($value)){
                    $can = false;
                }
            }
            if ($can){
                $fors[]=$formation;
            }
        }
        return $fors;
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        // a function for validating

        //get data except avatar
        $data = $request->safe()->except('pic_path');
        //if has a file ( can be null means unchanged)
        if ($request->hasFile('pic_path')) {
            $data['pic_path'] = $request->file('pic_path')->store('avatars', 'public');
        }

        //check if the user want to change the password

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

//        dd('amine');

        $user = Auth::user();
        $user->update($data);

        if ($user->type == 'candidat') {
            $profile = $user->candidatProfile;
            $profile->update($data);

            $formations = $request->input('formations', []);
            $competences = $request->input('competences', []);
            $experiences = $request->input('experiences', []);

            $formations = $this->validateEmpty($formations);
            $experiences = $this->validateEmpty($experiences);
            $competences = $this->validateEmpty($competences);




            $profile->formation()->delete();
            $profile->competence()->delete();
            $profile->experience()->delete();


            if(!empty($formations)){

                $profile->formation()->createMany($formations);

            }
            if(!empty($competences)){
                $profile->competence()->createMany($competences);

            }
            if(!empty($experiences)){
                $profile->experience()->createMany($experiences);
            }

        } elseif ($user->type == 'recruteur') {
            $user->recruteurProfile->update($data);
        }

        return Redirect::route('myprofile');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
