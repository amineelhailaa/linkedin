<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //

    public function index($type=null,$query=null){
        $users = null;
        if(isset($type)&& isset($query)){

            $users = User::where('',$type? 'specialite' : 'name')->get();
            //just making the default is name .
        } else {
                // code...
                    $users = User::all();
            }

        return view('dashboard',compact('users'));
    }




}
