<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    // nanti bisa ganti dengan autentikasi sebenarnya
    $email = $request->input('email');
    $password = $request->input('password');

    if ($email === 'admin@smarthelmet.com' && $password === '123456') {
        return 'Login sukses!';
    } else {
        return back()->withErrors(['email' => 'Email atau password salah.']);
    }
})->name('login.submit');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
