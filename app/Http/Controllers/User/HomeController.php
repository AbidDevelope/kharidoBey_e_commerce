<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::with('subCategories')->get();
        // return $data; 
        return view('user.index', $data);
    }
}
