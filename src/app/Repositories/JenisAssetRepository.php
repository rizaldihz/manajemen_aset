<?php

namespace App\Repositories;

use App\Models\JenisAsset;

class JenisAssetRepository
{
    protected $jenisAsset;
    public function __construct(JenisAsset $jenisAsset)
    {
        $this->jenisAsset = $jenisAsset;
    }
    public function find($id)
    {
        return $this->jenisAsset->find($id);
    }
    public function create($params)
    {
        return $this->jenisAsset->create($params);
    }
    public function get($params=NULL)
    {
        if($params){
            return $this->jenisAsset->where($params)->orderBy('created_at', 'DESC')->get();
        }
        return $this->jenisAsset->orderBy('created_at', 'DESC')->get();
    }
}