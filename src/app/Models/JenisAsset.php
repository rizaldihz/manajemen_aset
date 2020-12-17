<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;

class JenisAsset extends Model
{
    use HasFactory;
    use Uuid;
    protected $table = 'jenis_asset';
    protected $fillable = ['nama'];
    public $incrementing = false;
    public function asset()
    {
        return $this->hasMany('App\Models\Asset', 'jenis_asset_id');
    }
}
