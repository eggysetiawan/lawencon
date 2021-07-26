<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:1', 'max:200'],
            'code' => ['required', 'min:1', 'max:50', 'string'],
            'amount' => ['required', 'integer'],
            'date' => ['required', 'date'],
        ];
    }
}
