<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class pageController extends Controller
{
    public function adminlog()
    {
        return view('login');
    }

    public function signin()
    {
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = request()->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect('administrator');
            // dd(auth()->user());
        } else {
            return redirect('login')->with('error', 'invalid login Detail');
        }
    }

    public function signout()
    {
        Auth::logout();
        return redirect('login');
    }
}
