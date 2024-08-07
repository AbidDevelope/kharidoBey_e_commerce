<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        }else {
            return response()->json([
                'status' => false,
                'errors' => $validate->errors(),
            ]);
        }
    }
}
