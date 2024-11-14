<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
     public function login(Request $request){
    $request->validate([
        'username' => 'required',
        'password' => 'required|min:6',
    ]);

    $identifier = $request->input('username');
    
    if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
        $user = User::where('email', $identifier)->first();
    } else {
        $user = User::where('phone', $identifier)->first();
    }

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Invalid email/phone or password']);
        
    }
    else{
        $role = $user->role;
        if ($role == 1) {
            # code
        }
        elseif($role == 2){
            # code
        }
        else{
            #code
        }
    }

}
}
