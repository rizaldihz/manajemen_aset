@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="fixed-top px-4" style="
              top: 70px;
              background: #fff;
              z-index: 3;
              box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.1);
            ">
    <div class="breadcrumb pt-4">
        <h1>Data Aset Diklat</h1>
    </div>
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
</div>
<!--  end of col -->

<br>
<br>
<br>
<br>
<br>
<div class="tab-content mt-1" id="myTabContent">
    <div class="tab-pane fade show active" style="margin-bottom: 36px" id="ruang1Basic" role="tabpanel" aria-labelledby="ruang1-basic-tab">
        <!-- end of col-->

        <div class="annotated-list form-group mb-3" id="assets">
            <input class="search form-control form-control-rounded" style="width: 100%; height: 3.25em;" placeholder="Search by name" />
            <button class="sort btn btn-light btn-rounded btn-sm mt-1 mr-1" data-sort="name" style="font-size: 12px;">Sort by Nama
                Aset</button>
            <button class="sort btn btn-light btn-rounded btn-sm mt-1 ml-1" data-sort="status" style="font-size: 12px;">Sort by
                Status Aset</button>

            <div class="list">
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <p style="font-size: 12px" class="align-self-center">
                            010203-Kode Asset
                        </p>
                        <a class="btn btn-primary btn-rounded" href="detailaset.html" style="font-size: 9px">Selengkapnya</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3 name" style="font-size: 22px">
                            Nama Aset 5
                        </h5>
                        <p class="text-secondary mb-1 text-16">
                            <i class="i-Home1 mr-3" style="font-size: 14px; font-weight: 600"></i>Ruang
                            Administrasi
                        </p>
                        <p class="text-secondary status">
                            <span class="badge badge-primary" style="font-size: 16px">Tidak Tersedia</span>
                        </p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <p style="font-size: 12px" class="align-self-center">
                            010203-Kode Asset
                        </p>
                        <a class="btn btn-primary btn-rounded" href="detailaset.html" style="font-size: 9px">Selengkapnya</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3 name" style="font-size: 22px">
                            Nama Aset 3
                        </h5>
                        <p class="text-secondary mb-1 text-16">
                            <i class="i-Home1 mr-3" style="font-size: 14px; font-weight: 600"></i>Ruang
                            Administrasi
                        </p>
                        <p class="text-secondary status">
                            <span class="badge badge-success" style="font-size: 16px">Tersedia</span>
                        </p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <p style="font-size: 12px" class="align-self-center">
                            010203-Kode Asset
                        </p>
                        <a class="btn btn-primary btn-rounded" href="detailaset.html" style="font-size: 9px">Selengkapnya</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3 name" style="font-size: 22px">
                            Nama Aset 2
                        </h5>
                        <p class="text-secondary mb-1 text-16">
                            <i class="i-Home1 mr-3" style="font-size: 14px; font-weight: 600"></i>Ruang
                            Administrasi
                        </p>
                        <p class="text-secondary status">
                            <span class="badge badge-success" style="font-size: 16px">Tersedia</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of col-->
    </div>
    <div class="tab-pane fade show" style="margin-bottom: 36px" id="ruang3Basic" role="tabpanel" aria-labelledby="ruang3-basic-tab">
        <!-- end of col-->
        <div class="annotated-list form-group mb-3" id="assets2">
            <input class="search form-control form-control-rounded" style="width: 100%; height: 3em;" placeholder="Search by name" />
            <button class="sort btn btn-light btn-rounded btn-sm mt-1 mr-1" data-sort="name" style="font-size: 12px;">Sort by Nama
                Aset</button>
            <button class="sort btn btn-light btn-rounded btn-sm mt-1 ml-1" data-sort="status" style="font-size: 12px;">Sort by
                Status Aset</button>

            <div class="list">
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <p style="font-size: 12px" class="align-self-center">
                            010203-Kode Asset
                        </p>
                        <a class="btn btn-primary btn-rounded" href="detailaset.html" style="font-size: 9px">Selengkapnya</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3 name" style="font-size: 22px">
                            Nama Aset 2
                        </h5>
                        <p class="text-secondary mb-1 text-16">
                            <i class="i-Home1 mr-3" style="font-size: 14px; font-weight: 600"></i>Ruang
                            Administrasi
                        </p>
                        <p class="text-secondary status">
                            <span class="badge badge-success" style="font-size: 16px">Tersedia</span>
                        </p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <p style="font-size: 12px" class="align-self-center">
                            010203-Kode Asset
                        </p>
                        <a class="btn btn-primary btn-rounded" href="detailaset.html" style="font-size: 9px">Selengkapnya</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3 name" style="font-size: 22px">
                            Nama Aset 5
                        </h5>
                        <p class="text-secondary mb-1 text-16">
                            <i class="i-Home1 mr-3" style="font-size: 14px; font-weight: 600"></i>Ruang
                            Administrasi
                        </p>
                        <p class="text-secondary status">
                            <span class="badge badge-primary" style="font-size: 16px">Tidak Tersedia</span>
                        </p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <p style="font-size: 12px" class="align-self-center">
                            010203-Kode Asset
                        </p>
                        <a class="btn btn-primary btn-rounded" href="detailaset.html" style="font-size: 9px">Selengkapnya</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3 name" style="font-size: 22px">
                            Nama Aset 3
                        </h5>
                        <p class="text-secondary mb-1 text-16">
                            <i class="i-Home1 mr-3" style="font-size: 14px; font-weight: 600"></i>Ruang
                            Administrasi
                        </p>
                        <p class="text-secondary status">
                            <span class="badge badge-success" style="font-size: 16px; margin-bottom: 2px;">Tersedia</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of col-->
    </div>
</div>
<br>
<br>
<!-- fotter end -->

</div>
<div class="action" onclick="actionToggle();">
    <span>+</span>
    <ul>
        <li><img src="{{asset('assets/images/folder.png')}}"><a href="tambah_asset.html">
                <h5 style="font-weight: 700;">Tambah Data Aset</h5>
            </a></li>
        <li><img src="{{asset('assets/images/folderss.png')}}"><a href="tambah_jenis_asset.html">
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
<script type="text/javascript">
    function actionToggle() {
        var action = document.querySelector('.action');
        action.classList.toggle('active')
    }
</script>
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

<script>
        var options = {
            valueNames: ['name', 'status']
        };

        var userList = new List('assets', options);
    </script>
    <script>
        var options2 = {
            valueNames: ['name', 'status']
        };

        var userList = new List('assets2', options2);
    </script>
    
@endsection