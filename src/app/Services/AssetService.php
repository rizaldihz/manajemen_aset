<?php

namespace App\Services;

use App\Repositories\AssetRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
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
        $result = $this->assetRepository->create($data);

        return $result;
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
}