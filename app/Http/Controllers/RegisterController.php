<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function indexregister()
    {
        return view('register.index');
    }

    public function storeregister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min: 4|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:4|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        Alert::toast('Registration successful! Please login!', 'success');
        return redirect()->route('index-login');
    }
}
