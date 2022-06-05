<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use App\Models\Studio;
use App\Models\Platform;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function indexhome(Request $request)
    {
        if ($request->has('search')) {
            $daftar_game = Game::where('game_name', 'LIKE', '%' . $request->search . '%')
                ->orWhere('id', 'LIKE', '%' . $request->search . '%')->paginate(6)->withQueryString();
        } else {
            $daftar_game = Game::paginate(6)->withQueryString();
        }
        return view('welcome', compact('daftar_game'), [
            "title" => "Home"
        ]);
    }


    // fungsi untuk mengembalikan nama game di link
    public function postsgame(Game $posts)
    {
        return view('posts', [
            "title" => "Posts",
            "game" => $posts
        ]);
    }

    public function genre()
    {
        $daftar_genre = Genre::all();
        return view('listgenre', compact('daftar_genre'), [
            "title" => "Genre"
        ]);
    }

    // yg bujur
    public function subgenre(Genre $genre)
    {
        return view('genre', [
            "title" => $genre->genre_name,
            "game" => $genre->game,
            "genre" => $genre->genre_name
        ]);
    }

    // yg bujur, tpi pagination acak-acakan
    // public function subgenre(Genre $genre)
    // {
    //     $game = Game::paginate(6)->withQueryString();
    //     return view('genre', compact('game'), [
    //         "title" => $genre->genre_name,
    //         "game" => $genre->game,
    //         "genre" => $genre->genre_name
    //     ]);
    // }

    public function studio()
    {
        $daftar_studio = Studio::all();
        return view('liststudio', compact('daftar_studio'), [
            "title" => "Studio"
        ]);
    }

    public function substudio(Studio $studio)
    {
        return view('studio', [
            "title" => $studio->studio_name,
            "game" => $studio->game,
            "studio" => $studio->studio_name
        ]);
    }

    public function platform()
    {
        $daftar_platform = Platform::all();
        return view('listplatform', compact('daftar_platform'), [
            "title" => "Platform"
        ]);
    }

    public function subplatform(Platform $platform)
    {
        return view('platform', [
            "title" => $platform->platform_name,
            "game" => $platform->game,
            "platform" => $platform->platform_name
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About"
        ]);
    }
}
