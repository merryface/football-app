<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_one',
        "team_one_score",
        "team_one_bib",
        "team_two",
        "team_two_score",
        "team_two_bib"
    ];
}
