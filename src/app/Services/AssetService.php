<?php

namespace App\Services;

use App\Interfaces\Repositories\IAssetRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Services\PeminjamanService;
// use InvalidArgumentException;

class AssetService
{
    protected $assetRepository, $peminjamanService;
    public function __construct(IAssetRepository $assetRepository)
    {
        $this->assetRepository = $assetRepository;
    }
    public function saveData($data)
    {
        $path = '';
        if($data->has('foto')){
            $path = $this->storeImage($data->file('foto'),$data->post('nama'));
        }
        $postData = [
            'kode_aset' => $data->post('kode_aset'),
            'nama' => $data->post('nama'),
            'lokasi' => $data->post('lokasi'),
            'stok' => $data->post('stok'),
            'jenis_asset_id' => $data->post('jenis_asset'),
            'status' => 0,
            'foto' => $path
        ];
        return $this->assetRepository->create($postData);
    }
    protected function storeImage($foto,$namaFile)
    {
        $image = $foto;
        $name = Str::slug($namaFile).'_'.time();
        $imageName = $namaFile.'.'.$image->getClientOriginalExtension();
        return Storage::putFileAs('public/images', $foto, $imageName);
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