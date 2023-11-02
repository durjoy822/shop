<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'brand_id' => 'required',
            'unit_id' => 'required',
            'short_description' => 'nullable|max:25000',
            'long_description' => 'nullable|max:25000',
            'name' => 'required',
            'code' => 'required',
            'regular_price' => 'required|numeric', // Example: Ensure regular_price is a numeric value
            'selling_price' => 'required|numeric', // Example: Ensure selling_price is a numeric value
            'stock_amount' => 'required|integer', // Example: Ensure stock_amount is an integer value
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'Category field is required.',
            'sub_category_id.required' => 'Sub category field is required.',
            'brand_id.required' => 'Brand field is required.',
            'unit_id.required' => 'Unit field is required.',
            'name.required' => 'Name field is required.',
            'code.required' => 'Code field is required.',
            'regular_price.required' => 'Regular Price field is required.',
            'selling_price.required' => 'Selling Price field is required.',
            'stock_amount.required' => 'Stock Amount field is required.',
            'regular_price.numeric' => 'Regular Price must be a numeric value.',
            'selling_price.numeric' => 'Selling Price must be a numeric value.',
            'stock_amount.integer' => 'Stock Amount must be an integer value.',
        ];
    }
}