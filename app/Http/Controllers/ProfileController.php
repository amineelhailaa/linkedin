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




    public function myprofile(){
        $user = Auth::user();
    
        return view('profile.myprofile',['user'=>$user]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        //get data except avatar 
        $data = $request->safe()->except('pic_path');
            //if has a file ( can be null means unchanged)
        if($request->hasFile('pic_path')){
            $data['pic_path']= $request->file('pic_path')->store('avatars','public');
        }

        //check if the user want to change the password

        if($request->filled('password')){
            $data['password']= Hash::make($request->password);
        } else {
            unset($data['password']);
        }


        Auth::user()->update($data);

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
