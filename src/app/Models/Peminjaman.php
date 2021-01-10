<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Peminjaman extends Model
{
    use HasFactory;
    use Uuid;
    protected $table = 'peminjaman';
    protected $fillable = ['kode_peminjaman','lokasi','status','asset_id','user_id','tanggal_pinjam','tanggal_kembali'];
    public $incrementing = false;
    public function asset()
    {
        return $this->belongsTo('App\Models\Asset', 'asset_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
