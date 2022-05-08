<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $daftar_admin = Admin::all();
        return view('admin.index', compact('daftar_admin'));
    }

    public function mimin(){
        $daftar_admin = Admin::all();
        return view('admin.mimin', compact('daftar_admin'));
    }

    public function create(){
        return view('admin.create');
    }

    public function store(Request $request){
        Admin::create($request->all());
        // $request->validate([
        //     'nama_admin' => 'required|max:255',
        //     'username_admin' => ['required', 'min:3', 'max:255', 'unique:admin'],
        //     'password_admin' => ['required|min:5|max:255']
        // ]);
        return redirect()->route('browse-admin');
    }

    public function edit($id){
        $admin = Admin::find($id);
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id){
        $admin = Admin::find($id);
        $admin->update($request->all());
        return redirect()->route('browse-admin');
    }

    public function delete($id){
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('browse-admin');
    }
}
