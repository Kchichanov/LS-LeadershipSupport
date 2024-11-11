<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreditStoreRequest extends FormRequest
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

                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'amount' => 'required|numeric|max:80000',
                'term' => 'required|integer|min:3|max:120',

        ];
    }
}
