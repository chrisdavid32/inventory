<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
            'name' => 'required|unique:products,name',
            'category_id' => 'required|exists:categories,id',
            'quantity' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|file|image|max:2000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Provide the product name',
            'name.unique' => 'The product with same name already exist',

        ];
    }
}
