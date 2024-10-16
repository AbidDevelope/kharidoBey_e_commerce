<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;

class ProductController extends Controller
{
    public function products()
    {
        return view('admin.products.products');
    }

    public function productAdd()
    {
        $brands = Brand::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();

        return view('admin.products.add_product', compact('brands', 'categories'));
    }

    public function ProductSubmit(ProductRequest $request)
    {
        dd('OKKK');

        $validatedData = $request->validate();

        $product = new Product();
        $product->category_id = $validatedData['category_id'];
        $product->sub_category_id = $validatedData['sub_category_id'];
        $product->brand_id = $validatedData['brand_id'];
        $product->title = $validatedData['title'];
        $product->slug = $validatedData['slug'];
        $product->short_description = $validatedData['short_description'];
        $product->long_description = $validatedData['long_description'];
        $product->discount = $validatedData['discount'];
        $product->selling_price = $validatedData['selling_price'];
        $product->old_price = $validatedData['old_price'];
        $product->compare_price = $validatedData['compare_price'];
        $product->is_featured = $validatedData['is_featured'];
        $product->sku = $validatedData['sku'];
        $product->barcode = $validatedData['barcode'];
        $product->track_qty = $validatedData['track_qty'];
        $product->qty = $validatedData['qty'];
        $product->stock = $validatedData['stock'];
        $product->status = $validatedData['status'];

        $product->save();

        flash()->success('Product Added Successfully!');
        return redirect()->route('products');
    }

    public function getSubcategory($id)
    {
        $subcategory = SubCategory::where('category_id', $id)->get();
    
        if($subcategory){
            return response()->json([
                'status' => true,
                'subcategories' => $subcategory
            ]);   
        }else{
          return response()->json([
            'status'=> false,
            'message' => 'No subcategories found' 
          ]);
        }
    }
}