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
            'category' => 'required|integer',
            'subcategory' => 'required|integer',
            'brand' => 'required|integer',
            
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string|max:65535', 
    
            'discount' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'old_price' => 'required|numeric|min:0',
            'compare_price' => 'required|numeric|min:0',
            
            'is_featured' => 'required|boolean',
            'sku' => 'required|string|max:255',
            'barcode' => 'required|string|max:255',
            'track_qty' => 'required|boolean', 
            'qty' => 'required|integer|min:0', 
            
            'stock' => 'required|integer|min:0',
            'status' => 'required|boolean',
        ];
    }
    
}