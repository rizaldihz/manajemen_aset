@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')

<div class="breadcrumb">
    <h3>Data Tabel Aset Diklat</h3>
</div>
<!--  end of col -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="ruang1-basic-tab" data-toggle="tab" href="#ruang1Basic" role="tab" aria-controls="ruang1Basic" aria-selected="true">Ruang Administrasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="ruang3-basic-tab" data-toggle="tab" href="#ruang3Basic" role="tab" aria-controls="ruang3Basic" aria-selected="false">Ruang 1</a>
    </li>
    <li class="nav-item">
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
    </li>
</ul>
<br>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" style="margin-bottom: px" id="ruang1Basic" role="tabpanel" aria-labelledby="ruang1-basic-tab">
        <!-- end of col-->
        <div class="d-flex justify-content-start">
            <button type="button" class="btn btn-success"><img src="{{asset('assets/images/excel.png')}}" style="width: 16px; height: 16px;" class="mr-2">Export Data</button>
        </div>
        <br>
        <div class="table-responsive">
            <table class="display table table-striped table-bordered" id="asset_table" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Barang</th>
                        <th>Satuan</th>
                        <th>Jumlah</th>
                        <th>No. Inventaris</th>
                        <th>Status</th>
                        <th>Lokasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Proyektor</td>
                        <td>unit</td>
                        <td>Jumlah</td>
                        <td>No. Inventaris</td>
                        <td><span class="badge badge-success">Tersedia</span></td>
                        <td>Lemari</td>
                        <td>
                            <a class="text-success mr-2" href="# "><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="# "><i class="nav-icon i-Close-Window font-weight-bold"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Proyektor</td>
                        <td>unit</td>
                        <td>Jumlah</td>
                        <td>No. Inventaris</td>
                        <td><span class="badge badge-success">Tersedia</span></td>
                        <td>Lemari</td>
                        <td>
                            <a class="text-success mr-2" href="# "><i class="nav-icon i-Pen-2 font-weight-bold"></i></a><a class="text-danger mr-2" href="# "><i class="nav-icon i-Close-Window font-weight-bold"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- end of col-->
    </div>
    <div class="tab-pane fade mb-4" id="ruang3Basic" role="tabpanel" aria-labelledby="ruang3-basic-tab">
        <!-- right control icon-->
        <div class="accordion" id="accordionRightIcon">
            <div class="card">
                <div class="card-header header-elements-inline d-flex justify-content-start align-items-start">
                    <p class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0" style="font-size: 14px; font-weight: 500">
                        <a class="text-default collapsed my-2" data-toggle="collapse" href="#accordion-item-icons-1" aria-expanded="false">1. Nama Asset</a>
                    </p>
                    <span class="badge badge-pill badge-secondary lg p-2 mx-3">12</span>
                </div>
                <div class="collapse" id="accordion-item-icons-1" data-parent="#accordionRightIcon">
                    <div class="card-body">
                        <h4 class="card-title mb-2">List With Badges</h4>
                        <p>
                            Add .list-group-flush to remove some borders and rounded
                            corners to render list group items edge-to-edge in a
                            parent container
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio<span class="badge badge-primary badge-pill">4</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-info badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-success badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-warning badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-danger badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header header-elements-inline d-flex justify-content-start align-items-start">
                    <p class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0" style="font-size: 14px; font-weight: 500">
                        <a class="text-default collapsed my-2" data-toggle="collapse" href="#accordion-item-icons-2" aria-expanded="false">1. Nama Asset</a>
                    </p>
                    <span class="badge badge-pill badge-secondary lg p-2 mx-3">12</span>
                </div>
                <div class="collapse" id="accordion-item-icons-2" data-parent="#accordionRightIcon">
                    <div class="card-body">
                        <h4 class="card-title mb-2">List With Badges</h4>
                        <p>
                            Add .list-group-flush to remove some borders and rounded
                            corners to render list group items edge-to-edge in a
                            parent container
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio<span class="badge badge-primary badge-pill">4</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-info badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-success badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-warning badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-danger badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion" id="accordionRightIcon">
            <div class="card">
                <div class="card-header header-elements-inline d-flex justify-content-start align-items-start">
                    <p class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0" style="font-size: 14px; font-weight: 500">
                        <a class="text-default collapsed my-2" data-toggle="collapse" href="#accordion-item-icons-2" aria-expanded="false">1. Nama Asset</a>
                    </p>
                    <span class="badge badge-pill badge-secondary lg p-2 mx-3">12</span>
                </div>
                <div class="collapse" id="accordion-item-icons-2" data-parent="#accordionRightIcon">
                    <div class="card-body">
                        <h4 class="card-title mb-2">List With Badges</h4>
                        <p>
                            Add .list-group-flush to remove some borders and rounded
                            corners to render list group items edge-to-edge in a
                            parent container
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio<span class="badge badge-primary badge-pill">4</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-info badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-success badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-warning badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-danger badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion" id="accordionRightIcon">
            <div class="card">
                <div class="card-header header-elements-inline d-flex justify-content-start align-items-start">
                    <p class="card-title ul-collapse__icon--size ul-collapse__right-icon mb-0" style="font-size: 14px; font-weight: 500">
                        <a class="text-default collapsed my-2" data-toggle="collapse" href="#accordion-item-icons-3" aria-expanded="false">1. Nama Asset</a>
                    </p>
                    <span class="badge badge-pill badge-secondary lg p-2 mx-3">12</span>
                </div>
                <div class="collapse" id="accordion-item-icons-3" data-parent="#accordionRightIcon">
                    <div class="card-body">
                        <h4 class="card-title mb-2">List With Badges</h4>
                        <p>
                            Add .list-group-flush to remove some borders and rounded
                            corners to render list group items edge-to-edge in a
                            parent container
                        </p>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio<span class="badge badge-primary badge-pill">4</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-info badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-success badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-warning badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus<span class="badge badge-danger badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- fotter end -->
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