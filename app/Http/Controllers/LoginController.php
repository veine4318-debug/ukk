<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index');
    }

    public function login(Request $request) {
    // Validasi Input
    $request->validate([
        'name'    => 'required',
        'password' => 'required',
    ]);

    // Periksa Kredensial
    if (Auth::attempt([
        'name'    => $request->name,
        'password' => $request->password,
    ])) {
        // Kalau Kredensial Cocok Arahkan ke Halaman Pengumuman
        return redirect('/');
    }

    return back()->withErrors([
        'name' => 'name atau password salah. Silahkan coba lagi.'
    ]);
}
    
}
