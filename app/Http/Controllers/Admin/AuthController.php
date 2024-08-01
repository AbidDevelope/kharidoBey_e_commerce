<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;

class AuthController extends Controller
{
    public function Register()
    {
        return view('admin.auth.register');
    }

    public function AdminRegister(AdminRegisterRequest $request)
    {
        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password'  => Hash::make($request->password),
        ]);
        flash()->success('You Have Successfully Registered.');
        return redirect('admin/login');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function AdminLogin(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "email" => 'required|max:255|email',
            "password" => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $admin = Admin::where('email', $request->email)->first();

            if (!$admin) {
                flash()->error('Email is not registered!');
                return redirect()->back()->withInput();
            } else {
                $credentials = $request->only('email', 'password');

                if (Auth::guard('admin')->attempt($credentials)) {
                    $adminId = Auth::guard('admin')->user()->id;
                    $request->session()->put('id', $adminId);
                    flash()->success('You have Successfully login.');
                    return redirect()->route('dashboard');
                } else {
                    flash()->error('Credentials do not match.');
                    return redirect()->back();
                }
            }
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        if(Auth::guard('admin')->check())
        {
            $admin = Auth::guard('admin')->user();
            return view('admin.profile.profile', compact('admin'));
        }else{
          return redirect()->back();
        }
    }

    public function profileUpdate(Request $request)
    {
       if(Auth::guard('admin')->check())
       {
        $adminId = Auth::guard('admin')->user()->id;
        $admin = Admin::find($adminId);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->mobile = $request->mobile;
        $admin->save();

        flash()->success('Admin Profile Updated Successfully.');
        return redirect()->back();
       }else{
        flash()->error('Admin Not Found');
        return redirect()->back();
       }
    }

    public function showChangePasswordForm() {
        return view('admin.auth.changePassword');
    }

    public function changePassword(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            flash()->error('Something went wrong.');
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $admin = Auth::guard('admin')->user();

            if (!Hash::check($request->old_password, $admin->password)) {
                return redirect()->back()->withErrors(['old_password' => 'The current password is incorrect']);
            } else {
                $admin->password = Hash::make($request->new_password);
                $admin->save();
                flash()->success('Password Successfully Changed.');
                return redirect()->route('dashboard');
            }
        }
    }

    public function logout(Request $request)
    {
        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
            $request->session()->invalidate();

            flash()->success('You Have Successfully Logout.');
            return redirect()->route('admin.login.get');
        }
    }
}
