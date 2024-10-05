<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRquest extends FormRequest
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
            'title' => 'required|max:255',
            'thumb' => 'max:255',
            'price' => 'required|max:20',
            'sale_date' => 'required|date',
            'type' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'il titolo è obbligatorio',
            'title.max' => 'il titolo può essere lungo al massimo :max caratteri',
            'thumb.max' => 'il link all\'immagine può essere lungo al massimo :max caratteri', 
            'price.required' => 'il prezzo è obbligatorio',
            'price.max' => 'il prezzo può essere lungo al massimo :max caratteri',
            'sale_date.required' => 'la data è obbligatoria',
            'sale_date.date' => 'la data dev\'essere espressa in un formato valido',
            'type.required' => 'il tipo è obbligatorio',
            'type.max' => 'il tipo può essere lungo al massimo :max caratteri',
        ];
    }
}
