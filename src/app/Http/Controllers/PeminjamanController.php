<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PeminjamanPostRequest;
use App\Services\PeminjamanService;
use App\Services\UserService;
use App\Services\AssetService;

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
    public function peminjaman_get(Request $request)
    {
        
    }
}