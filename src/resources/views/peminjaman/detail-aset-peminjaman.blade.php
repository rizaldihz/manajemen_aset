@extends('layout.app-detail')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="row">
    <a onclick="window.history.back()" class="nav-link"><img src="{{asset('assets/images/previous.png')}}" height="20px" height="20px"></a>
    <div class="breadcrumb pt-2 ml-2">
        <h3>Peminjaman Aset</h3>
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
                            <img src="{{url(\Illuminate\Support\Facades\Storage::url($peminjaman->asset->foto))}} " class="img-thumbnail img-preview" style="max-width: 280px;" alt="Product-img" />
                        </a>
                        <br>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-9">
                        <form class="pl-lg-4">
                            <!-- Product title -->
                            <br>
                            <h3 class="mt-0"><strong>{{$peminjaman->asset->nama}}</strong><a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h3>
                            <h6 class="mb-1" style="font-size: 18px;">{{$peminjaman->kode_peminjaman}}</h6>
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
                                <span><strong>{{\Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->isoFormat('dddd, D MMMM Y')}}</strong></span> | {{\Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->isoFormat('HH:mm')}} WIB
                            </div>
                            <br>
                            <div class="bordered_1px"></div>

                            <!-- Aset information -->
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <h6 class="font-14">Status:</h6>
                                        @if($peminjaman->status == 'Kembali')
                                        <span class="badge badge-pill badge-outline-success p-2 m-1" style="font-size: 14px;">Sudah Dikembalikan</span>
                                        @elseif(\Carbon\Carbon::now() > \Carbon\Carbon::parse($peminjaman->tanggal_kembali))
                                        <span class="badge badge-pill badge-outline-danger p-2 m-1" style="font-size: 14px;">Terlambat Mengembalikan</span>
                                        @elseif($peminjaman->status == 'Dipinjam')
                                        <span class="badge badge-pill badge-outline-warning p-2 m-1" style="font-size: 14px;">Belum Dikembalikan</span>
                                        @endif
                                        
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Peminjam Aset:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;">{{$peminjaman->user->nama}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Jenis Aset:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;">{{$peminjaman->asset->jenisasset->nama}}</p>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <h6 class="font-14">Satuan:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;">Unit</p>
                                    </div> --}}
                                    <div class="col-md-4">
                                        <h6 class="font-14">Lokasi terakhir peminjaman:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px">{{$peminjaman->lokasi}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Tanggal peminjaman:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px"><span><strong>{{\Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->isoFormat('dddd, D MMMM Y')}}</strong></span> | {{\Carbon\Carbon::parse($peminjaman->tanggal_pinjam)->isoFormat('HH:mm')}} WIB</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Tanggal pengembalian:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px"><span><strong>{{\Carbon\Carbon::parse($peminjaman->tanggal_kembali)->isoFormat('dddd, D MMMM Y')}}</strong></span> | {{\Carbon\Carbon::parse($peminjaman->tanggal_kembali)->isoFormat('HH:mm')}} WIB</p>
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
<!-- Bottom Navbar -->
<nav class="navbar navbar-dark bg-primary navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none mt-3" style="
   border-top: 1px solid #d3d3d3;
   box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.2);
   padding-top: 1.5px;
   padding-bottom: 0.25px;
 ">
    <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
            <a href="{{url('data-aset')}}" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg"width="1.5em" height="1.5em" fill="currentColor" class="bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
                    <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/>
                    <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z"/>
                  </svg><br>
                <span style="font-size: 10px">Data Aset</span>
            </a>
        </li>
        @if($peminjaman->status != 'Kembali')
        <li class="nav-item">
            <a href="{{url('scan/kembalikan')}}" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                class="bi bi-upc-scan" viewBox="0 0 16 16">
                <path
                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
                </svg><br>
                <span style="font-size: 10px">Kembalikan</span>
            </a>
        </li>
        @endif
    </ul>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peminjaman Aset</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Peminjam</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kegunaan</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Lokasi</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gray-100" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary"><a href="beranda.html" style="color: rgb(255, 255, 255, 0.7)">Lanjutkan</a></button>
            </div>
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
@endsection