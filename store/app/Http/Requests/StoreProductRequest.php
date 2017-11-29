<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|min:2',
            'sku' => 'required|unique:products|min:4',
            'description' => 'required|min:20',
            'amount' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'nombre es un campo obligatorio',
            'name.min' => 'nombre debe tener minimo 2 caracteres',
            'sku.required' => 'SKU es un campo obligatorio',
            'sku.unique' => 'SKU ya existe en la base de datos',
            'sku.min' => 'SKU debe tener minimo 2 caracteres',
            'description.required' => 'Descripcion es un campo obligatorio',
            'description.min' => 'description debe tener minimo 20 caracteres',
            'amount.required' => 'monto es un campo obligatorio',
            'amount.numeric' => 'monto es un campo de solo valores numericos',
        ];
    }
}
