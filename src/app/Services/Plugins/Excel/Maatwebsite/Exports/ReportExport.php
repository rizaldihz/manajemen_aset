<?php

namespace App\Services\Plugins\Excel\Maatwebsite\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use App\Services\Plugins\Excel\Maatwebsite\Exports\Sheets\AssetsSheet;
use App\Services\Plugins\Excel\Maatwebsite\Exports\Sheets\PeminjamansSheet;

class ReportExport implements WithMultipleSheets
{
    use Exportable;

    protected array $assets;
    protected array $peminjamans;
    
    public function __construct(array $assets,array $peminjamans)
    {
        $this->assets = $assets;
        $this->peminjamans = $peminjamans;
    }
    
    public function sheets(): array
    {
        $sheets = [];

        $assetSheet = new AssetsSheet($this->assets);
        $peminjamanSheet = new PeminjamansSheet($this->peminjamans);

        return [$assetSheet,$peminjamanSheet];
    }
}
