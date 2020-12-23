<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "team_one" => $this->team_one,
            "team_one_score" => $this->team_one_score,
            "team_one_bib" => $this->team_one_bib,
            "team_two" => $this->team_two,
            "team_two_score" => $this->team_two_score,
            "team_two_bib" => $this->team_one_bib,
        ];
    }
}
