<?php

namespace App\Exports\Sheets;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithTitle;

class AssetsSheet implements FromArray, WithTitle
{
    private $assets;

    public function __construct(array $assets)
    {
        $this->assets = $assets;
    }

    public function array(): array
    {
        return $this->assets;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Daftar Asset';
    }
}