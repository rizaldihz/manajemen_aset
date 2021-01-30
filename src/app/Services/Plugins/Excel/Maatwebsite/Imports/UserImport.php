<?php

namespace App\App\Services\Plugins\Excel\Maatwebsite\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class UserImport implements ToModel, WithChunkReading
{
    public function model(array $row)
    {
        return new User([
            'nama' => $row[1],
            'unit_kerja' => $row[2],
            'nik' => $row[0],
            'tipe' => 0,
            'password' => Hash::make($row[0]),
        ]);
    }
    public function chunkSize(): int
    {
        return 1000;
    }
}
