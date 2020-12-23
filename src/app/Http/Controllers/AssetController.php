<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\JenisAssetService;
use App\Services\AssetService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Datatables;
use QrCode;

class AssetController extends Controller
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
            $data = $this->assetService->getAll();
            return Datatables::of($data)
                    ->removeColumn('id')
                    ->removeColumn('jenis_asset_id')
                    ->addColumn('jenis_aset', function($row) {
                        return $row->jenisasset->nama;
                    })
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
                    })
                    ->rawColumns(['action', 'jenis_aset', 'status'])
                    ->make(true);
        }
        return view('dashboard.daftar-aset',[
            'jenisAssets' => $this->jenisAssetService->getAll()
        ]);
    }
    public function dashboard_view()
    {
        return view('dashboard.dashboard',[]);
    }
    public function jenis_asset_create(Request $request)
    {
        $this->jenisAssetService->saveData([
            'nama' => $request->post('nama'),
        ]);
        return redirect('daftar-aset');
    }
    public function asset_create(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|file|max:5000', // max 2MB
        ]);
        if($request->has('foto')){
            $image = $request->file('foto');
            $name = Str::slug($request->input('nama')).'_'.time();
            $imgName = $name.'.'.$image->getClientOriginalExtension();
            $path = Storage::putFileAs('public/images', $request->file('foto'), $imgName);
            $postData = [
                'kode_aset' => $request->post('kode_aset'),
                'nama' => $request->post('nama'),
                'lokasi' => $request->post('lokasi'),
                'stok' => $request->post('stok'),
                'jenis_asset_id' => $request->post('jenis_asset'),
                'status' => 0,
                'foto' => $path
            ];
            $this->assetService->saveData($postData);
        }
        return redirect('daftar-aset');
    }
    public function asset_get(Request $request)
    {
        $dataAsset = $this->assetService->findById($request->post('id'));
        $statusStr = NULL;
        if($dataAsset->status) $statusStr = '<span class="badge badge-warning ">Digunakan</span>';
        else $statusStr = '<span class="badge badge-success ">Tersedia</span>';
        $modal = sprintf("
        <div class='row'>
            <div class='col-12'>
                <img src='%s'>
            </div>
            <div class='col-12'>
                <div class='table-responsive'>
                    <table class='table table-borderless'>
                        <tbody>
                            <tr>
                                <th scope='row'>Kode Aset</th>
                                <td>:</td>
                                <td>%s</td>
                            </tr>
                            <tr>
                                <th scope='row'>Nama Aset</th>
                                <td>:</td>
                                <td>%s</td>
                            </tr>
                            <tr>
                                <th scope='row'>Jenis Aset</th>
                                <td>:</td>
                                <td>%s</td>
                            </tr>
                            <tr>
                                <th scope='row'>Lokasi Terakhir</th>
                                <td>:</td>
                                <td>%s</td>
                            </tr>
                            <tr>
                                <th scope='row'>Status</th>
                                <td>:</td>
                                <td>%s</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>",url(Storage::url($dataAsset->foto)),$dataAsset->kode_aset,$dataAsset->nama,$dataAsset->jenisasset->nama,$dataAsset->lokasi,$statusStr);
        return response()->json(['data' => $modal]);
    }
    public function asset_delete(Request $request)
    {
        $dataAsset = $this->assetService->deleteById($request->post('id'));
        
        return response()->json(['data' => 'sukses']);
    }
    public function asset_qrcode(Request $request,$id)
    {
        return QrCode::size(300)->format('png')->generate($id);
    }
}
