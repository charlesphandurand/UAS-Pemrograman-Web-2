<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GenreController extends Controller
{
    public function indexgenre()
    {
        $daftar_genre = Genre::all();
        return view('genre.index', compact('daftar_genre'), [
            "title" => "Genre"
        ]);
    }

    public function creategenre()
    {
        return view('genre.create', [
            "title" => "Add Genre"
        ]);
    }

    public function storegenre(Request $request)
    {
        $validateData = $request->validate([
            'genre_name' => 'required|max:255',
        ]);
        Genre::create($validateData);
        Alert::success('Success', 'Genre has been added!');
        return redirect()->route('index-genre');
    }

    public function editgenre($id)
    {
        $genre = Genre::find($id);
        return view('genre.edit', compact('genre'), [
            "title" => "Edit Genre"
        ]);
    }

    public function updategenre(Request $request, $id)
    {
        $validateData = $request->validate([
            'genre_name' => 'required|max:255',
        ]);
        $genre = Genre::find($id);
        $genre->update($validateData);
        Alert::info('Updated', 'Genre has been updated!');
        return redirect()->route('index-genre');
    }

    public function deletegenre($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->route('index-genre');
    }
}
