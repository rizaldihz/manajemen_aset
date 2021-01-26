@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="breadcrumb">
    <h3>Tabel Report Diklat</h3>
</div>

<div class="row" style="margin-left: 2px; margin-right: 2px;">
    <div class="col-md-12 mb-3">
        <div class="d-flex justify-content-start">
            <a href="{{url('export-excel')}}" type="button" class="btn btn-success"><img src="{{asset('assets/images/excel.png')}}" style="width: 16px; height: 16px;" class="mr-2">Export Data</a>
        </div>
    </div>
</div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="asset-basic-tab" data-toggle="tab" href="#assetBasic" role="tab" aria-controls="assetBasic" aria-selected="true">Daftar Asset</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="peminjaman-basic-tab" data-toggle="tab" href="#peminjamanBasic" role="tab" aria-controls="peminjamanBasic" aria-selected="false">Peminjaman</a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link" id="ruang3-basic-tab" data-toggle="tab" href="#ruang3Basic" role="tab" aria-controls="ruang3Basic" aria-selected="false">Ruang 2</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="ruang3-basic-tab" data-toggle="tab" href="#ruang3Basic" role="tab" aria-controls="ruang3Basic" aria-selected="false">Ruang 3</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="ruang3-basic-tab" data-toggle="tab" href="#ruang3Basic" role="tab" aria-controls="ruang3Basic" aria-selected="false">LSC</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="ruang3-basic-tab" data-toggle="tab" href="#ruang3Basic" role="tab" aria-controls="ruang3Basic" aria-selected="false">Lobby</a>
    </li> --}}
</ul>


