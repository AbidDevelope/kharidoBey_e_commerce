<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function subCategories(Request $request){
      if($request->ajax() ){
        $subCategory = SubCategory::with('category')->select('*');
        return DataTables::of($subCategory)
        ->addIndexColumn()
        ->addColumn('category_name', function($row){
            return $row->category ? $row->category->name : 'N/A';
        })
        ->editColumn('status', function($subCategory){
          if($subCategory->status == 1) {
            return '<a href="" class=" text-success" >Active</a>';
          }else{
            return '<a href="" class=" text-danger" >InActive</a>';
          }
        })
        ->addColumn('action', function($subCategory){
            $btn = '<a class="viewRow" data-bs-toggle="modal"
            data-bs-target="#viewRow"><i class="bi bi-pencil text-green"></i></a>';
        $btn .= ' <a href="'.route("sub_categories/delete", $subCategory->id).'" class="deleteRow ms-2">
                    <i class="bi bi-trash text-red"></i> </a>';         
        return $btn;
        })
        ->rawColumns(['status','action'])
        ->make(true);
      };
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
                ], 200);
    
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validate->errors(),
                'debug' => $request->all()
            ], 422);
        }
    }

    public function subCategoriesDelete(Request $request, $id){
          $subCategory = SubCategory::find($id);
          if($subCategory)
          {
            $subCategory->delete();
            flash()->success('SubCategory Deleted Successfully!');
            return redirect()->back();
          }
    }
    
}
