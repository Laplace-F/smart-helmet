<?php

use Illuminate\Http\Request;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Hash;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Ambil data user dari tabel user_login
    $user = UserLogin::where('email', $request->email)->first();

    // Cek apakah user ditemukan dan password cocok
    if ($user && $user->password === $request->password) {
        // Jika password di database belum di-hash, gunakan cara ini
        session(['user' => $user]);
        return redirect()->route('home')->with('success', 'Login berhasil');
    }

    // Jika password disimpan dalam bentuk hash bcrypt, pakai ini:
    // if ($user && Hash::check($request->password, $user->password)) {
    //     session(['user' => $user]);
    //     return redirect()->route('home')->with('success', 'Login berhasil');
    // }

    return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
})->name('login.submit');

Route::get('/', function () {
    $user = session('user');
    return view('welcome', compact('user'));
})->name('home');

Route::get('/logout', function () {
    session()->forget('user');
    return redirect()->route('login')->with('success', 'Anda telah logout.');
})->name('logout');
