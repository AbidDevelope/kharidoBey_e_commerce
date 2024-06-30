<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRegisterRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function Register()
    {
        return view('admin.auth.register');
    }

    public function AdminRegister(AdminRegisterRequest $request)
    {
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

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $admin = Admin::where('email', $request->email)->first();

            if (!$admin) {
                session()->flash('error', 'Email is not registered!');
                return redirect()->back()->withInput();
            } else {
                $credentials = $request->only('email', 'password');

                if (Auth::guard('admin')->attempt($credentials)) {
                    $adminId = Auth::guard('admin')->user()->id;
                    // dd($adminId);
                    $request->session()->put('id', $adminId);
                    return redirect()->route('dashboard');
                } else {
                    session()->flash('error', 'Credentials do not match.');
                    return redirect()->back();
                }
            }
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();

            session()->flash('success', 'You Have Successfully Logout.');
            return redirect()->route('admin.login.get');
        }
    }
}
