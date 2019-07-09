<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Socialite;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function check(Request $request)
    {
        $user = User::find($request->id)->get();
        return $user;
    }

    public function show()
    {
       return view('profile');
    }


}
