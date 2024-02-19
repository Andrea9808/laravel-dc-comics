<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class ComicFormRequest extends FormRequest
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

            'name'=> 'required|string|min:5|max:150',
            'publication_date'=>'nullable',
            'price'=>'required|numeric',
            'avaible'=>'required|boolean',
        ];
    }

    public function messages() {

        return [
            'name.required' => "E' obbligatorio inserire un titolo",
            'name.min' => "Il nome non puo' essere minore di 5 caratteri",
            'price' => "E' obbligatorio inserire un numero, anche 0",
            'avaible.boolean' => "Devi inserire 1 per disponibile e 0 per non disponibile",
            'avaible.required' => "E' obbligatorio inserire la disponibilità"
        ];
    }
}
