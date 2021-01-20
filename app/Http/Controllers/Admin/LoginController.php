<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('admin.auth.login');
    }

    public function store(Request $request) {
        $this->validate($request, [
            "email" => "required",
            "password" => "required"
        ]);

        if( !auth()->attempt($request->only('email', 'password'), $request->remember) ) {
            return back()->with('loginStatusError', __('Incorrect Login Credentials'));
        }

        return redirect()->route('admin-dashboard');
    }
}
