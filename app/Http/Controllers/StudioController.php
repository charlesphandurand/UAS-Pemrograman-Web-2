<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StudioController extends Controller
{
    public function indexstudio()
    {
        $daftar_studio = Studio::all();
        return view('studio.index', compact('daftar_studio'), [
            "title" => "Studio"
        ]);
    }

    public function createstudio()
    {
        return view('studio.create', [
            "title" => "Add Studio"
        ]);
    }

    public function storestudio(Request $request)
    {
        $validateData = $request->validate([
            'studio_name' => 'required|max:255',
        ]);
        Studio::create($validateData);
        Alert::success('Success', 'Studio has been added!');
        return redirect()->route('index-studio');
    }

    public function editstudio($id)
    {
        $studio = Studio::find($id);
        return view('studio.edit', compact('studio'), [
            "title" => "Edit Studio"
        ]);
    }

    public function updatestudio(Request $request, $id)
    {
        $validateData = $request->validate([
            'studio_name' => 'required|max:255',
        ]);
        $studio = Studio::find($id);
        $studio->update($validateData);
        Alert::info('Updated', 'Studio has been updated!');
        return redirect()->route('index-studio');
    }

    public function deletestudio($id)
    {
        $studio = Studio::find($id);
        $studio->delete();
        Alert::success('Deleted', 'Studio has been deleted!');
        return redirect()->route('index-studio');
    }
}
