<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexhome(){
        $daftar_game = Game::all();
        return view('welcome', compact('daftar_game'), [
            "title" => "Home"
        ]);
    }
}
