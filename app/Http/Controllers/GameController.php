<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('game.create', [
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
            'image' => 'image|file|max:5120'
        ]);
        $validateData['image'] = $request->file('image')->store('post-images');
        Game::create($validateData);
        return redirect()->route('index-game');
    }

    public function editgame($id)
    {
        $game = Game::find($id);
        return view('game.edit', compact('game'), [
            "title" => "Edit Game"
        ]);
    }

    public function updategame(Request $request, $id)
    {
        $validateData = $request->validate([
            'genre_id' => 'required|max:255',
            'game_name' => 'required|max:255',
            'image' => 'image|file|max:5120'
        ]);
        if ($request->oldImage){
            Storage::delete($request->oldImage);
        }
        $validateData['image'] = $request->file('image')->store('post-images');
        $game = Game::find($id);
        $game->update($validateData);
        return redirect()->route('index-game');
    }

    public function deletegame($id)
    {
        $game = Game::find($id);
        if ($game->image){
            Storage::delete($game->image);
        }
        $game->delete();
        return redirect()->route('index-game');
    }
}
