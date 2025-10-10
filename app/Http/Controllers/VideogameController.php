<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Videogame;

class VideogameController extends Controller
{
    public function index()
    {
        $videogames = Videogame::all();
        return view('videogames.index', compact('videogames'));
    }

    public function create()
    {
        return view('videogames.create');
    }

    public function store(Request $request)
    {
        $videogames = new Videogame();
        $videogames->title = $request->input('title');
        $videogames->genre = $request->input('genre');
        $videogames->platform = $request->input('platform');
        $videogames->save();

        return redirect()->route('videogames.index');
    }
}
