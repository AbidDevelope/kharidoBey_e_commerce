<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Brand;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    public function brands(Request $request) {
        if ($request->ajax()) {
            $brands = Brand::select('*');
            return DataTables::of($brands)
                ->addIndexColumn()
                ->editColumn('status', function($brand) {
                    if ($brand->status == 1) {
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
                ->addColumn('action', function($brand){
                    $btn = '<a href="'.route('brand/edit', $brand->id).'" class="viewRow" data-bs-toggle="modal"
                                 data-bs-target="#viewRow"><i class="bi bi-pencil text-green"></i></a>';
                    $btn .= ' <a href="'.route("brand/delete", $brand->id).'" class="deleteRow ms-2">
                                 <i class="bi bi-trash text-red"></i> </a>';         
                    return $btn;
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }
        return view('admin.brands.brands');
    }

    public function addBrands() {
        return view('admin.brands.add_brands');
    }

    public function brandSubmit(Request $request) {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'slug' => [
                'required', Rule::unique('brands')->whereNull('deleted_at')
            ],
            'status'  => 'required|in:0,1'
        ]);

        if($validate->fails()){
            return response()->json([
                'status' => false,
                'errors' => $validate->errors(),
            ], 422);
        }else{

            $brands = new Brand();
            $brands->name = $request->name;
            $brands->slug = $request->slug;
            $brands->status = $request->status;
            $brands->save();
            
            return response()->json([
                'status'  => true,
                'message' => 'Brand Added Successfully!',
                'redirect_url' => route('brands'),
            ], 200);
        }
    }

    public function brandEdit($id) {
        $brand = Brand::find($id);
        return view('admin.brands.edit_brands', compact('brand'));
    }

    public function updateBrand(Request $request, $id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            return response()->json([
                'status' => false,
                'message' => 'Brand not found', 
            ], 404);
        }

        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => [
                'required', 
                Rule::unique('brands')->ignore($id)->whereNull('deleted_at') 
            ],
            'status' => 'required|in:0,1'
        ]);
        
        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validate->errors(),
            ], 422);
        }

        $brand->name = $request->name;
        $brand->slug = $request->slug;
        $brand->status = $request->status;
        $brand->save();

        return response()->json([
            'status' => true,
            'message' => 'Brand updated successfully!',
            'redirect_url' => route('brands'),
        ], 200);
    }


    public function brandDelete($id){
        $brand = Brand::find($id);
        if($brand) {
            $brand->delete();

            flash()->success('Brand Deleted Successfully!');
            return redirect()->back();
        }
    }
    
}