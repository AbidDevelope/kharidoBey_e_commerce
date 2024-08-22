<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    public function CategoryForm()
    {
        return view('admin.categories.add-categories');
    }

    public function submitCategory(Request $request) {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'slug'  => 'required|unique:categories',
            'status' => 'required'
        ]);

        if($validate->passes())
        {
           $category = new Category();
           $category->name = $request->name;
           $category->slug = $request->slug;
           $category->status = $request->status;
           $category->save();

           flash()->success('Category Added Successfully.');
           return redirect()->back();
           
           return response()->json([
                'status' => true,
                'message' => 'Category Added Successfully.',
           ]);
        }else {
            return response()->json([
                'status' => false,
                'errors' => $validate->errors(),
            ]);
        }
    }
}
