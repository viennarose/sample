<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function user()
    {
        $user = User::orderBy('id')->get();
        return view('user', ['user' => $user]);
    }
    public function index()
    {
        $user = User::orderBy('full_name')->get();

        return view('index',['user' => $user]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'username' => 'required',
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        $user->update($request->all());
        return redirect('/user')->with('message', "$user->full_name A new user has been updated");
    }


    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'full_name' => 'required',
            'email' => 'required|email'
        ]);

        User::create([
            'username' => $request->username,
            'full_name' => $request->full_name,
            'email' => $request->email
        ]);
        return redirect('/user')->with('message', 'A new user has been added');
    }

    public function delete($id){

    $users = User::find($id);

    if (!$users) {

        return redirect('/user')->with('message', "User not found");

    }

    $users->delete();

    return redirect('/user')->with('message', "User has been deleted");
}
// public function delete(User $user) {
//     $user->delete();

//     return redirect('/user')->with('message', 'YAMETE KUDASAI.');
// }

}

