<?php

namespace App\Exports\Sheets;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithTitle;

class PeminjamansSheet implements FromArray, WithTitle
{
    private $peminjamans;

    public function __construct(array $peminjamans)
    {
        $this->peminjamans = $peminjamans;
    }

    public function array(): array
    {
        return $this->peminjamans;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Daftar Peminjaman';
    }
}