<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Users;
use Auth;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role == "admin") {
                return redirect('/users');
            } elseif (Auth::user()->role == "user") {
                return redirect('/attendance');
            }
        } else {
            $notification = array(
                'message' => 'Username/Password Salah!',
                'alert-type' => 'error'
            );
        }
        return back()->with($notification);
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
