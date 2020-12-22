<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Match;

class Matches extends Controller
{
    public function index() // show all Matchs
    {
        return Match::all();
    }

    public function show(Match $friend) // return individual friend
    {
        return Match::find($friend);
    }

    public function store(Request $request) // add new Match
    {
        $data = $request->all();
        $Match = Match::create($data);

        return $Match;
    }

    public function destroy(Match $Match) // delete Match
    {
        $Match->delete();
        return response(null, 204);
    }

    public function update(Request $request, Match $Match) //update Match
    {
        $data = $request->all();
        $Match->fill($data)->save();
        return $Match;
    }
}
