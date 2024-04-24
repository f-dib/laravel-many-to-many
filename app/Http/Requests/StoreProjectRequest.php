<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required | max:255',
            'description' => 'required | max:5000',
            'src' => 'required | file | max:1024 | mimes:jpg,bpm,png',
            'technology' => 'required | max:5000',
            'github_link' => 'required | max:1000',
            'date' => 'required | max:10',
        ];
    }

    public function messages(): array {
        return [
            'name.required' => '* Devi inserire un nome valido',
            'name.max' => '* Il tuo nome ha superato il numero massimo di caratteri :max caratteri', 
            'description.required' => '* Devi inserire una descrizione valida',
            'description.max' => '* La tua descrizione ha superato il numero massimo di caratteri :max caratteri', 
            'src.required' => '* Devi inserire un\'immagine', 
            'src.mimes' => '* Il file deve essere un\'immagine', 
            'src.max' => '* Il tuo link ha superato il numero massimo di caratteri :max caratteri', 
            'technology.required' => '* Devi inserire un testo valido',
            'technology.max' => '* Il tuo testo ha superato il numero massimo di caratteri :max caratteri', 
            'github_link.required' => '* Devi inserire un link valido',
            'github_link.max' => '* Il tuo link ha superato il numero massimo di caratteri :max caratteri', 
            'date.required' => '* Devi inserire una data valida in formato americano (YYYY-MM-DD)',
            'date.max' => '* La data inserita ha superato il numero massimo di caratteri :max caratteri', 
        ];
    }
}
