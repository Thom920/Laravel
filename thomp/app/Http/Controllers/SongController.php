<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function show()
    {
        return view('songs');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'song_name' => 'required|string|min:3|max:32',
            'author' => 'required|string|min:6|max:32',
            'release_year' => 'required|integer',
        ]);

        Song::create($validatedData);
        return redirect()->route('form')->with('success', 'Form submitted successfully!');
    }

    public function delete(Song $song)
    {
        $song->delete();
        // return redirect()->route('library')->with('success', 'Song deleted successfully!');
        return redirect()->route('library')->with('success', 'Song deleted successfully!');
    }
    public function showUpdateForm($id)
    {
        
    }
}
