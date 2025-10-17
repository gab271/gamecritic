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
            'title'    => 'required|string|max:255',
            'genre'    => 'required|string|max:255',
            'platform' => 'required|string|max:255',
        ]);

        Videogame::create($validated);

        return redirect()->route('videogames.index')->with('success', 'Videogame created.');
    }

    public function edit(Videogame $videogame)
    {
        return view('videogames.edit', compact('videogame'));
    }

    public function update(Request $request, Videogame $videogame)
    {
        $validated = $request->validate([
            'title'    => 'required|string|max:255',
            'genre'    => 'required|string|max:255',
            'platform' => 'required|string|max:255',
        ]);

        $videogame->update($validated);

        return redirect()->route('videogames.index')->with('success', 'Videogame updated successfully.');
    }

    public function destroy(Videogame $videogame)
    {
        $videogame->delete();

        return redirect()->route('videogames.index')->with('success', 'Videogame deleted');
    }
}
