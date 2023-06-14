<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\SendMailreset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function showDashboard()
    {
        return view('admin.dashboard.users');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8|string'
        ]);
        $credentials = $request->only('email', 'password');
        $token = Auth::attempt($credentials);
        if (!$token) {
            return redirect()->back()->with('error','invalid email or password');
        }
        Auth::user()->update(['status' => 'online']);
        $user = Auth::user();
        return redirect()->route('users')->with('name',$user->name);
    }
   
    
    
    
}