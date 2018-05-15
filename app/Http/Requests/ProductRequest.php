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
            'title' => 'required|min:2|max:255',
            'regular_price' => 'nullable|numeric',
            'sale_price' => 'nullable|numeric',
            'stock_number' => 'nullable|integer',
            'weight' => 'nullable|numeric',
            'featured_img' => 'nullable|image|max:500'
        ];
    }
}
