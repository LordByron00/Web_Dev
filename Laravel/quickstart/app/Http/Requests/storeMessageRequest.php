<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeMessageRequest extends FormRequest
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
            //
            'sender_name' => 'required',
            'sender_email' => 'required|email',
            'message' => 'required|min:8|max:1000'
        ];
    }
}
