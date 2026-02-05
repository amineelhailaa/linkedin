<?php

namespace App\Http\Controllers;
use App\Models\Friendship;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $user =  Auth::user();
       $friends = $user->receivedFriendship()->where('status','pending')->with('sender')->get();
       return view('invitations',['invitations'=>$friends]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function accept()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {

        Auth::user()->sentFriendship()->create(['sender_id' =>Auth::id(),'receiver_id' => $id, 'status' => 'pending' ]);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $userId = Auth::id();
       $friends =  Friendship::where('status','accepted')->where(function (Builder $query) use ($userId) {
            $query->where('sender_id',$userId)->orWhere('receiver_id',$userId);
        })->get();

        return view('friendlist',['friends'=>$friends]);
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
    }

    public function declineFriend(Friendship $friendship)
    {
        $friendship->update(['status' => 'declined']);
        return redirect()->back();
    }
    public function acceptFriend(Friendship $friendship)
    {
        $friendship->update(['status' => 'accepted']);
        return redirect()->back();
    }
}
