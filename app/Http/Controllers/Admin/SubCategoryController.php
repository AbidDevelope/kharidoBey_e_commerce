<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function subCategories(){
        return view('admin.sub_categories.sub_categories');
    }

    public function addSubCategory() {
        return view('admin.sub_categories.add_sub_categories');
    }
}
