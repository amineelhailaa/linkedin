<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'type' => ['string','in:recruteur,candidat'],
            'bio'=> ['string'],
            'avatar' => ['image','nullable'],
            'entreprise'=>['required_if:type,recruteur','string','nullable'],
            'specialite'=>['required_if:type,candidat','string','nullable'],
            'profile_title'=>['required_if:type,candidat','string','nullable']
        ]);

        $pic_path = null;
        if($request->hasFile('avatar')){
           $pic_path= $request->file('avatar')->store('avatars','public');
        }




        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'bio' => $request->bio,
            'type'=> $request->type,
            'pic_path' => $pic_path,
        ]);

        if($user->type == 'recruteur'){
            $user->recruteurProfile()->create([
                'entreprise'=>$request->entreprise
            ]);

            $user->assignRole('recruteur');

        } elseif ($user->type == 'candidat'){
            $user->candidatProfile()->create([
                'specialite'=> $request->specialite,
                'profile_title'=> $request->profile_title
            ]);
            $user->assignRole('candidat');
        }
        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
