<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use App\Models\Studio;
use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GameController extends Controller
{
    public function indexgame()
    {
        $daftar_game = Game::all();
        return view('game.index', compact('daftar_game'), [
            "title" => "Games"
        ]);
    }

    public function creategame()
    {
        $daftar_genre = Genre::all();
        $daftar_studio = Studio::all();
        $daftar_platform = Platform::all();
        return view('game.create', compact('daftar_genre', 'daftar_studio', 'daftar_platform'), [
            "title" => "Add Game"
        ]);
    }

    public function storegame(Request $request)
    {
        $validateData = $request->validate([
            'genre_id' => 'required',
            'studio_id' => 'required',
            'platform_id' => 'required',
            'game_name' => 'required|max:255',
            'game_description' => 'required',
            'image' => 'required|image|file|max:5120'
        ]);
        $request->file('image')->store('public');
        $validateData['image'] = $request->file('image')->store('');
        Game::create($validateData);
        Alert::success('Success', 'Game has been added!');
        return redirect()->route('index-game');
    }

    public function editgame($id)
    {
        $daftar_genre = Genre::all();
        $daftar_studio = Studio::all();
        $daftar_platform = Platform::all();
        $game = Game::find($id);
        return view('game.edit', compact('game', 'daftar_genre', 'daftar_studio', 'daftar_platform'), [
            "title" => "Edit Game"
        ]);
    }

    public function updategame(Request $request, $id)
    {
        $validateData = $request->validate([
            'genre_id' => 'required',
            'studio_id' => 'required',
            'platform_id' => 'required',
            'game_name' => 'required|max:255',
            'game_description' => 'required',
            'image' => 'image|file|max:5120'
        ]);
        if ($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $request->file('image')->store('public');
        $validateData['image'] = $request->file('image')->store('');
        $game = Game::find($id);
        $game->update($validateData);
        Alert::info('Updated', 'Game has been updated!');
        return redirect()->route('index-game');
    }

    public function deletegame($id)
    {
        $game = Game::find($id);
        if ($game->image){
            Storage::delete($game->image);
            Storage::delete('public/'.$game->image);
            Storage::delete('storage/'.$game->image);
        }
        $game->delete();
        Alert::success('Deleted', 'Game has been deleted!');
        return redirect()->route('index-game');
    }
}
