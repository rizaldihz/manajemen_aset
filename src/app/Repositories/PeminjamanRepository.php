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
        $data = null;
        if($params) $data = $this->peminjaman->where($params)->orderBy('created_at', 'DESC')->with('asset')->with('user:id,nama,nik')->get();
        else $data = $this->peminjaman->orderBy('created_at', 'DESC')->with('asset')->with('user:id,nama,nik')->get();
        if($data->count())
            foreach($data as $ones)
            {
                $ones->tanggal_pinjam_raw = $ones->getStrTanggalPinjam();
                $ones->tanggal_kembali_raw = $ones->getStrTanggalKembali();
            } 
        return $data;
    }
    public function getFirst($params)
    {
        $data = $this->peminjaman->where($params)->with('asset')->with('user:id,nama,nik')->first();
        if($data){
            $data->tanggal_pinjam_raw = $data->getStrTanggalPinjam();
            $data->tanggal_kembali_raw = $data->getStrTanggalKembali();
        }
        return $data;
    }
    public function delete($id)
    {
        $toDelete = $this->peminjaman->find($id);
        return $toDelete->delete();
    }
    public function updateById($params,$id)
    {
        $peminjaman = $this->find($id);
        return $peminjaman->update($params);
    }
}