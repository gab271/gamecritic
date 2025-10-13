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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'platform' => 'required|string|max:255',
        ]);

        Videogame::create($validated);

        return redirect()->route('videogames.index')->with('success', 'Videogame created.');
    }

     

}