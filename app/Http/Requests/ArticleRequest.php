<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'cover'=>'required|image',
            'title'=>'required:min:10',
            'author'=>'required|min:5',
            'description'=>'required|max:100',
        ];
    }

    public function messages(): array
{
    return [
        'cover.required' => 'Immagine di copertina richiesta',
        'cover.image' => 'il file deve essere necessariamente un file immagine',
        'title.required' => 'Titolo della recensione richiesto',
        'title.min' => 'Il titolo deve essere di minimo 10 caratteri',
        'author.required'=> "l'autore della recensione è obbligatorio",
        'author.min' => "Nome dell'autore troppo corto, min 5 caratteri",
        'description.required' => 'Descrizione richiesta',
        'description.max'=>'La recensione può contenere massimo 10 caratteri',
    ];
}
}
