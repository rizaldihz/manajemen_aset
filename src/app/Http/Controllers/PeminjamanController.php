<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PeminjamanPostRequest;
use App\Services\PeminjamanService;
use App\Services\UserService;
use App\Services\AssetService;
use Datatables;

class PeminjamanController extends BaseController
{
    protected $peminjamanService, $assetService;
    public function __construct(PeminjamanService $peminjamanService, AssetService $assetService)
    {
        $this->peminjamanService = $peminjamanService;
        $this->assetService = $assetService;
    }
    public function peminjaman_view()
    {
        return view('peminjaman.peminjaman');
    }
    public function scan_view()
    {
        return view('peminjaman.scan');
    }
    public function scan_kembalikan_view()
    {
        return view('peminjaman.return');
    }
    public function peminjaman_create(UserService $userService, PeminjamanPostRequest $request)
    {
        try {
            $user = $userService->findById('001b2775-55c9-4592-ab78-d18c6b0cecdc'); //will be authenticated user
            $asset = $this->assetService->findbyId($request->post('id_aset'));
            $msg = $this->peminjamanService->saveData($request,$user,$asset);
            if($msg!=false){
                $this->assetService->updateById(['status'=>1],$request->post('id_aset'));
            }
            return redirect('');
        } catch (\Throwable $th) {
            return response()->json(['data' => 'Err']);
        }
        
    }
    public function peminjaman_get($kode=NULL,Request $request)
    {
        if($kode){
            try {
                $peminjaman = $this->peminjamanService->getDetailed($kode);
                if($peminjaman) return view('peminjaman.detail-aset-peminjaman',['peminjaman' => $peminjaman]);
            } catch (\Throwable $th) {
                return response()->json(['err' => $th]);
            }
        };
        if($request->ajax())
        {
            try {
                $peminjaman = $this->peminjamanService->get($request);
                return response()->json(['data' => $peminjaman]);
            } catch (\Throwable $th) {
                return response()->json(['err' => $th]);
            }
        }
    }
    public function peminjaman_getAll($kode=NULL,Request $request)
    {
        if($request->ajax())
        {
            try {
                $peminjaman = $this->peminjamanService->getAll($request);
                return Datatables::of($peminjaman)->removeColumn('id')
                        ->addColumn('action_peminjaman', function($row){
                            $btn = '<a class="text-info mr-2" href="'.url('peminjaman/'.$row['kode_peminjaman']).'"><i class="nav-icon i-Monitor-5 font-weight-bold "></i></a>';
                            return $btn;
                        })->rawColumns(['action_peminjaman', 'status_peminjaman'])->make(true);
            } catch (\Throwable $th) {
                return response()->json(['err' => $th]);
            }
        }
    }
    public function pengembalian_action(Request $request)
    {
        $response = $this->peminjamanService->pengembalian($request);
        return redirect('');
    }
}