<?php

namespace App\Repositories;

use App\Models\Asset;
use App\Interfaces\Repositories\IAssetRepository;
use Illuminate\Support\Facades\Storage;

class AssetRepository implements IAssetRepository
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
        try {
            Storage::delete($toDelete->foto);
        } catch (\Throwable $th) {
        }
        return $toDelete->delete();
    }
    
    public function updateById($params,$id)
    {
        $asset = $this->find($id);
        return $asset->update($params);
    }

    public function getFirst($params)
    {
        $data = $this->asset->where($params)->with('jenisasset:id,nama')->first();
        return $data;
    }
}