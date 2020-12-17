<?php

namespace App\Services;

use App\Repositories\JenisAssetRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
// use InvalidArgumentException;

class JenisAssetService
{
    protected $jenisAssetRepository;
    public function __construct(JenisAssetRepository $jenisAssetRepository)
    {
        $this->jenisAssetRepository = $jenisAssetRepository;
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
}