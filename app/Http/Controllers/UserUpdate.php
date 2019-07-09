<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Rules\PasswordK;


class UserUpdate extends Controller
{
    public function edit($id)
    {
        $genres = ['Hombre','Mujer','Otro'];
        $user = User::find($id);
        return view('auth.change',compact('user','genres'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        // dd(\Hash::check($request->input('password'), $user->password));
        
        $this->validate($request, [
            "password" => 'nullable|alpha_num|required_unless:npassword, ""', function ($attribute, $value, $fail) {
                if (!\Hash::check($value, $user->password) == true) {
                    $fail($attribute.' is invalid.');
                }
              },
            "npassword" => 'nullable|alpha_num|min:8',
            "confirm-password" => 'nullable|alpha_num|min:8|same:npassword',
            "genre" => 'required',
            "name" => 'required',
            "lname" => 'required',
            "email" => 'required|email'
        ]);
            


if(\Hash::check($request->input("password"), $user->password)){
    $user->password = \Hash::make($request->input("npassword"));
}
else{
    
}



        $user->name = $request->input("name");
        $user->lname = $request->input("lname");
        $user->genre = $request->input("genre");
        $user->email = $request->input("email");


        $path = $request->file('avatar');



        if ($path) {
            $path->storeAs('public/products', 'avatar'.$request->user()->id);
            $user->avatar = 'storage/products/avatar'.$request->user()->id;
        }



        $user->save();


        return redirect(route('profile')); 
    }
}
