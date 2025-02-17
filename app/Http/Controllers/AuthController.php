<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\PasswordResetMail;
use App\Models\PasswordReset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function showLoginForm(Request $request)
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        $credentials['is_active'] = true;

        if (Auth::attempt($credentials, $request->filled('remember'))) {

            $request->session()->regenerate();

            return redirect()->route('user.dashboard');
        }

        return back()
            ->withInput()
            ->with(['error' => 'Invalid credentials or inactive account']);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('auth.login')
                ->with('success', 'Your account was created successfully. Login to proceed');
        } catch (\Exception $e) {

            Log::error('Registration error: ' . $e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Registration failed. Please try again later.');
        }
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => ['required', 'email']]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            Session::flash('error', 'No user found with that email address');
            return redirect()->back();
        }
        $string = Str::random(100);

        $password = PasswordReset::updateOrCreate(['email' => $request->email], [
            'email' => $request->email,
            'token' => $string,
            'created_at' => Carbon::now()
        ]);

        $link = route('auth.password.reset', ['token' => $string]);

        $user_name = $user->name ?? 'User';

        Mail::to($user->email)->send(new PasswordResetMail($link, $user_name));

        Session::flash('success', 'Password reset link sent to the mail provided');

        return redirect()->route('auth.password.request');
    }

    public function showResetPasswordForm(Request $request, $token)
    {


        $reset = PasswordReset::where('token', $token)->first();

        if (!$reset) {
            Session::flash('error', 'Invalid token reset password token');

            return view('auth.reset-password');
        }

        $time = Carbon::now()->diffInMinutes($reset->created_at);

        if ($time > 30) {
            Session::flash('error', 'Token expired please request again');

            return view('auth.reset-password');
        }

        return view('auth.reset-password')->with('token', $token);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => ['required', 'confirmed'],
            'token' => ['required', 'exists:password_reset_tokens,token']
        ]);

        $password = PasswordReset::where('token', $request->token)->first();

        if (!$password) {
            Session::flash('error', 'Reset request not found');

            return redirect()->back();
        }
        $user = User::where('email', $password->email)->first();

        if (!$user) {
            Session::flash('error', 'User not found');

            return redirect()->back();
        }

        $user->password = Hash::make($request->password);

        $user->update();

        $password->delete();

        Session::flash('success', 'Password successfuly reset please login');

        return redirect()->route('auth.login');
    }
}
