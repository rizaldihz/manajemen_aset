<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class Asset extends Model
{
    use HasFactory;
    use Uuid;
    protected $table = 'asset';
    protected $fillable = ['kode_aset','nama','lokasi','status','stok','jenis_asset_id','foto'];
    protected $keyType = 'string';
    public $incrementing = false;
    public function jenisasset()
    {
        return $this->belongsTo('App\Models\JenisAsset', 'jenis_asset_id');
    }
    public function peminjaman()
    {
        return $this->hasMany('App\Models\Peminjaman', 'asset_id');
    }
    public function getFotoPath()
    {
        return \Illuminate\Support\Facades\Storage::url($this->foto);
    }
}
