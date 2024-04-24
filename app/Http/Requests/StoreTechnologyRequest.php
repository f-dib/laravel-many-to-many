<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTechnologyRequest extends FormRequest
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
            'title' => 'required | max:255',
            'color' => 'nullable | max:7'
        ];
    }

    public function messages(): array {
        return [
            'title.required' => '* Devi inserire un titolo valido',
            'title.max' => '* Il tuo titolo ha superato il numero massimo di caratteri :max caratteri', 
            'color.max' => '* il codice di questo colore ha superato il numero massimo di caratteri :max caratteri', 
        ];
    }
}
