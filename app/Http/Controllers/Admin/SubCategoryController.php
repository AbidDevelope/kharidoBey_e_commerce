<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Category;

class SubCategoryController extends Controller
{
    public function subCategories(){
        return view('admin.sub_categories.sub_categories');
    }

    public function addSubCategory() {
        $category = Category::orderBy('name')->get();
        return view('admin.sub_categories.add_sub_categories', compact('category'));
    }

    public function subCategorySubmit(Request $request) {

        $validate = Validator::make($request->all(), [
            'category_id' => 'required',
            'name' => 'required',
            'slug' => [
                'required',
                Rule::unique('sub_categories')->whereNull('deleted_at')
            ],
            'status' => 'required|in:0,1'
        ]);
    
        if($validate->passes()) {
            $subCategory = SubCategory::withTrashed()->where('slug', $request->slug)->first();
            dd($subCategory);
            if($subCategory) {
                return response()->json([
                    'status' => false,
                    'message' => 'Sub Category already exists.',
                ], 422); 
            } else {
                $subCategory = new SubCategory();
                $subCategory->category_id = $request->category_id;
                $subCategory->name = $request->name;
                $subCategory->slug = $request->slug;
                $subCategory->status = $request->status;
                $subCategory->save();
    
                return response()->json([
                    'status' => true,
                    'message' => 'Sub Category Added Successfully',
                    'redirect_url' => route('sub_categories')
                ]);
            }
    
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validate->errors(),
            ], 422);
        }
    }
    
}
