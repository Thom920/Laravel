<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class FormController extends Controller
{
    public function show()
    {
        return view('form');
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
}