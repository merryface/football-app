<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Players
Route::get('/players', [Players::class, "index"]); // return all players
Route::post('/players', [Players::class, "store"]); // add a new player
Route::delete('players/{player}', [Players::class, "destroy"]); // remove a player
Route::patch('players/{player}', [Players::class, "update"]); // Update a player


// Matches
Route::get('/matches', [Matches::class, "index"]); // return all players
Route::get('/matches/{match}', [Matches::class, "show"]); // return a specific player
Route::post('/matches', [Matches::class, "store"]); // add a new player
Route::delete('matches/{match}', [Matches::class, "destroy"]); // remove a player
Route::patch('matches/{match}', [Matches::class, "update"]); // Update a player