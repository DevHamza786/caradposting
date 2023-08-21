<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $user = User::find(Auth::id());
        return view('panel.users.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        if($request->password != null){
            $user->passowrd = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }
}
