<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm() 
    {
        return view('admin.auth.forgot-password');
    }

    public function submitForgotPasswordForm(Request $request)
    {
        $validate = Validator::make($request->all(), [
              'email' => 'required|email|exists:admins',
        ]);

        if($validate->failed())
        {
            flash()->success('Admin not exists');
        }else{
            $email = $request->input('email');

            $adminEmail = Admin::where('email', $email)->first();
            dd($adminEmail);

            $token = Str::random(50);
        }
    }
}
