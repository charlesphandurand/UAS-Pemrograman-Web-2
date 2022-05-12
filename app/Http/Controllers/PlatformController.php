<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function indexplatform()
    {
        $daftar_platform = Platform::all();
        return view('platform.index', compact('daftar_platform'), [
            "title" => "Platform"
        ]);
    }

    public function createplatform()
    {
        return view('platform.create', [
            "title" => "Add Platform"
        ]);
    }

    public function storeplatform(Request $request)
    {
        $validateData = $request->validate([
            'platform_name' => 'required|max:255',
        ]);
        Platform::create($validateData);
        return redirect()->route('index-platform');
    }

    public function editplatform($id)
    {
        $platform = Platform::find($id);
        return view('platform.edit', compact('platform'), [
            "title" => "Edit Platform"
        ]);
    }

    public function updateplatform(Request $request, $id)
    {
        $validateData = $request->validate([
            'platform_name' => 'required|max:255',
        ]);
        $platform = Platform::find($id);
        $platform->update($validateData);
        return redirect()->route('index-platform');
    }

    public function deleteplatform($id)
    {
        $platform = Platform::find($id);
        $platform->delete();
        return redirect()->route('index-platform');
    }
}
