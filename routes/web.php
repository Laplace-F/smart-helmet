<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');

// proses login (POST)
Route::post('/login', function (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'admin@example.com' && $password === '123456') {
        return redirect('/')->with('success', 'Login berhasil');
    }

    return back()->withErrors(['email' => 'Email atau password salah']);
})->name('login.submit');
