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
            'category_id' => 'required|integer',
            'sub_category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string|max:65535', 
    
            'discount' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'old_price' => 'required|numeric|min:0',
            'compare_price' => 'required|numeric|min:0',
            
            'is_featured' => 'required',
            'sku' => 'required|string|max:255',
            'barcode' => 'required|string|max:255',
            'track_qty' => 'required', 
            'qty' => 'required|integer|min:0', 
            
            'stock' => 'required',
            'status' => 'required|boolean',

            'image' => 'required|array',
            'image.*' => 'image|mimes:jpeg,jpg,png,gif|max:2048'
        ];
    }
    
}