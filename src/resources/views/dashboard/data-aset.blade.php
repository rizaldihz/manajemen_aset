@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="main-content">

    <div class="breadcrumb">
        <h1>Data Aset Diklat</h1>
    </div>
    <!--  end of col -->

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="ruang1-basic-tab" data-toggle="tab" href="#ruang1Basic" role="tab" aria-controls="ruang1Basic" aria-selected="true">Proyektor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ruang3-basic-tab" data-toggle="tab" href="#ruang3Basic" role="tab" aria-controls="ruang3Basic" aria-selected="false">Laptop</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ruang1-basic-tab" data-toggle="tab" href="#ruang1Basic" role="tab" aria-controls="ruang1Basic" aria-selected="false">Tripod</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ruang3-basic-tab" data-toggle="tab" href="#ruang3Basic" role="tab" aria-controls="ruang3Basic" aria-selected="false">Camera</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ruang1-basic-tab" data-toggle="tab" href="#ruang1Basic" role="tab" aria-controls="ruang1Basic" aria-selected="false">HandyCam</a>
        </li>
    </ul>
    <br>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" style="margin-bottom: 36px" id="ruang1Basic" role="tabpanel" aria-labelledby="ruang1-basic-tab">
            <!-- end of col-->
            <div>
                <div class="card mb-4">
                    <div class="card-header">010203-Kode Asset</div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">Nama Aset</h5>
                        <div class="row">
                            <div class="col-xs-6 ml-3 mb-2">
                                <p class="text-primary mb-1"><i class="i-Home1 mr-2" style="font-size: 12px;"></i>Lokasi</p>
                                <p class="text-sm lh-150" style="font-size: 12px">Ruang Administrasi</p>
                            </div>
                            <div class="col-xs-6 mb-2 ml-3">
                                <p class="text-primary mb-1"><i class="i-Map mr-2" style="font-size: 12px;"></i>Status</p>
                                <span class="badge badge-pill badge-outline-warning p-2 m-1 ml-3" style="font-size: 11px;">Tidak Tersedia</span>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-rounded" style="font-size: 11px;" href="detailaset.html">Selengkapnya</a>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">010203-Kode Asset</div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">Nama Aset</h5>
                        <div class="row">
                            <div class="col-xs-6 ml-3 mb-2">
                                <p class="text-primary mb-1"><i class="i-Home1 mr-2" style="font-size: 12px;"></i>Lokasi</p>
                                <p class="text-sm lh-150" style="font-size: 12px">Ruang Administrasi</p>
                            </div>
                            <div class="col-xs-6 mb-2 ml-3">
                                <p class="text-primary mb-1"><i class="i-Map mr-2" style="font-size: 12px;"></i>Status</p>
                                <span class="badge badge-pill badge-outline-success p-2 m-1 ml-3" style="font-size: 11px;">Tersedia</span>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-rounded" style="font-size: 11px;" href="detailaset.html">Selengkapnya</a>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">010203-Kode Asset</div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">Nama Aset</h5>
                        <div class="row">
                            <div class="col-xs-6 ml-3 mb-2">
                                <p class="text-primary mb-1"><i class="i-Home1 mr-2" style="font-size: 12px;"></i>Lokasi</p>
                                <p class="text-sm lh-150" style="font-size: 12px">Ruang Administrasi</p>
                            </div>
                            <div class="col-xs-6 mb-2 ml-3">
                                <p class="text-primary mb-1"><i class="i-Map mr-2" style="font-size: 12px;"></i>Status</p>
                                <span class="badge badge-pill badge-outline-success p-2 m-1 ml-3" style="font-size: 11px;">Tersedia</span>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-rounded" style="font-size: 11px;" href="detailaset.html">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- end of col-->
        </div>
        <div class="tab-pane fade show" style="margin-bottom: 36px" id="ruang3Basic" role="tabpanel" aria-labelledby="ruang3-basic-tab">
            <!-- end of col-->
            <div>
                <div class="card mb-4">
                    <div class="card-header">010203-Kode Asset</div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">Nama Aset</h5>
                        <div class="row">
                            <div class="col-xs-6 ml-3 mb-2">
                                <p class="text-primary mb-1"><i class="i-Home1 mr-2" style="font-size: 12px;"></i>Lokasi</p>
                                <p class="text-sm lh-150" style="font-size: 12px">Ruang Administrasi</p>
                            </div>
                            <div class="col-xs-6 mb-2 ml-3">
                                <p class="text-primary mb-1"><i class="i-Map mr-2" style="font-size: 12px;"></i>Status</p>
                                <span class="badge badge-pill badge-outline-success p-2 m-1 ml-3" style="font-size: 11px;">Tersedia</span>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-rounded" style="font-size: 11px;" href="detailaset.html">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <!-- end of col-->
        </div>
    </div>
    <br>
    <br>
    <br>

    <!-- fotter end -->
</div>
<div class="action" onclick="actionToggle();">
    <span>+</span>
    <ul>
        <li><img src="images/folder.png"><a href="tambah_asset.html">
                <h5 style="font-weight: 700;">Tambah Data Aset</h5>
            </a></li>
        <li><img src="images/folderss.png"><a href="tambah_jenis_asset.html">
                <h5 style="font-weight: 700;">Tambah Jenis Aset</h5>
            </a></li>
    </ul>
</div>
<br>
<br>
<br>
@endsection

@section('moreJS')
<script src=" {{asset('assets/js/plugins/datatables.min.js')}} "></script>
<script src=" {{asset('assets/js/scripts/datatables.script.min.js')}} "></script>
<script src=" {{asset('assets/js/plugins/sweetalert2.min.js')}}"></script>
<script src=" {{asset('assets/js/scripts/sweetalert.script.min.js')}}"></script>
<script>
    var table = $('#asset_table').DataTable({
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
    var lastdata = NULL;

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