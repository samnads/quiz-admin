<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('login', []);
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
    public function home(Request $request)
    {
        return redirect()->route('admin.dashboard');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json([
                'status' => 'success',
                'message' => 'Successfully Logged In !',
                'redirect' => route('admin.dashboard')
            ], 200, [], JSON_PRETTY_PRINT);
        }
        return response()->json([
            'status' => 'failed',
            'message' => 'Invalid Username or Password !',
        ]);
    }
}
