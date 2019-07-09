<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name')->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = ['Hombre','Mujer','Otro'];
        $user = User::find($id);
        return view('admin.users.edit',compact('user','genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            "name" => 'required',
            "genre" => 'required',
            "avatar" => "image|dimensions:min_width=580,max_width=610,min_height=390,max_height=410",
        ]);

        $user = User::find($id);

        $user->name = $request->input("name");
        $user->genre = $request->input("genre");


        $path = $request->file('avatar');



        if (!is_null($path)) {
            $path->storeAs('public/products', 'avatar'.$request->user()->id);
            $user->avatar = 'storage/products/avatar'.$request->user()->id;
        }



        $user->save();


        return redirect()->route('users.show',['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route("users.index");
    }
}
