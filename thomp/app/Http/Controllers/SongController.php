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
        $song = Song::find($id);
        if (!$song) {
            return redirect()->route('library')->with('error', 'Song not found!');
        }
        return view('/updatesongform', compact('song'));
    }

public function update(Request $request, $id)
{
    // 1. Valideer de data
    $validatedData = $request->validate([
        'song_name' => 'required|string|min:3|max:32',
        'author' => 'required|string|min:6|max:32',
        'release_year' => 'required|integer',
    ]);

    // 2. Zoek de song
    $song = Song::find($id);
    if (!$song) {
        return redirect()->route('library')->with('error', 'Song not found!');
    }

    // 3. Update de song met de gevalideerde data
    $song->song_name = $validatedData['song_name'];
    $song->author = $validatedData['author'];
    $song->release_year = $validatedData['release_year'];
    $song->save();

    // 4. Redirect met succesmelding
    return redirect()->route('library')->with('success', 'Song succesvol bijgewerkt!');
}
}
