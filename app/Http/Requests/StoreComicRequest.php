<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:50',
            'description' => 'nullable|string',
            'thumb' => 'required|url|max:255',
            'price' => 'required|string|max:8',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:20',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Il campo titolo',
            'description' => 'Il campo descrizione',
            'thumb' => 'Il campo url',
            'price' => 'Il campo prezzo',
            'series' => 'Il campo serie',
            'sale_date' => 'Il campo data',
            'type' => 'Il campo tipologia',
        ];
    }
}
