<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;
    use Uuid;
    protected $table = 'users';
    public $incrementing = false;
    protected $fillable = [
        'nama',
        'unit_kerja',
        'nik',
        'tipe',
        'password',
    ];
    public function peminjaman()
    {
        return $this->hasMany('App\Models\Peminjaman', 'user_id');
    }
    public function passwordMatch(string $password):bool
    {
        return Hash::check($password, $this->password);
    }
}
