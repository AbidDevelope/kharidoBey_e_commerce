<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductImage;
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
        // dd($request->all());

        $data = $request->validated();

        $product = new Product();
        $product->category_id = $data['category_id'];
        $product->sub_category_id = $data['sub_category_id'];
        $product->brand_id = $data['brand_id'];
        $product->title = $data['title'];
        $product->slug = $data['slug'];
        $product->short_description = $data['short_description'];
        $product->long_description = $data['long_description'];
        $product->discount = $data['discount'];
        $product->selling_price = $data['selling_price'];
        $product->old_price = $data['old_price'];
        $product->compare_price = $data['compare_price'];
        $product->is_featured = $data['is_featured'];
        $product->sku = $data['sku'];
        $product->barcode = $data['barcode'];
        $product->track_qty = $data['track_qty'];
        $product->qty = $data['qty'];
        $product->stock = $data['stock'];
        $product->status = $data['status'];
        $product->save();

        if($product) {
            if($request->hasFile('image'))
            {
                foreach($request->file('image') as $index => $file)
                {
                    $fileName = time().'_'.$file->getClientOriginalName();
                    $file->move(public_path('assets/admin/images/products/uploads'), $fileName );
                    
                    $product->productImage()->create([
                        'product_id' => $product->id,
                        'image' => $fileName,
                        'is_primary' => $index === 0 ? true : false,
                        'sort_order'  => $index + 1,
                    ]);
                }   
            }
        }

        flash()->success('Product Added Successfully!');
        return response()->json([
            'status' => true,
            'message' => "Product Added Successfully",
            'redirect_url' => route('products')
        ], 200);
    }

    public function tempImageUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('assets/admin/images/products/uploads/temp'), $filename);

            return response()->json([
                'status' => true,
                'file' => $filename
            ]);
        }

        return response()->json([
            'status' => false,
        ]);
    }

    public function getSubcategory($id)
    {
        $subcategory = SubCategory::where('category_id', $id)->get();

        if ($subcategory) {
            return response()->json([
                'status' => true,
                'subcategories' => $subcategory
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'No subcategories found'
            ]);
        }
    }
}