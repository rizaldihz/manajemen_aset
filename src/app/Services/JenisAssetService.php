<?php

namespace App\Services;

use App\Interfaces\Repositories\IJenisAssetRepository;
use App\Interfaces\Repositories\IAssetRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
// use InvalidArgumentException;

class JenisAssetService
{
    protected $jenisAssetRepository, $assetRepository;
    public function __construct(IJenisAssetRepository $jenisAssetRepository, IAssetRepository $assetRepository)
    {
        $this->jenisAssetRepository = $jenisAssetRepository;
        $this->assetRepository = $assetRepository;
    }
    public function saveData($data)
    {
        $result = $this->jenisAssetRepository->create($data);

        return $result;
    }
    public function getAll()
    {
        return $this->jenisAssetRepository->get();
    }
    public function getReport()
    {
        $results = $this->jenisAssetRepository->get();
        if($results->count())
            foreach($results as $result){
                $result->total = $result->asset->count();
                $result->tersedia = $this->assetRepository->get([['status','=','0'],['jenis_asset_id','=',$result->id]])->count();
                $result->dipinjam = $this->assetRepository->get([['status','=','1'],['jenis_asset_id','=',$result->id]])->count();
            }
        return $results;
    }
}