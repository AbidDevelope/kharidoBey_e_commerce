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
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function products(Request $request)
    {
        if ($request->ajax()) {
            $products = Product::with('productImage');

            return DataTables::of($products)
                ->addIndexColumn()
                ->editColumn('status', function ($product) {
                    if ($product->status == 1) {
                        return '<svg fill="#3bcc1e" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                            <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" d="M12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 Z M12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 Z M15.2928932,8.29289322 L10,13.5857864 L8.70710678,12.2928932 C8.31658249,11.9023689 7.68341751,11.9023689 7.29289322,12.2928932 C6.90236893,12.6834175 6.90236893,13.3165825 7.29289322,13.7071068 L9.29289322,15.7071068 C9.68341751,16.0976311 10.3165825,16.0976311 10.7071068,15.7071068 L16.7071068,9.70710678 C17.0976311,9.31658249 17.0976311,8.68341751 16.7071068,8.29289322 C16.3165825,7.90236893 15.6834175,7.90236893 15.2928932,8.29289322 Z"/> </g>
                            </svg>';
                    } else {
                        return '<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#22258c">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                            <g id="SVGRepo_iconCarrier"><path d="M7.95206 16.048L16.0769 7.92297" stroke="#f22121" stroke-width="2"/>
                            <path d="M16.0914 16.0336L7.90884 7.85101" stroke="#f22121" stroke-width="2"/>
                            <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#f22121" stroke-width="2"/></g></svg>';
                    }
                })
                ->addColumn('image', function ($product) {
                    if ($product->productImage && $product->productImage->isNotEmpty()) {
                        $imageUrl = asset('assets/admin/images/products/uploads/' . $product->productImage->first()->image);
                        return '<img src="' . $imageUrl . '" class="media-avatar" alt="Product Image" width="90" height="60" />';
                    } else {
                        $defaultImage = asset('assets/admin/images/products/uploads/default.jpg');
                        return '<img src="' . $defaultImage . '" class="media-avatar" alt="No Image Available" width="90" height="60" />';
                    }                    
                })
                ->addColumn('action', function ($product) {
                    $btn = '<div class="actions">';
                    $btn .= '<a href="#" class="viewProduct" data-id="'.$product->id.'">
                                <i class="bi bi-list text-green"></i>
                             </a>';
                    $btn .= '<a href="#" class="editProduct ms-2" data-id="'.$product->id.'">
                                <i class="bi bi-pencil text-red"></i>
                            </a>';
                    $btn .= '<a href="#" class="deleteEdit ms-2" data-id="'.$product->id.'">
                                <i class="bi bi-trash text-red"></i>
                             </a>';
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['status', 'image', 'action'])
                ->make(true);
        }

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

        if ($product) {
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $index => $file) {
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('assets/admin/images/products/uploads'), $fileName);

                    $product->productImage()->create([
                        'product_id' => $product->id,
                        'image' => $fileName,
                        'is_primary' => $index === 0 ? true : false,
                        'sort_order'  => $index + 1,
                        'status' => '1'
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

    public function viewProducts($id)
    {
        $products = Product::with('productImage')->find($id);
        if($products)
        {
            return view('admin.products.view_products', compact('products'));
        }else{
            flash()->success('Error', 'Product not Found');
            return redirect()->back();
        }
    }

    public function editProducts($id)
    {
        $data['products'] = Product::with(['brand', 'categories', 'subcategories', 'productImage'])->where('id', $id)->first();
        $data['brands'] = Brand::orderBy('name')->get();
        $data['category'] = Category::orderBy('name')->get();
        
        if($data['products']->category_id)
        {
            $data['subcategories'] = SubCategory::where('category_id', $data['products']->category_id)->get();
        }else{
          $data['subcategories'] = [];
        }

        
        $data['existingImages'] = ProductImage::where('product_id', $id)->where('status', '1')->get();
                                
       
        return view('admin.products.edit_products', $data);
    }

    public function updateProducts(ProductRequest $request, $id)
    {

        $data = $request->validated();

        $products = Product::find($id);
        if($products)
        {
            $products->category_id = $data['category_id'];
            $products->sub_category_id = $data['sub_category_id'];
            $products->brand_id = $data['brand_id'];
            $products->title = $data['title'];
            $products->slug = $data['slug'];
            $products->short_description = $data['short_description'];
            $products->long_description = $data['long_description'];
            $products->discount = $data['discount'];
            $products->selling_price = $data['selling_price'];
            $products->old_price = $data['old_price'];
            $products->compare_price = $data['compare_price'];
            $products->is_featured = $data['is_featured'];
            $products->sku = $data['sku'];
            $products->barcode = $data['barcode'];
            $products->track_qty = $data['track_qty'];
            $products->qty = $data['qty'];
            $products->stock = $data['stock'];
            $products->status = $data['status'];
            $products->save();

            if($request->hasFile('image'))
            {
                foreach($request->file('image') as $index => $file)
               {
                $fileName = time(). '_' .$file->getClientOriginalExtension();
                $file->move(public_path('assets/admin/images/products/uploads'), $fileName);
               }

               $maxShortOrder = $products->productImage()->max('sort_order');

               $products->productImage()->create([
                'product_id' => $products->id,
                'image' => $fileName,
                'is_primary' => '0',
                'sort_order' => $maxShortOrder + 1,
                'status' => '1'
               ]);

            }
        }

        flash()->success('Product Updated Successfully');  
        return response()->json([
            'status' => true,
            'message' => 'Product Updated Successfully',
            'redirect_url' => route('products')
        ], 200);
    } 


    public function deleteImage($id)
    {
        $productImage = ProductImage::find($id);
        if(!$productImage)
        {
            return response()->json([
                'status' => false,
                'message' => 'Product Image Not Found'
            ]); 
        }

        $path = public_path('assets/admin/images/products/uploads/'. $productImage->image);
        if(\File::exists($path))
        {
            \File::delete($path);
        }
        

        $productImage->update([
            'status' => '0'
        ]);
    

        return response()->json([
            'status' => true,
            'message'  => 'Product Image Deleted Successfully',
            'product image id' => $productImage->id,
        ]);
    }

    public function deleteProducts($id)
    {
       $products = Product::with('productImage')->find($id);
  
       if($products)
       {
         foreach($products->productImage as $images)
        {
           $path = public_path('assets/admin/images/products/uploads/'. $images->image);
           if(\File::exists($path))
           {
              \File::delete($path);
           }else{
            flash()->error('file does not exit');
             return redirect()->back();
           }
        }

        $products->productImage()->delete();
        $products->delete();
         
        flash()->success('Product Deleted Successfully');
        return redirect()->back(); 
       }else{
        flash()->error('Product Not Found');
        return redirect()->back();
       }

    }

}