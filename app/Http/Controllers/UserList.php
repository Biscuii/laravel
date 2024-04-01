<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserList extends Controller
{
    public function show(){
        $users = User::all();
        return view('user/list', ['users'=> $users]);
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('user/update', ['user'=> $user]);
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('user.show')->with('success','ouiii');
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.show')->with('success','ohhhh');
    }

    public function add(){
        $user = User::all();
        return view('user.add', ['user'=> $user]);
    }

    public function checkAdd(Request $request) {
        $user = new User();
        $user->name = $request->name;  
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('user.show')->with('success', 'ohhhhhh');
    }

}
