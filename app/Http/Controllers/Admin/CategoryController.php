<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function categories(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::select('*');
            return DataTables::of($categories)
                ->addIndexColumn()
                ->addColumn('action', function($category){
                    $btn = '<a href="'.route('categories/edit', $category->id).'" class="viewRow" data-bs-toggle="modal"
                                data-bs-target="#viewRow"><i class="bi bi-pencil text-green"></i></a>';
                    $btn .= ' <a href="'.route("categories/delete", $category->id).'" class="deleteRow ms-2">
                                <i class="bi bi-trash text-red"></i> </a>';         
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.categories.categories');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
