<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function viewLogin() {
        return view('auth.login');
    }

    public function login(Request $req)
    {
        $this->validate($req, [
           'email' => 'required|email',
           'password' => 'required|string'
        ]);

        if (Auth::attempt(['email' => $req->email, 'password' => $req->password]))
        {
            $req->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->back()->with('error', 'Email atau password salah');
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/');
    }
}
