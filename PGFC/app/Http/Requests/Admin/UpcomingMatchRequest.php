<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpcomingMatchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'home_team' => 'required|max:255',
            'away_team' => 'required|max:255',
            'match_datetime' => 'required|date',
            'vanue' => 'required|max:255',
            'home_team_logo' => 'required|max:255',
            'away_team_logo' => 'required|max:255',
            'description' => 'nullable|max:255',
        ];
    }
}
