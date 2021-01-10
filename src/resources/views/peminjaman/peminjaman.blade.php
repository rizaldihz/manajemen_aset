@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<style>
#qr-canvas {
  margin: auto;
  width: calc(100% - 20px);
  max-width: 400px;
}
</style>
@endsection

@section('content')
<div class="breadcrumb">
    <h1>Peminjaman Barang</h1>
</div>
<!--  end of col -->
<div class="row">
    <div class="col-md-3">
        <a class="btn btn-primary" id="btn-scan-qr">Scan</a>
    </div>
    <div class="col-12">
        <canvas hidden="" id="qr-canvas"></canvas>

        <div id="qr-result" hidden="">
            <b>Data:</b> <span id="outputData"></span>
        </div>
    </div>
</div>
<!-- fotter end -->
<div class="modal fade" id="modalTambahAset" tabindex="-1" role="dialog" aria-labelledby="modalTambahAset" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahAset">Tambah Aset</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method='post' action='{{url("asset/create")}}' enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Kode Asset</label>
                        <input class="form-control"type="text" name='kode_aset'/>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama Asset</label>
                        <input class="form-control"type="text" name='nama'/>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Lokasi</label>
                        <input class="form-control"type="text" name='lokasi'/>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Stok</label>
                        <input class="form-control"type="text" name='stok'/>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Jenis Asset</label>
                        <select class="form-control" name='jenis_asset'>

                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Foto</label>
                        <input class="form-control"type="file" name="foto"/>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-primary ml-2" type="submit">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('moreJS')
<script src=" {{asset('assets/js/plugins/datatables.min.js')}} "></script>
<script src=" {{asset('assets/js/scripts/datatables.script.min.js')}} "></script>
<script src=" {{asset('assets/js/plugins/sweetalert2.min.js')}}"></script>
<script src=" {{asset('assets/js/scripts/sweetalert.script.min.js')}}"></script>
<script src=" {{asset('assets/js/scripts/html5-qrcode.min.js')}}"></script>
<script src=" https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
<script src=" {{asset('assets/js/qrcodescan.js')}} "></script>
@endsection