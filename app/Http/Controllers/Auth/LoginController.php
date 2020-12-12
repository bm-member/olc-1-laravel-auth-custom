<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $creditials = $request->only('email', 'password');

        if(Auth::attempt($creditials)) {
            return redirect('dashboard');
        }

        return back()->with('message', 'User name or password is incorrect');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('login');
    }

}
