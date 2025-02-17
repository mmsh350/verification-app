<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    private $redirectTo = 'user.dashboard';

    public function showLoginForm(Request $request)
    {
        // Redirect already authenticated users
        if (Auth::check()) {
            $user = Auth::user();

            // Prevent redirect loops for inactive users
            if (! $user->is_active) {
                Auth::logout();

                return redirect()->route('auth.login')
                    ->with('error', 'Your account has been deactivated.');
            }

            // Redirect to intended URL or dashboard
            return redirect()->route('dashboard');
        }

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

            event(new Registered($user));

            // Automatically log in the user
            Auth::login($user);

            // $user->sendEmailVerificationNotification();

            return redirect()->route('user.dashboard')
                ->with('success', 'Welcome User, Your account was created successfully.');

        } catch (\Exception $e) {
            // Log error
            Log::error('Registration error: '.$e->getMessage());

            return back()
                ->withInput()
                ->with('error', 'Registration failed. Please try again later.');
        }
    }
}
