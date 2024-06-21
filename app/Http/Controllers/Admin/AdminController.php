<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRegisterRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Register()
    {
        return view('admin.auth.register');
    }

    public function AdminRegister(AdminRegisterRequest $request){
        // dd($request->all());
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password'  => Hash::make($request->password),
        ]);

        return redirect('admin/login');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
