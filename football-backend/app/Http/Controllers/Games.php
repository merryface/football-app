<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class Games extends Controller
{
    public function index() // show all Games
    {
        return Game::all();
    }

    public function show(Game $Game) // return individual Game
    {
        return Game::find($Game);
    }

    public function store(Request $request) // add new Game
    {
        $data = $request->all();
        $Game = Game::create($data);

        return $Game;
    }

    public function destroy(Game $Game) // delete Game
    {
        $Game->delete();
        return response(null, 204);
    }

    public function update(Request $request, Game $Game) //update Game
    {
        $data = $request->all();
        $Game->fill($data)->save();
        return $Game;
    }
}
