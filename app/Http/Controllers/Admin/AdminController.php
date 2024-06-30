<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRegisterRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        session()->flash('success', 'You Have Successfully Register');
        return redirect('admin/login');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function AdminLogin(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            "email" => 'required|max:255|email',
            "password" => 'required'
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else {
            $admin = Admin::where('email', $request->email)->first();
            // dd($admin);
            if (!$admin) {
                session()->flash('error', 'Email is not registered!');
                return redirect()->back()->withInput();
            }else {
                return "Welcome to Dashboard";
            }
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
