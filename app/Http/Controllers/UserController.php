<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $daftar_user = User::all();
        return view('user.index', compact('daftar_user'), [
            "title" => "Users"
        ]);
    }

    // public function mimin(){
    //     $daftar_user = User::all();
    //     return view('user.mimin', compact('daftar_user'));
    // }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        User::create($request->all());
        return redirect()->route('index-user');
        // $request->validate([
        //     'nama_user' => 'required|max:255',
        //     'username_user' => ['required', 'min:3', 'max:255', 'unique:user'],
        //     'password_user' => ['required|min:5|max:255']
        // ]);
    }

    public function edit($id){
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('index-user');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('index-user');
    }
}
