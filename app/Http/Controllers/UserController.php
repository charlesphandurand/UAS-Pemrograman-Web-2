<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $daftar_user = User::all();
        return view('user.index', compact('daftar_user'), [
            "title" => "Users"
        ]);
    }

    public function create()
    {
        return view('user.create', [
            "title" => "Add User"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min: 4|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:4|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        Alert::success('Success', 'User has been added!');
        return redirect()->route('index-user');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'), [
            "title" => "Edit User"
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min: 4|max:255',
            'username' => ['required', 'min:3', 'max:255'],
            'password' => 'required|min:4|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::find($id);
        $user->update($validatedData);
        Alert::info('Updated', 'User has been updated!');
        return redirect()->route('index-user');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('index-user');
    }
}
