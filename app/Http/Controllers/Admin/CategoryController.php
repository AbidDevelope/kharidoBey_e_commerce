<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::all();
        return view('admin.categories.categories', compact('categories'));
    }

    public function CategoryForm()
    {
        return view('admin.categories.add-categories');
    }

    public function submitCategory(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => [
                'required',
                Rule::unique('categories')->whereNull('deleted_at')
            ],
            'status' => 'required|in:0,1'
        ]);

        if ($validate->passes()) {
            $category = Category::withTrashed()->where('slug', $request->slug)->first();
            if ($category && $category->trashed()) {
                $category->restore();
                $category->update([
                    'name' => $request->name,
                    'status' => $request->status,
                ]);
            } else {
                $category = new Category();
                $category->name = $request->name;
                $category->slug = $request->slug;
                $category->status = $request->status;
                $category->save();
            }

            return response()->json([
                'status' => true,
                'message' => 'Category Added Successfully.',
                'redirect_url' => route('categories'),
            ]);
        } else {
            return response()->json([
                'status' => true,
                'errors' => $validate->errors(), 
            ], 422);
        }
    }

    public function categoryEdit($id) {
        $categories = Category::find($id);
        return view('admin.categories.edit-categories', compact('categories'));
    }

    public function categoryUpdate(Request $request, $id) {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => [ 'required',
                   Rule::unique('categories')->ignore($id)->whereNull('deleted_at')
        ],
            'status' => 'required|in:0,1'
        ]); 

        if($validate->passes()){ 
            $categories = Category::find($id);
            $categories->name = $request->name;
            $categories->slug = $request->slug;
            $categories->status = $request->status;
            $categories->save();
            
            flash()->success('Category Updated Successfully!');
            return redirect()->route('categories');
        }else{
            flash()->success('validation is failed!');
            return redirect()->back();
        };
    }


    public function categoryDelete($id)
    {
        $categories = Category::find($id);

        $categories->delete();

        flash()->success('Category Deleted Successfully.');
        return redirect()->back();
    }
}
