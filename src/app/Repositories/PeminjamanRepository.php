<?php

namespace App\Repositories;

use App\Models\Peminjaman;
use Illuminate\Support\Facades\Storage;

class PeminjamanRepository
{
    protected $peminjaman;

    public function __construct(Peminjaman $peminjaman)
    {
        $this->peminjaman = $peminjaman;
    }

    public function find($id)
    {
        return $this->peminjaman->find($id);
    }

    public function create($params)
    {
        return $this->peminjaman->create($params);
    }

    public function get($params=NULL)
    {
        if($params)
            return $this->peminjaman->where($params)->orderBy('created_at', 'DESC')->get();
        return $this->peminjaman->orderBy('created_at', 'DESC')->get();
    }

    public function delete($id)
    {
        $toDelete = $this->peminjaman->find($id);
        return $toDelete->delete();
    }
}