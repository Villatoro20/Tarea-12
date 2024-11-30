<?php

namespace App\Http\Controllers;

use App\Models\MovieOrSeries;
use Illuminate\Http\Request;

class MovieOrSeriesController extends Controller
{
    public function index()
    {
        return MovieOrSeries::with('characters')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'classification' => 'required|string',
            'release_date' => 'required|date',
            'review' => 'required|string',
            'season' => 'nullable|integer',
        ]);

        return MovieOrSeries::create($data);
    }

    public function show($id)
    {
        return MovieOrSeries::with('characters')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $movie = MovieOrSeries::findOrFail($id);

        $data = $request->validate([
            'name' => 'string',
            'classification' => 'string',
            'release_date' => 'date',
            'review' => 'string',
            'season' => 'integer',
        ]);

        $movie->update($data);

        return $movie;
    }

    public function destroy($id)
    {
        $movie = MovieOrSeries::findOrFail($id);
        $movie->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }
}
