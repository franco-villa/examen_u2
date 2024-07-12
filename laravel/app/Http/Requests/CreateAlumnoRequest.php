<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
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
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:10',
            'curso'=>'required|string|max:20',
            'nota1'=>'required|numeric|min:0|max:20',
            'nota2'=>'required|numeric|min:0|max:20',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' =>  'El nombre es obligatorio.',
            'nombre.max' =>  'El nombre no debe ser mayor a 50 caracteres.',
            'curso.required' =>  'El curso es obligatorio.',
            'curso.max' =>  'El curso no debe ser mayor a 20 caracteres.',
            
            'nota1.required' =>  'El nota1 es obligatorio.',
            'nota1.min' =>  'El nota1 no debe ser menor a 0.',
            'nota1.max' =>  'El nota1 no debe ser mayor a 20.',
            'nota2.required' =>  'El nota2 es obligatorio.',
            'nota2.min' =>  'El nota2 no debe ser menor a 0.',
            'nota2.max' =>  'El nota2 no debe ser mayor a 20.',

        ];
    }
}
