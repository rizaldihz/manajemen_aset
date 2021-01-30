<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Services\AssetService;
use App\Services\PeminjamanService;
use App\Services\Plugins\Excel\IExcelExportManager;
// use InvalidArgumentException;

class ExcelService
{
    protected $peminjamanService;
    protected $assetService;
    public function __construct(PeminjamanService $peminjamanService, AssetService $assetService)
    {
        $this->peminjamanService = $peminjamanService;
        $this->assetService = $assetService;
    }
    public function export($excelExportManager)
    {
        $asset = $this->assetService->getAll();
        $toexport=array([],[]);
        array_push($toexport[0],['Kode Asset','Nama Asset','Lokasi','Jenis Asset','Status']);
        foreach($asset as $data)
        {
            if($data->status) $status = 'Tidak tersedia';
            else $status = 'Tersedia';
            $temp=[
                $data->kode_aset,
                $data->nama,
                $data->jenisasset->nama,
                $data->lokasi,
                $status
            ];
            array_push($toexport[0],$temp);
        }
        $peminjaman = $this->peminjamanService->getAll();
        $temp=[];
        array_push($toexport[1],['Kode Peminjaman','Nama Asset','Jenis Asset','Nama Peminjam','Lokasi Terakhir','Status','Tanggal Peminjaman','Tanggal Kembali']);
        foreach($peminjaman as $data)
        {
            if(\Carbon\Carbon::now() > \Carbon\Carbon::parse($data->tanggal_kembali) && $data->status != 'Kembali') $status = 'Terlambat';
            else $status = $data->status;
            $temp=[
                $data->kode_peminjaman,
                $data->asset->nama,
                $data->asset->jenisasset->nama,
                $data->user->nama,
                $data->lokasi,
                $status,
                $data->tanggal_pinjam,
                $data->tanggal_kembali
            ];
            array_push($toexport[1],$temp);
        }
        $excelExportManager->setContent($toexport);
        return $excelExportManager->export('Data Manajemen Asset.xlsx');
    }
}