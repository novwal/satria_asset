<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
{
    return view('login');
}

public function authenticate(Request $request)
{
    // Simulasi login berhasil
    return redirect()->route('dashboard');
}

public function dashboard()
{
    return view('dashboard');
}
}
