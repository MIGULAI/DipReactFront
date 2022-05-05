<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function Login(Request $req){
        $user = User::where('email' , $req->email)->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return ["error" => "Email or password is not mathed"];
        }
        return $user;
    }
}
