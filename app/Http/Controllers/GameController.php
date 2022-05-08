<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function indexgame(){
        $daftar_game = Game::all();
        return view('game.index', compact('daftar_game'), [
            "title" => "Games"
        ]);
    }

    public function creategame(){
        return view('game.create');
    }

    public function create(){
        return view('game.create');
    }

    public function storegame(Request $request){
        Game::create($request->all());
        return redirect()->route('index-game');
    }

    public function editgame($id){
        $game = Game::find($id);
        return view('game.edit', compact('game'));
    }

    public function updategame(Request $request, $id){
        $game = Game::find($id);
        $game->update($request->all());
        return redirect()->route('index-game');
    }

    public function deletegame($id){
        $game = Game::find($id);
        $game->delete();
        return redirect()->route('index-game');
    }
}
