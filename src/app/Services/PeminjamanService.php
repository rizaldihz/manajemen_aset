<?php

namespace App\Services;

use App\Repositories\PeminjamanRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Services\AssetService;
// use InvalidArgumentException;

class PeminjamanService
{
    protected $peminjamanRepository;
    protected $assetService;
    public function __construct(PeminjamanRepository $peminjamanRepository, AssetService $assetService)
    {
        $this->peminjamanRepository = $peminjamanRepository;
        $this->assetService = $assetService;
    }
    public function saveData($request,$user,$asset)
    {
        if($asset->status==0){
            $data=[
                'asset_id' => $request->post('id_aset'),
                'lokasi' => $request->post('lokasi'),
                'tanggal_pinjam' => \Carbon\Carbon::now(),
                'tanggal_kembali' => \Carbon\Carbon::createFromFormat('Y/m/d',  $request->post('tanggalkembali_submit')),
                'status' => 'Dipinjam',
                'user_id' => $user->id,
                'kode_peminjaman' => sprintf("P%s%s",$asset->kode_aset,\Carbon\Carbon::now()->format('dmy'))
            ];
            return $this->peminjamanRepository->create($data);
        }
        return false;
    }
    public function getAll($request=NULL)
    {
        if($request)
            if($request->ajax()){
                $peminjaman = $this->peminjamanRepository->get();
                $newData = [];
                foreach($peminjaman as $data)
                {
                    $datastatus='';
                    if($data->status == 'Kembali') $datastatus = '<span class="badge badge-success">Dikembalikan</span>';
                    elseif(\Carbon\Carbon::now() > \Carbon\Carbon::parse($data->tanggal_kembali)) $datastatus = '<span class="badge badge-danger">Terlambat</span>';
                    elseif($data->status == 'Dipinjam') $datastatus = '<span class="badge badge-warning">Dipinjam</span>';
                    $temp = [
                        'kode_peminjaman' => $data->kode_peminjaman,
                        'nama_asset_peminjaman' => $data->asset->nama,
                        'jenis_asset_peminjaman' => $data->asset->jenisasset->nama,
                        'nama_peminjam' => $data->user->nama,
                        'lokasi_peminjaman' => $data->lokasi,
                        'status_peminjaman' => $datastatus
                    ];
                    array_push($newData,$temp);
                }
                return $newData;
            }
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
    public function get($request)
    {
        if($request->has('uid')){
            $data = [['user_id','=',$request->post('uid')],['status','!=','Kembali']];
        }
        elseif($request->post('tipe')=='populate'){
            $data = [['status','!=','Kembali']];
        }
        elseif($request->post('tipe')=='tobereturned'){
            $data = [['asset_id','=',$request->post('id')],['status','!=','Kembali']];
        }
        $peminjaman = $this->peminjamanRepository->get($data);
        foreach($peminjaman as $pinjam){
            $pinjam->link = url('peminjaman/'.$pinjam->kode_peminjaman);
            $pinjam->jenis_asset = $pinjam->asset->jenisasset->nama;
            $pinjam->asset_foto_path = url($pinjam->asset->getFotoPath());
        }
        return $peminjaman;
    }
    public function getDetailed($data)
    {
        $peminjaman = $this->peminjamanRepository->getFirst([['kode_peminjaman','=',$data]]);
        if($peminjaman) $peminjaman->link = url('peminjaman/'.$peminjaman->kode_peminjaman);
        return $peminjaman;
    }
    public function pengembalian($request)
    {
        $peminjaman = $this->findById($request->post('id')); 
        if((!$request->session()->get('user')->id == $peminjaman->user_id && !$request->session()->get('user')->isAdmin()) && $peminjaman->status != 'Dipinjam') return "Not Authorized";
        $this->peminjamanRepository->updateById(['status'=>'Kembali'],$request->post('id'));
        $this->assetService->updateById(['status'=>0],$peminjaman->asset->id);
        return "Pengembalian berhasil";
    }
    public function newestFromAsset($data)
    {
        return $this->peminjamanRepository->getFirst([['asset_id','=',$data],['status','<>','Kembali']]);
    }
}