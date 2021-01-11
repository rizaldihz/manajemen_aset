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
        if($request->isMethod('post')){
            set_time_limit(0);
            return Excel::import(new UserImport, public_path("/temp/master-import-manajaset.xls"));
        }
        $data = [
            'nik' => 'T000000',
            'nama' => 'IRRIZHAL FIRDIANSYAH',
            'unit_kerja' => 'Dep Pemeliharaan II',
            'tipe' => 0,
            'password' => Hash::make('T000000')
        ];
        return $this->userRepository->create($data);
    }
    public function findById($params)
    {
        return $this->userRepository->find($params);
    }
    public function deleteById($params)
    {
        return $this->userRepository->delete($params);
    }
    public function authenticate($request)
    {
        $user = $this->userRepository->getFirst([['nik','=',$request->post('nik')]]);
        if($user && $user->passwordMatch($request->post('password'))){
            $request->session()->put('user', $user);
            return "Login Success";
        }
        return "Login gagal";
    }
    public function logOut($request)
    {
        $request->session()->flush();
        return "Logged out";
    }
}