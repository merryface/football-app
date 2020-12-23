<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\GamesRequest;
use App\Http\Resources\API\GameResource;

class Games extends Controller
{
    public function index() // show all Games
    {
        return GameResource::collection(Game::all());
    }

    public function show(Game $game) // return individual Game
    {
        return new GameResource($game);
    }

    public function store(GamesRequest $request) // add new Game
    {
        $data = $request->all();
        $game = Game::create($data);

        return new GameResource($game);
    }

    public function destroy(Game $game) // delete Game
    {
        $game->delete();
        return response(null, 204);
    }

    public function update(GamesRequest $request, Game $game) //update Game
    {
        $data = $request->all();
        $game->fill($data)->save();
        return new GameResource($game);
    }
}
