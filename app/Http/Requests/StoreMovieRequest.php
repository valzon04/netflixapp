<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:35',
            'description' => 'required|max:35',
            'category_id' => 'required|exists:categories,id',
            'file' => 'required|max:35',
            'thumbnail' => 'required|max:35',
            'rating' => 'required|max:35',
            'serie_id' => 'required|exists:series,id'
        ];
    }
}
