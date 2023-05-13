<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MercatinoRequest extends FormRequest
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
            'logo'=>'required|image',
            'name'=>'required:min:10',
            'price'=>'required',
            'description'=>'required|max:100',
        ];
    }
    public function messages(): array
    {
        return [
            'logo.required' => "Immagine dell'annuncio richiesta",
            'logo.image' => 'il file deve essere necessariamente un file immagine',
            'name.required' => "Titolo dell'annuncio richiesto",
            'name.min' => 'Il titolo deve essere di minimo 10 caratteri',
            'price.required'=> "Prezzo dell'annuncio richiesto",
            'description.required' => 'Descrizione richiesta',
            'description.max'=>'Il contenuto della descrizione può contenere massimo 100 caratteri',
        ];
    }
}