<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" style="margin-bottom: px" id="assetBasic" role="tabpanel" aria-labelledby="asset-basic-tab">
        {{-- <div class="col-md-12 my-3">
            <button class="btn btn-success mb-1" data-toggle="modal" data-target="#modalTambahAset">Tambah Aset</button>
            <button class="btn btn-success mb-1" data-toggle="modal" data-target="#modalTambahJenis">Tambah Jenis Asset</button>
        </div> --}}
        {{-- <div class="col-md-12"> --}}
        <div class="table-responsive my-4">
            <table class="display table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Jenis Aset</th>
                        <th>Tersedia</th>
                        <th>Dipinjam</th>
                        <th>Jumlah Aset Total</th>
                    </tr>
                </thead>
                <tbody>
                    @if($reports->count())
                    @foreach($reports as $one)
                    <tr>
                        <td>{{$one->nama}}</td>
                        <td>{{$one->tersedia}}</td>
                        <td>{{$one->dipinjam}}</td>
                        <td>{{$one->total}}</td>
                    </tr>
                    @endforeach
                    @else
                    <p> Tidak Ada Data </p>
                    @endif
                </tbody>
            </table>
        </div>

        <div class="table-responsive my-4">
            <table class="display table table-striped table-bordered" id="asset_table" style="width:100%">
                <thead>
                    <tr>
                        <th>Kode Aset</th>
                        <th>Nama Aset</th>
                        <th>Jenis Aset</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        {{-- </div> --}}
    </div>
    <div class="tab-pane fade mb-4" id="peminjamanBasic" role="tabpanel" aria-labelledby="peminjaman-basic-tab">
        <!-- end of col-->
        <div class="table-responsive ">
            <table class="display table table-striped table-bordered" id="peminjaman_table" style="width:100%">
                <thead>
                    <tr>
                        <th>Kode Peminjaman</th>
                        <th>Nama Asset</th>
                        <th>Jenis Asset</th>
                        <th>Peminjam Asset</th>
                        <th>Lokasi Terakhir</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
{{-- <div class="modal fade" id="modalTambahAset" tabindex="-1" role="dialog" aria-labelledby="modalTambahAset" aria-hidden="true">
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
                        <input class="form-control" type="text" name='kode_aset' />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama Asset</label>
                        <input class="form-control" type="text" name='nama' />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Lokasi</label>
                        <input class="form-control" type="text" name='lokasi' />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Stok</label>
                        <input class="form-control" type="text" name='stok' />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Jenis Asset</label>
                        <select class="form-control" name='jenis_asset'>
                            @if(!$jenisAssets->isEmpty())
                            @foreach($jenisAssets as $jenisAsset)
                            <option value="{{$jenisAsset->id}}">{{$jenisAsset->nama}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Foto</label>
                        <input class="form-control" type="file" name="foto" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary ml-2" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
{{-- <div class="modal fade" id="modalTambahJenis" tabindex="-1" role="dialog" aria-labelledby="modalTambahJenis" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahJenis">Tambah Jenis Aset</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="post" action="{{url('jenis-asset/create')}}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">Nama Jenis Asset</label>
                        <input class="form-control" type="text" name="nama" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary ml-2" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<div class="modal fade" id="modalDetailAset" tabindex="-1" role="dialog" aria-labelledby="modalDetailAset" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Aset</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                <button class="btn btn-primary ml-2" type="submit">Pinjam</button>
            </div>
        </div>
    </div>
</div>
{{-- </div> --}}
@endsection

@section('moreJS')
<script src=" {{asset('assets/js/plugins/datatables.min.js')}} "></script>
<script src=" {{asset('assets/js/scripts/datatables.script.min.js')}} "></script>
<script src=" {{asset('assets/js/plugins/sweetalert2.min.js')}}"></script>
<script src=" {{asset('assets/js/scripts/sweetalert.script.min.js')}}"></script>
<script>
    var assetTable = $('#asset_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('daftar-aset') }}",
        columns: [{
                data: 'kode_aset',
                name: 'kode_aset'
            },
            {
                data: 'nama',
                name: 'nama'
            },
            {
                data: 'jenis_aset',
                name: 'jenis_aset'
            },
            {
                data: 'lokasi',
                name: 'lokasi'
            },
            {
                data: 'status',
                name: 'status'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ]
    });
    var peminjamanTable = $('#peminjaman_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('daftar-peminjaman') }}",
        columns: [{
                data: 'kode_peminjaman',
                name: 'kode_peminjaman'
            },
            {
                data: 'nama_asset_peminjaman',
                name: 'nama_asset_peminjaman'
            },
            {
                data: 'jenis_asset_peminjaman',
                name: 'jenis_asset_peminjaman'
            },
            {
                data: 'nama_peminjam',
                name: 'nama_peminjam'
            },
            {
                data: 'lokasi_peminjaman',
                name: 'lokasi_peminjaman'
            },
            {
                data: 'status_peminjaman',
                name: 'status_peminjaman'
            },
            {
                data: 'action_peminjaman',
                name: 'action_peminjaman',
                orderable: false,
                searchable: false
            },
        ]
    });
    var lastdata = null;

    function toggleModalDetail(params) {
        if (lastdata != params) {
            $.ajax({
                url: '{{url("asset/get")}}',
                type: 'post',
                data: {
                    id: params,
                    tipe: 'modal',
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    $('#modalDetailAset .modal-title').html("Detail Aset")
                    $('#modalDetailAset .modal-body').html(response.data);
                    $('#modalDetailAset').modal('show');
                }
            });
        } else {
            $('#modalDetailAset .modal-title').html("Detail Aset")
            $('#modalDetailAset').modal('show');
        }
    }

    function showDelete(params) {
        $.ajax({
            url: '{{url("asset/delete")}}',
            type: 'post',
            data: {
                id: params,
                tipe: 'modal',
                _token: "{{ csrf_token() }}",
            },
            success: function(response) {
                swal(
                    'Sukses',
                    'Data Berhasil dihapus!',
                    'success'
                );
                table.ajax.reload();
            }
        });
    }

    function toggleCode(params) {
        $('#modalDetailAset .modal-title').html("QR Code")
        $('#modalDetailAset .modal-body').html("<div class='row'><div class='col-12'><img src='{{url('/')}}/asset/code/" + params + "'></div></div>");
        $('#modalDetailAset').modal('show');
    }
</script>
@endsection