<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "team_one"=>["required", "string", "max:100"],
            "team_one_bib"=>["string", "max:300"],
            "team_one_score"=>["required", "numeric"],
            "team_two"=>["required", "string", "max:100"],
            "team_two_score"=>["required", "numeric"],
            "team_two_bib"=>["string", "max:300"]
        ];
    }
}
