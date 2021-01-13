<?php

namespace App\Repositories;

use App\Models\Asset;
use Illuminate\Support\Facades\Storage;

class AssetRepository
{
    protected $asset;

    public function __construct(Asset $asset)
    {
        $this->asset = $asset;
    }

    public function find($id)
    {
        return $this->asset->find($id);
    }

    public function create($params)
    {
        return $this->asset->create($params);
    }

    public function get($params=NULL)
    {
        if($params)
            return $this->asset->where($params)->orderBy('created_at', 'DESC')->with('jenisasset:id,nama')->get();
        return $this->asset->orderBy('created_at', 'DESC')->with('jenisasset:id,nama')->get();
    }

    public function delete($id)
    {
        $toDelete = $this->asset->find($id);
        Storage::delete($toDelete->foto);
        return $toDelete->delete();
    }
    
    public function updateById($params,$id)
    {
        $asset = $this->find($id);
        return $asset->update($params);
    }
}