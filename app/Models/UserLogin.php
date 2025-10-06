<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    protected $table = 'user_login'; // Nama tabel kamu
    protected $fillable = ['email', 'password', 'name'];
    public $timestamps = false; // ubah ke true jika tabel punya created_at & updated_at
}
