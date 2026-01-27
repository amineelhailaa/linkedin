<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\User;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::all() ?? [];
        view('browse',['users'=> $users])
    }



}
