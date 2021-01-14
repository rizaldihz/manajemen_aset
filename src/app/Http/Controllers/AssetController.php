<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\JenisAssetService;
use App\Services\AssetService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Datatables;
use QrCode;

class AssetController extends BaseController
{
    //
    protected $jenisAssetService;
    protected $assetService;
    public function __construct(JenisAssetService $jenisAssetService, AssetService $assetService)
    {
        $this->jenisAssetService = $jenisAssetService;
        $this->assetService = $assetService;
    }
    public function asset_view(Request $request)
    {
        if ($request->ajax()) {
            try {
                $data = $this->assetService->getAll();
                return Datatables::of($data)->removeColumn('id')->removeColumn('jenis_asset_id')
                        ->addColumn('jenis_aset', function($row) {return $row->jenisasset->nama;})
                        ->editColumn('status', function($row) {
                            if($row->status) return '<span class="badge badge-warning ">Digunakan</span>';
                            else return '<span class="badge badge-success ">Tersedia</span>';
                        })
                        ->addColumn('action', function($row){
                            $btn = '<a class="text-info mr-2" href="javascript:toggleModalDetail(\''.$row->id.'\')"><i class="nav-icon i-Monitor-5 font-weight-bold "></i></a>
                            <a class="text-info mr-2 " href="javascript:toggleCode(\''.$row->id.'\')"><i class="nav-icon fas fa-qrcode font-weight-bold "></i></a>
                            <a class="text-success mr-2 " href="javascript:showEdit(\''.$row->id.'\')" onClick><i class="nav-icon i-Pen-2 font-weight-bold "></i></a>
                            <a class="text-danger mr-2 " href="javascript:showDelete(\''.$row->id.'\')"><i class="nav-icon i-Close-Window font-weight-bold "></i></a>';
                            return $btn;
                        })->rawColumns(['action', 'jenis_aset', 'status'])->make(true);
            } catch (\Throwable $th) {
                return response()->json(['data' => 'Err']);
            }   
        }
        return view('dashboard.daftar-aset',['jenisAssets' => $this->jenisAssetService->getAll()]);
    }
    public function dashboard_view()
    {
        return view('dashboard.dashboard',[]);
    }
    public function jenis_asset_create(Request $request)
    {
        try {
            $this->jenisAssetService->saveData([
                'nama' => $request->post('nama'),
            ]);
            return redirect('data-aset');
        } catch (\Throwable $th) {
            return response()->json(['data' => 'Err']);
        }
    }
    public function asset_create(Request $request)
    {
        try {
            $this->validate($request, [
                'foto' => 'required|file|max:5000', // max 2MB
            ]);
            $this->assetService->saveData($request);
            return redirect('data-aset');
        } catch (\Throwable $th) {
            return response()->json(['data' => 'Err']);
        }
    }
    public function asset_get(Request $request)
    {
        if($request->ajax()){
            try {
                $dataAsset = $this->assetService->findById($request->post('id'));
                if($request->post('tipe')=='populate'){
                    $dataAsset['jenis'] = $dataAsset->jenisasset->nama;
                    $dataAsset['imgurl'] = url(Storage::url($dataAsset->foto));
                    $dataAsset['tanggal_pinjam'] = \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y HH:mm');
                    $dataAsset['tanggal_kembali'] = \Carbon\Carbon::now()->addWeeks(1)->isoFormat('dddd, D MMMM Y HH:mm');
                    return response()->json(['data' => $dataAsset]);
                }
                if($request->post('tipe')=='modal'){
                    $statusStr = NULL;
                    if($dataAsset->status) $statusStr = '<span class="badge badge-warning ">Digunakan</span>';
                    else $statusStr = '<span class="badge badge-success ">Tersedia</span>';
                    $modal = sprintf("<div class='row'><div class='col-12'><img src='%s'></div><div class='col-12'>
                            <div class='table-responsive'><table class='table table-borderless'><tbody>
                            <tr><th scope='row'>Kode Aset</th><td>:</td><td>%s</td></tr>
                            <tr><th scope='row'>Nama Aset</th><td>:</td><td>%s</td></tr>
                            <tr><th scope='row'>Jenis Aset</th><td>:</td><td>%s</td></tr>
                            <tr><th scope='row'>Lokasi Terakhir</th><td>:</td><td>%s</td></tr>
                            <tr><th scope='row'>Status</th><td>:</td><td>%s</td></tr></tbody></table></div></div></div>",
                        url(Storage::url($dataAsset->foto)),$dataAsset->kode_aset,$dataAsset->nama,$dataAsset->jenisasset->nama,$dataAsset->lokasi,$statusStr);
                    return response()->json(['data' => $modal]);
                }
                if($request->post('tipe')=='getall'){
                    $assets = $this->assetService->getFromJenis($request);
                    return response()->json(['data' => $assets]);
                }
            }catch(\Illuminate\Database\QueryException $e) {
                return response()->json(['data' => 'Data tidak ditemukan!','msg'=>$e],404);
            }
        }
    }
    public function asset_delete(Request $request)
    {
        try {
            $dataAsset = $this->assetService->deleteById($request->post('id'));
            return response()->json(['data' => 'sukses']);
        } catch (\Throwable $th) {
            return response()->json(['data' => 'Err']);
        }
    }
    public function asset_qrcode(Request $request,$id)
    {
        try {
            return QrCode::size(300)->format('png')->generate($id);
        } catch (\Throwable $th) {
            return response()->json(['data' => 'Err']);
        }
        
    }
    public function all_asset_view(Request $request)
    {
        return view('dashboard.data-aset',['jenis_assets'=>$this->jenisAssetService->getAll()]);
    }
    public function asset_detail(Request $request,$id)
    {
        $asset = $this->assetService->getFirst($id);
        if($asset)
            return view('dashboard.detail-aset',['asset'=>$asset]);
    }
}
