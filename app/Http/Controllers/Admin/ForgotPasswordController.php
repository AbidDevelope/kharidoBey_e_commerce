<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Admin;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm() 
    {
        return view('admin.auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $validate = Validator::make($request->all(), [
              'email' => 'required|email|exists:admins,email'
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }else{
            $email = $request->input('email');

            $adminEmail = Admin::where('email', $email)->first();
            if(!$adminEmail)
            {
                return redirect()->back()->withErrors($validate)->withInput();
            }else{
                $token = Str::random(50);
                // dd($token);
                DB::table('password_reset_tokens')->insert([
                    'email' => $email,
                    'token' => $token,
                    'created_at' => Carbon::now(),
                ]);

                $action_link = route('show.reset.form', ['token' => $token, 'email' => $request->email]);
                $body = "We received a request to reset the password on your account " . $request->email . " Click the button below so it will redirects to the password reset page.";
                Mail::send('admin.auth.forgot-password-link', ['action_link'=>$action_link, 'body'=> $body], function($message) use ($request){
                    $message->from('abidmohd763@gmail', 'forgot password');
                    $message->to($request->email, 'Your name')->subject('Reset Password')
                    ->attach(public_path('assets/admin/images/icon/kharidoBey.png'), [
                        'as' => 'logo.png',
                        'mime' => 'image/png'
                    ]);
                });

                flash()->success('link send on your email! Please check');
                return redirect()->back()->withErrors($validate)->withInput();
                }

        }
    }

    public function showResetForm()
    {
        return view('admin.auth.reset-form');
    }
}
