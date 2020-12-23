<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerRequst;
use App\Models\Player;

class Players extends Controller
{
public function index() // show all players
    {
        return Player::all();
    }

    public function store(PlayerRequst $request) // add new player
    {
        $data = $request->all();
        $player = Player::create($data);

        return $player;
    }

    public function destroy(Player $player) // delete player
    {
        $player->delete();
        return response(null, 204);
    }

    public function update(PlayerRequst $request, Player $player) //update player
    {
        $data = $request->all();
        $player->fill($data)->save();
        return $player;
    }
}
