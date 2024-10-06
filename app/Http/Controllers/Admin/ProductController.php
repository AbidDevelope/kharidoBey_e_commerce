<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products() {
        return view('admin.products.products');
    }

    public function productAdd()
    {
        return view('admin.products.add_product');
    }
}