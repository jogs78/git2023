<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CasaRequest extends FormRequest
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
            'codigo_postal'=>'required|integer|min:29000|max:29999',
            'precio'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'codigo_postal.*'=>'El código postal debe ser un entero entre 29000 y 29999 (*)',
            'precio.required'=>'El precio es requerido',
        ];
        
    }
}
