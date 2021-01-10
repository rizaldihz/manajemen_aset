<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

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
}
