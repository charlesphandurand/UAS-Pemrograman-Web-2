<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function indexabout(){
        return view('about.index', [
            "title" => "About"
        ]);
    }
}
