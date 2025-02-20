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
            return '<svg fill="#3bcc1e" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                    <g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" d="M12,2 C17.5228475,2 22,6.4771525 22,12 C22,17.5228475 17.5228475,22 12,22 C6.4771525,22 2,17.5228475 2,12 C2,6.4771525 6.4771525,2 12,2 Z M12,4 C7.581722,4 4,7.581722 4,12 C4,16.418278 7.581722,20 12,20 C16.418278,20 20,16.418278 20,12 C20,7.581722 16.418278,4 12,4 Z M15.2928932,8.29289322 L10,13.5857864 L8.70710678,12.2928932 C8.31658249,11.9023689 7.68341751,11.9023689 7.29289322,12.2928932 C6.90236893,12.6834175 6.90236893,13.3165825 7.29289322,13.7071068 L9.29289322,15.7071068 C9.68341751,16.0976311 10.3165825,16.0976311 10.7071068,15.7071068 L16.7071068,9.70710678 C17.0976311,9.31658249 17.0976311,8.68341751 16.7071068,8.29289322 C16.3165825,7.90236893 15.6834175,7.90236893 15.2928932,8.29289322 Z"/> </g>
                    </svg>';
          }else{
            return '<svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#22258c">
                   <g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                   <g id="SVGRepo_iconCarrier"><path d="M7.95206 16.048L16.0769 7.92297" stroke="#f22121" stroke-width="2"/>
                   <path d="M16.0914 16.0336L7.90884 7.85101" stroke="#f22121" stroke-width="2"/>
                   <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" stroke="#f22121" stroke-width="2"/></g></svg>';
          }
        })
        ->addColumn('action', function($subCategory){
            $btn = '<div class="actions">';
            $btn .= '<a href="'.route("sub_categories/edit", $subCategory->id).'" class="viewRow" data-bs-toggle="modal"
            data-bs-target="#viewRow"><i class="bi bi-pencil text-green"></i></a>';
        $btn .= ' <a href="'.route("sub_categories/delete", $subCategory->id).'" class="deleteRow ms-2">
                    <i class="bi bi-trash text-red"></i> </a>';         
                    $btn .= '<div>';
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

    public function subCategorySubmit(Request $request)
    {
      $existingSubCategory = SubCategory::withTrashed()->where('slug', $request->slug)->first();

      if ($existingSubCategory && $existingSubCategory->trashed()) {
          $validate = Validator::make($request->all(), [
              'category_id' => 'required',
              'name' => 'required',
              'status' => 'required|in:0,1'
          ]);
      } else {
          $validate = Validator::make($request->all(), [
              'category_id' => 'required',
              'name' => 'required',
              'slug' => 'required',
              'status' => 'required|in:0,1'
          ]);
      }

      if ($validate->fails()) {
          return response()->json([
              'status' => false,
              'errors' => $validate->errors(),
          ], 422);
      }

      if ($existingSubCategory && $existingSubCategory->trashed()) {
          $existingSubCategory->restore();
          $existingSubCategory->update([
              'category_id' => $request->category_id,
              'name' => $request->name,
              'status' => $request->status,
          ]);

          return response()->json([
              'status' => true,
              'message' => 'Sub Category Restored and Updated Successfully',
              'redirect_url' => route('sub_categories')
          ], 200);
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
          ], 200);
      }
    } 

    public function subCategoryEdit($id) {
        $subCategories = SubCategory::find($id);
        $categories  = Category::all();
        if($subCategories) {
            return view('admin.sub_categories.sub_categories_edit', compact('subCategories', 'categories'));
        }
    }

    public function subCategoryUpdate(Request $request, $id){
        $validate = Validator::make($request->all(), [
            'category_id'  => 'required',
            'name'  => 'required',
            'slug'  => [ 'required', Rule::unique('sub_categories')->ignore($id)->whereNull('deleted_at')
        ],
        'status'  => 'required|in:0,1' 
    ]);

    if($validate->passes()) {
            $subCategories = SubCategory::find($id);
            $subCategories->category_id = $request->category_id;
            $subCategories->name = $request->name;
            $subCategories->slug = $request->slug;
            $subCategories->status = $request->status;
            $subCategories->save();
         
            flash()->success('SubCategory updated Successfully!');
            return redirect()->route('sub_categories');
    }else{
        flash()->error('something went wrong!');
        return redirect()->back();
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