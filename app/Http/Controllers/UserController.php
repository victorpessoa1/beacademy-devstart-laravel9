<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        // $user = User::findOrFail($id);
        // $user = User::where('id', $id)->first();
        if (!$user = User::find($id))
            return redirect()->route('users.index');
        $title = 'Usuário ' . $user->name;

        return view('users.show', compact('user', 'title'));
    }
}
