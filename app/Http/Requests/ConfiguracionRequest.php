<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfiguracionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'sueldo'=>['numeric'],
            'bonificacion'=>['numeric','nullable'],
            'moneda_id'=>['integer'],
            'frecuencia_id'=>['integer']
        ];
    }

    public function messages()
    {
        
    }
}
