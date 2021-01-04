@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="row">
    <a href="{{url('dashboard')}}" class="nav-link"><img src="{{asset('assets/images/previous.png')}}" height="20px" height="20px"></a>
    <div class="breadcrumb pt-2 ml-2">
        <h1>Detail Aset</h1>
    </div>
</div>
<!--  end of col -->
<!--  end of col -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row px-3 py-3">
                    <div class="col-lg-3">
                        <!-- Product image -->
                        <a href="javascript: void(0);" class="text-center d-block mb-4">
                            <img src="{{asset('assets/images/qr.png')}}" class="img-thumbnail img-preview" style="max-width: 280px;" alt="Product-img" />
                        </a>
                        <br>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-9">
                        <form class="pl-lg-4">
                            <!-- Product title -->
                            <br>
                            <h3 class="mt-0"><strong>Nama Asset</strong><a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h3>
                            <h6 class="mb-1" style="font-size: 18px;">010203-Kode Asset</h6>
                            <p class="font-16">
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                            </p>

                            <!-- Waktu Peminjaman -->
                            <div class="mt-4">
                                <p class="text-primary mb-1"><i class="i-Calendar text-16 mr-2 "></i>Waktu Peminjaman</p>
                                <span><strong>27 Januari 2020</strong></span> | 13.29 WIB
                            </div>
                            <br>
                            <div class="bordered_1px"></div>

                            <!-- Aset information -->
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <h6 class="font-14">Status:</h6>
                                        <span class="badge badge-pill badge-outline-success p-2 m-1" style="font-size: 14px;">Tersedia</span>
                                        <span class="badge badge-pill badge-outline-warning p-2 m-1" style="font-size: 14px;">Tidak Tersedia</span>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Jenis Aset:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;">Nama Jenis Aset</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Satuan:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;">Unit</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Lokasi:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px">Lemari - Ruang Administrasi</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
            </div>
            <!-- end card-body-->
        </div>
        <!-- end card-->
    </div>
    <!-- end col-->
</div>
<br>
<br>
<br>

<!-- fotter end -->
@endsection

@section('moreJS')
<script src=" {{asset('assets/js/plugins/datatables.min.js')}} "></script>
<script src=" {{asset('assets/js/scripts/datatables.script.min.js')}} "></script>
<script src=" {{asset('assets/js/plugins/sweetalert2.min.js')}}"></script>
<script src=" {{asset('assets/js/scripts/sweetalert.script.min.js')}}"></script>
<script src=" {{asset('assets/js/scripts/html5-qrcode.min.js')}}"></script>
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
    function onScanSuccess(qrCodeMessage) {
        // handle on success condition with the decoded message
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
            fps: 10,
            qrbox: 250
        });
    html5QrcodeScanner.render(onScanSuccess);
</script>
@endsection