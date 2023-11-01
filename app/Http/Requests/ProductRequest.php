<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id'=>'required',
            'sub_category_id'=>'required',
            'brand_id'=>'required',
            'unit_id'=>'required',
            'short_description' => 'nullable|max:25000',
            'long_description' => 'nullable|max:25000',
            'long_description' => 'nullable|max:25000',
            'name' => 'required',
            'code' => 'required',
            'regular_price' => 'required',
            'selling_price' => 'required',
            'stock_amount' => 'required',
        ];
    }
}