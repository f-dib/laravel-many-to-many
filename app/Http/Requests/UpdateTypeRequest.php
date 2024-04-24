<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
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
            'description' => 'nullable | max:5000',
        ];
    }

    public function messages(): array {
        return [
            'title.required' => '* Devi inserire un titolo valido',
            'title.max' => '* Il tuo titolo ha superato il numero massimo di caratteri :max caratteri', 
            'description.max' => '* La tua descrizione ha superato il numero massimo di caratteri :max caratteri', 
        ];
    }
}
