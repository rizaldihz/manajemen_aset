<?php

namespace App\Interfaces\Repositories;

interface IAssetRepository
{
    public function find($id);
    public function create($params);
    public function get($params=NULL);
    public function delete($id);
    public function updateById($params,$id);
    public function getFirst($params);
}