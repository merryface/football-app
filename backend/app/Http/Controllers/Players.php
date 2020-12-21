<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;


class Players extends Controller
{
    public function index() // show all friends
    {
        return Player::all();
    }
}
