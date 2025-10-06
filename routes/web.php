<?php

use Illuminate\Http\Request;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = UserLogin::where('email', $request->email)->first();

    if ($user && $user->password === $request->password) {
        session(['user' => $user]);
        return redirect()->route('home')->with('success', 'Login berhasil');
    }

    return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
})->name('login.submit');

Route::get('/home', function () {
    $user = session('user');
    if (!$user) return redirect()->route('login');

    // Jika tabel/kolom belum ada, ganti dengan 0
    $jumlahPekerja = 0;
    $online = 0;
    $insidenHariIni = 0;

    return view('home', compact('user', 'jumlahPekerja', 'online', 'insidenHariIni'));
})->name('home');

Route::get('/logout', function () {
    session()->forget('user');
    return redirect()->route('login')->with('success', 'Anda telah logout.');
})->name('logout');
