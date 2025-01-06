<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHelicopterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'manufacturer' => 'required|string|max:255',
            'passengerCapacity' => 'required|integer|min:0',
            'maxSpeedKmh' => 'required|integer|min:0',
            'type' => 'required|string|max:255',
        ];
    }
}
