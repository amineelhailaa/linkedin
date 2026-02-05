<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //code
    public function index(Request $get_request){
        $users = null;
        $type = $get_request->input('type') ?? null;
        $query = $get_request->input('q') ?? null ;
        // echo $query;
        if(isset($type)&& isset($query)){
                // echo "amine elhailaa";
            $users = User::where('id', '!=', auth()->id())->where("{$type}", 'LIKE', "%{$query}%")->get();
            //does laravel sanitize this , cuz i didnt validate the type so they can pass another column and kick me ,
            //iwill add a if else but it will be hard coded in a gro projecgt
            //just making the default is name.
        } else {
                // code...
            $users = User::where('id', '!=', auth()->id())->get();
            }

        return view('dashboard',compact('users'));
    }



    public function profile(){
        echo 'amine';
    }




}
