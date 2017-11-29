<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Product;

class UpdateProductRequest extends FormRequest
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
        $product_validation = Product::find($this->product);
        return [
            'name' => 'required|min:2',
            'sku' => 'required|min:4|unique:products,sku,'.$product_validation->id,
            'description' => 'required|min:20',
            'amount' => 'required|numeric'
        ];
    }
}
