<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'name' => 'required',
            'age' => 'required|integer',
            'teacher_id' => 'required',
            'class' => 'required',
            'admission_date' => 'required|date|before:tomorrow',
            'yearly_fees' => 'required|numeric|between:10000.00,100000.00',
            'comments' => 'nullable'
        ];
    }
}
