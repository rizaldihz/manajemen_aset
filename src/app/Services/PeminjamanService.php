<?php

namespace App\Services;

use App\Repositories\PeminjamanRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
// use InvalidArgumentException;

class PeminjamanService
{
    protected $peminjamanRepository;
    public function __construct(PeminjamanRepository $peminjamanRepository)
    {
        $this->peminjamanRepository = $peminjamanRepository;
    }
    public function saveData($request,$user,$asset)
    {
        if($asset->status==0){
            $data=[
                'asset_id' => $request->post('id_aset'),
                'lokasi' => $request->post('lokasi'),
                'tanggal_pinjam' => \Carbon\Carbon::now(),
                'tanggal_kembali' => \Carbon\Carbon::now()->addWeeks(1),
                'status' => 'Dipinjam',
                'user_id' => $user->id,
                'kode_peminjaman' => sprintf("P%s%s",$asset->kode_aset,\Carbon\Carbon::now()->format('dmy'))
            ];
            return $this->peminjamanRepository->create($data);
        }
        return false;
    }
    public function getAll()
    {
        return $this->peminjamanRepository->get();
    }
    public function findById($params)
    {
        return $this->peminjamanRepository->find($params);
    }
    public function deleteById($params)
    {
        return $this->peminjamanRepository->delete($params);
    }
}