<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'body' => 'required|min:10',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
