<?php

namespace App\Interfaces\Repositories;

interface IJenisAssetRepository
{
    public function find($id);
    public function create($params);
    public function get($params=NULL);
}