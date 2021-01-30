@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="/assets/css/plugins/datatables.min.css" />
<link rel="stylesheet" href="/assets/css/plugins/sweetalert2.min.css" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="row">
    <a href="javascript:window.history.back();" class="nav-link"><img src="/assets/images/previous.png" height="20px" height="20px"></a>
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
                            <img src="{{$asset->imgurl}}" class="img-thumbnail img-preview" style="max-width: 280px;" alt="Product-img" />
                        </a>
                        <br>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-9 mb-3">
                        <form class="pl-lg-4">
                            <!-- Product title -->
                            <br>
                            <h3 class="mt-0"><strong>{{$asset->nama}}</strong><a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h3>
                            <h6 class="mb-1" style="font-size: 18px;">{{$asset->kode_aset}}</h6>
                            <p class="font-16">
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                            </p>
                            <div class="bordered_1px"></div>

                            <!-- Aset information -->
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <h6 class="font-14">Status:</h6>
                                        @if($asset->status)
                                        <span class="badge badge-pill badge-outline-warning p-2 m-1" style="font-size: 14px;">Tidak Tersedia</span>
                                        @else
                                        <span class="badge badge-pill badge-outline-success p-2 m-1" style="font-size: 14px;">Tersedia</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Jenis Aset:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;">{{$asset->jenisasset->nama}}</p>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <h6 class="font-14">Satuan:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;">Unit</p>
                                    </div> --}}
                                    <div class="col-md-4 mb-3">
                                        <h6 class="font-14">Lokasi:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px">{{$asset->lokasi}}</p>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div class="d-flex justify-content-start">
                                            <a href="javascript:toggleCode('{{$asset->id}}')" type="button" class="btn btn-primary"><i class="nav-icon fas fa-qrcode font-weight-bold "></i> Lihat QRCode</a>
                                        </div>
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
<div class="modal fade" id="modalDetailAset" tabindex="-1" role="dialog" aria-labelledby="modalDetailAset" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">QR Code</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- fotter end -->
@endsection

@section('moreJS')
<script src="/assets/js/plugins/datatables.min.js"></script>
<script src="/assets/js/scripts/datatables.script.min.js"></script>
<script src="/assets/js/plugins/sweetalert2.min.js"></script>
<script src="/assets/js/scripts/sweetalert.script.min.js"></script>
<script src="/assets/js/scripts/html5-qrcode.min.js"></script>
<script>
    function toggleCode(params) {
        // $('#modalDetailAset .modal-title').html("QR Code")
        // $('#modalDetailAset .modal-body').html("<div class='row'><div class='col-12'><img src='{{url('/')}}/asset/code/" + params + "'></div></div>");
        // $('#modalDetailAset').modal('show');
        var win = window.open("{{url('/')}}/asset/code/" + params, '_blank');
        win.focus();
    }
</script>
@endsection