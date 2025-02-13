<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
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
            $existsAdmin = Admin::where('email', $email)->first();
            if(!$existsAdmin)
            {
                return redirect()->back()->withErrors($validate)->withInput();
            }else{
                $token = Str::random(50);

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

    public function showResetForm(Request $request, $token = null)
    {
        return view('admin.auth.reset-form')->with(['token' => $token, 'email' => $request->email]);
    }

    public function resetPassword(Request $request)
    {
       $validate = Validator::make($request->all(), [
        'email' => 'required|email|exists:admins,email',
        'password' => 'min:8',
        'password_confirmation' => 'required_with:password|same:password|min:8'
        ]);

        if($validate->fails())
        {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $check_token = DB::table('password_reset_tokens')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if(!$check_token)
        {
            flash()->error('invalid token');
            return redirect()->back();
        }else{
            Admin::where('email', $request->email)->update([
                'password' => Hash::make($request->password),
                'email_verified_at' => now()
            ]);

            DB::table('password_reset_tokens')->where([
                'email' => $request->email
            ])->delete(); 

            flash()->success('Your password has been change! You can login.');
            return redirect()->route('admin.login.get');
        }
    }
}
