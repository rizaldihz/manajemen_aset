<?php

namespace App\Services;

use App\Repositories\AssetRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
// use InvalidArgumentException;

class AssetService
{
    protected $assetRepository;
    public function __construct(AssetRepository $assetRepository)
    {
        $this->assetRepository = $assetRepository;
    }
    public function saveData($data)
    {
        $postData = NULL;
        if($data->has('foto')){
            $image = $data->file('foto');
            $name = Str::slug($data->input('nama')).'_'.time();
            $imgName = $name.'.'.$image->getClientOriginalExtension();
            $path = Storage::putFileAs('public/images', $data->file('foto'), $imgName);
            $postData = [
                'kode_aset' => $data->post('kode_aset'),
                'nama' => $data->post('nama'),
                'lokasi' => $data->post('lokasi'),
                'stok' => $data->post('stok'),
                'jenis_asset_id' => $data->post('jenis_asset'),
                'status' => 0,
                'foto' => $path
            ];
        }
        return $this->assetRepository->create($postData);
    }
    public function getAll()
    {
        return $this->assetRepository->get();
    }
    public function findById($params)
    {
        return $this->assetRepository->find($params);
    }
    public function deleteById($params)
    {
        return $this->assetRepository->delete($params);
    }
    public function updateById($params,$id)
    {
        return $this->assetRepository->updateById($params,$id);
    }
    public function getFromJenis($request)
    {
        $assets = $this->assetRepository->get([['jenis_asset_id','=',$request->post('id')]]);
        if($assets->count())
            foreach($assets as $asset)
                $asset->url = url('asset/'.$asset->kode_aset);
        return $assets;
    }
    public function getFirst($data)
    {
        $asset = $this->assetRepository->getFirst([['kode_aset','=',$data]]);
        if($asset) $asset->imgurl = url(Storage::url($asset->foto));
        return $asset;
    }
}