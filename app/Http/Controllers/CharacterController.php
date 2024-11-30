<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        return Character::with('movieOrSeries')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'movie_or_series_id' => 'required|exists:movies_or_series,id',
            'picture' => 'required|string',
            'description' => 'required|string',
        ]);

        return Character::create($data);
    }

    public function show($id)
    {
        return Character::with('movieOrSeries')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $character = Character::findOrFail($id);

        $data = $request->validate([
            'name' => 'string',
            'movie_or_series_id' => 'exists:movies_or_series,id',
            'picture' => 'string',
            'description' => 'string',
        ]);

        $character->update($data);

        return $character;
    }

    public function destroy($id)
    {
        $character = Character::findOrFail($id);
        $character->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }
}
