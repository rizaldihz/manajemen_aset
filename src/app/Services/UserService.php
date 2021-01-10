<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;
// use InvalidArgumentException;

class UserService
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function saveData($request)
    {
        $data = [
            'nik' => $request->post('nik'),
            'nama' => $request->post('nama'),
            'unit_kerja' => $request->post('unit_kerja'),
            'tipe' => $request->post('tipe'),
            'password' => Hash::make($request->post('password'))
        ];
        return $this->userRepository->create($data);
    }
    public function getAll()
    {
        return $this->userRepository->get();
    }
    public function importRequest($request)
    {
        set_time_limit(0);
        Excel::import(new UserImport, public_path("/temp/master-import-manajaset.xls"));
    }
    public function findById($params)
    {
        return $this->userRepository->find($params);
    }
    public function deleteById($params)
    {
        return $this->userRepository->delete($params);
    }
}