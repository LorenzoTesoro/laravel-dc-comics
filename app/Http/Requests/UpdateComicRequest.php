<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateComicRequest extends FormRequest
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
            'title' => [
                'required',
                Rule::unique('comics')->ignore($this->comic->id),
                'min:5',
                'max:100'
            ],
            'description' => 'nullable|max:400',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:4',
            'series' => 'nullable|max:30',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|max:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve essere almeno :min caratteri',
            'title.max' => 'Il titolo deve essere almeno :max caratteri',
            'description' => 'La descrizione deve essere :max caratteri',
            'thumb.max' => "L'immagine può essere massimo :max caratteri",
            'price.decimal' => "Il prezzo può essere massimo di :max caratteri",
            'series.max' => 'La serie puó essere massimo :max caratteri',
            'sale_date.date' => 'La data di uscita deve essere nel formato (anno/mese/giorno)',
            'type' => 'Il tipo di fumetto può essere massimo :max caratteri'
        ];
    }
}
