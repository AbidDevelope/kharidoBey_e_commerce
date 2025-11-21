<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::with('subCategories')->get();
        $data['products'] = Product::with('primaryImage')->get();
        // return $data; 
        return view('user.index', $data);
    }
}
