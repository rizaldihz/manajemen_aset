@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
@endsection

@section('content')
<div class="breadcrumb">
    <h1>Aset yang Dipinjam</h1>
</div>
<div id="borrowed-card-holder">
</div>
<br>
@if(session()->get('user')->isAdmin())
<div class="breadcrumb">
    <h1>Data Aset Digunakan</h1>
</div>
<div id="all-borrowed-card-holder"> 
</div>
@endif
<br>
<br>
<div class="breadcrumb">
    <h1>Dashboard</h1>
</div>
<div class="text-center">
    <h6>Development lebih lanjut</h6>
</div>
<div class="bordered_1px">
</div>
<!--  end of col -->
<br>
<div class="row">
    {{-- <!-- no 13 chart-->
    <div class="col-md-3 col-lg-3 col-sm-12">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart13"></div>
                    <div class="ul-widget__content-v2">
                        <h4 class="heading mt-3">698 212</h4><small class="text-muted m-0">50% Average</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- no 14 chart-->
    <div class="col-md-3 col-lg-3 col-sm-12">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart14"></div>
                    <div class="ul-widget__content-v2">
                        <h4 class="heading mt-3">369 212</h4><small class="text-muted m-0">24% Average</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- no 15 chart-->
    <div class="col-md-3 col-lg-3 col-sm-12">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart15"></div>
                    <div class="ul-widget__content-v2">
                        <h4 class="heading mt-3">369 212</h4><small class="text-muted m-0">24% Average</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- no 16 chart-->
    <div class="col-md-3 col-lg-3 col-sm-12">
        <div class="card mb-4 o-hidden">
            <div class="card-body">
                <div class="ul-widget__row-v2">
                    <div id="chart16"></div>
                    <div class="ul-widget__content-v2">
                        <h4 class="heading mt-3">369 212</h4><small class="text-muted m-0">24% Average</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card o-hidden mb-4">
            <div class="card-header d-flex align-items-center">
                <h3 class="float-left card-title m-2">Data Barang Digunakan</h3>
            </div>
            <div class="card-body">
                <div class="ul-widget-body">
                    <div class="ul-widget3">
                        <div class="ul-widget6__item--table">
                            <table class="display table table-striped table-bordered" id="" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Waktu Peminjaman</th>
                                        <th scope="col">Pengguna</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Diklat PG</td>
                                        <td><a class="ul-widget4__title d-block" href="">UI
                                                Lib</a>
                                        </td>

                                        <td><a class="ul-widget4__title d-block" href="">27 Januari 2020
                                            </a><span><strong>17.29 WIB</strong> </span></td>
                                        <td>Bapak Rizaldi</td>
                                        <td>
                                            <span class="badge badge-pill badge-outline-warning p-2 m-1">Tidak
                                                Tersedia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Diklat PG</td>
                                        <td><a class="ul-widget4__title d-block" href="">UI
                                                Lib</a>
                                        </td>

                                        <td><a class="ul-widget4__title d-block" href="">27 Januari 2020
                                            </a><span><strong>17.29 WIB</strong> </span></td>
                                        <td>Bapak Rizaldi</td>
                                        <td>
                                            <span class="badge badge-pill badge-outline-warning p-2 m-1">Tidak
                                                Tersedia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Diklat PG</td>
                                        <td><a class="ul-widget4__title d-block" href="">UI
                                                Lib</a>
                                        </td>

                                        <td><a class="ul-widget4__title d-block" href="">27 Januari 2020
                                            </a><span><strong>17.29 WIB</strong> </span></td>
                                        <td>Bapak Rizaldi</td>
                                        <td>
                                            <span class="badge badge-pill badge-outline-warning p-2 m-1">Tidak
                                                Tersedia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Diklat PG</td>
                                        <td><a class="ul-widget4__title d-block" href="">UI
                                                Lib</a>
                                        </td>

                                        <td><a class="ul-widget4__title d-block" href="">27 Januari 2020
                                            </a><span><strong>17.29 WIB</strong> </span></td>
                                        <td>Bapak Rizaldi</td>
                                        <td>
                                            <span class="badge badge-pill badge-outline-warning p-2 m-1">Tidak
                                                Tersedia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Diklat PG</td>
                                        <td><a class="ul-widget4__title d-block" href="">UI
                                                Lib</a>
                                        </td>

                                        <td><a class="ul-widget4__title d-block" href="">27 Januari 2020
                                            </a><span><strong>17.29 WIB</strong> </span></td>
                                        <td>Bapak Rizaldi</td>
                                        <td>
                                            <span class="badge badge-pill badge-outline-warning p-2 m-1">Tidak
                                                Tersedia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Diklat PG</td>
                                        <td><a class="ul-widget4__title d-block" href="">UI
                                                Lib</a>
                                        </td>

                                        <td><a class="ul-widget4__title d-block" href="">27 Januari 2020
                                            </a><span><strong>17.29 WIB</strong> </span></td>
                                        <td>Bapak Rizaldi</td>
                                        <td>
                                            <span class="badge badge-pill badge-outline-warning p-2 m-1">Tidak
                                                Tersedia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Diklat PG</td>
                                        <td><a class="ul-widget4__title d-block" href="">UI
                                                Lib</a>
                                        </td>

                                        <td><a class="ul-widget4__title d-block" href="">27 Januari 2020
                                            </a><span><strong>17.29 WIB</strong> </span></td>
                                        <td>Bapak Rizaldi</td>
                                        <td>
                                            <span class="badge badge-pill badge-outline-warning p-2 m-1">Tidak
                                                Tersedia</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Diklat PG</td>
                                        <td><a class="ul-widget4__title d-block" href="">UI
                                                Lib</a>
                                        </td>

                                        <td><a class="ul-widget4__title d-block" href="">27 Januari 2020
                                            </a><span><strong>17.29 WIB</strong> </span></td>
                                        <td>Bapak Rizaldi</td>
                                        <td>
                                            <span class="badge badge-pill badge-outline-warning p-2 m-1">Tidak
                                                Tersedia</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end of col-->

    {{-- <div class="col-lg-6 col-xl-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="ul-widget__head">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">Aktivitas Terakhir</h3>
                    </div>
                    <div class="ul-widget__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#__g-widget-s7-tab1-content" role="tab" aria-selected="true">Hari ini</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget-s7-tab2-content" role="tab" aria-selected="false">Minggu ini</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget-s7-tab3-content" role="tab" aria-selected="false">Bulan ini</a></li>
                        </ul>
                    </div>
                </div>
                <div class="ul-widget__body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="__g-widget-s7-tab1-content">
                            <div class="ul-widget-s7n">
                                <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle" style="font-size: 11px;">27 Januari 2020 <br> 17.29 WIB</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="ul-vertical-line bg-success"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        <a style="font-size: 14px;" href="">Pengembalian + "Nama Barang"</a>
                                        <br> <strong>Nama Peminjam</strong>
                                    </div>
                                </div>
                                <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle" style="font-size: 11px;">27 Januari 2020 <br> 17.29 WIB</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="ul-vertical-line bg-warning"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        <a style="font-size: 14px;" href="">Peminjaman + "Nama Barang"</a>
                                        <br> <strong>Nama Peminjam</strong>
                                    </div>
                                </div>
                                <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle" style="font-size: 11px;">27 Januari 2020 <br> 17.29 WIB</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="ul-vertical-line bg-warning"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        <a style="font-size: 14px;" href="">Peminjaman + "Nama Barang"</a>
                                        <br> <strong>Nama Peminjam</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="__g-widget-s7-tab2-content">
                            <div class="ul-widget-s7n">
                                <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle" style="font-size: 11px;">27 Januari 2020 <br> 17.29 WIB</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="ul-vertical-line bg-success"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        <a style="font-size: 14px;" href="">Pengembalian + "Nama Barang"</a>
                                        <br> <strong>Nama Peminjam</strong>
                                    </div>
                                </div>
                                <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle" style="font-size: 11px;">27 Januari 2020 <br> 17.29 WIB</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="ul-vertical-line bg-warning"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        <a style="font-size: 14px;" href="">Peminjaman + "Nama Barang"</a>
                                        <br> <strong>Nama Peminjam</strong>
                                    </div>
                                </div>
                                <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle" style="font-size: 11px;">27 Januari 2020 <br> 17.29 WIB</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="ul-vertical-line bg-warning"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        <a style="font-size: 14px;" href="">Peminjaman + "Nama Barang"</a>
                                        <br> <strong>Nama Peminjam</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="__g-widget-s7-tab3-content">
                            <div class="ul-widget-s7n">
                                <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle" style="font-size: 11px;">27 Januari 2020 <br> 17.29 WIB</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="ul-vertical-line bg-success"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        <a style="font-size: 14px;" href="">Pengembalian + "Nama Barang"</a>
                                        <br> <strong>Nama Peminjam</strong>
                                    </div>
                                </div>
                                <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle" style="font-size: 11px;">27 Januari 2020 <br> 17.29 WIB</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="ul-vertical-line bg-warning"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        <a style="font-size: 14px;" href="">Peminjaman + "Nama Barang"</a>
                                        <br> <strong>Nama Peminjam</strong>
                                    </div>
                                </div>
                                <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle" style="font-size: 11px;">27 Januari 2020 <br> 17.29 WIB</span>
                                    <div class="ul-widget-s7__item-circle">
                                        <p class="ul-vertical-line bg-warning"></p>
                                    </div>
                                    <div class="ul-widget-s7__item-text">
                                        <a style="font-size: 14px;" href="">Peminjaman + "Nama Barang"</a>
                                        <br> <strong>Nama Peminjam</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-xl-6 mb-4">
        <div class="card">
            <div class="card-body">
                <div class="ul-widget__head">
                    <div class="ul-widget__head-label">
                        <h3 class="ul-widget__head-title">Ketersediaan Barang</h3>
                    </div>
                    <div class="ul-widget__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#__g-widget-s7-tab1-content" role="tab" aria-selected="true">Hari ini</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget-s7-tab2-content" role="tab" aria-selected="false">Minggu ini</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget-s7-tab3-content" role="tab" aria-selected="false">Bulan ini</a></li>
                        </ul>
                    </div>
                </div>
                <div class="ul-widget__body">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="__g-widget-s7-tab1-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 rounded d-flex align-items-center bg-primary text-white"><i class="i-Data-Backup text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1 text-white">Backups</h4><span>Total: 32</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 rounded d-flex align-items-center bg-primary text-white"><i class="i-Big-Data text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1 text-white">Databases</h4><span>Total: 302</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 border border-light rounded d-flex align-items-center"><i class="i-Data-Cloud text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1">Space used</h4><span>Total: 160GB</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 border border-light rounded d-flex align-items-center"><i class="i-Data-Download text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1">Downloaded</h4><span>Total: 30GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="__g-widget-s7-tab2-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 rounded d-flex align-items-center bg-primary text-white"><i class="i-Data-Backup text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1 text-white">Backups</h4><span>Total: 32</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 rounded d-flex align-items-center bg-primary text-white"><i class="i-Big-Data text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1 text-white">Databases</h4><span>Total: 302</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 border border-light rounded d-flex align-items-center"><i class="i-Data-Cloud text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1">Space used</h4><span>Total: 160GB</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 border border-light rounded d-flex align-items-center"><i class="i-Data-Download text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1">Downloaded</h4><span>Total: 30GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="__g-widget-s7-tab3-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 rounded d-flex align-items-center bg-primary text-white"><i class="i-Data-Backup text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1 text-white">Backups</h4><span>Total: 32</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 rounded d-flex align-items-center bg-primary text-white"><i class="i-Big-Data text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1 text-white">Databases</h4><span>Total: 302</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 border border-light rounded d-flex align-items-center"><i class="i-Data-Cloud text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1">Space used</h4><span>Total: 160GB</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="p-4 border border-light rounded d-flex align-items-center"><i class="i-Data-Download text-32 mr-3"></i>
                                        <div>
                                            <h4 class="text-18 mb-1">Downloaded</h4><span>Total: 30GB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- left-side-->
</div>
{{-- <div class="row">
    <!-- left-side-->
    <div class="col-lg-6 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title m-0">Network Stats</div>
                        <p class="text-small text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="p-4 rounded d-flex align-items-center bg-primary text-white"><i class="i-Data-Backup text-32 mr-3"></i>
                                    <div>
                                        <h4 class="text-18 mb-1 text-white">Backups</h4><span>Total: 32</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="p-4 rounded d-flex align-items-center bg-primary text-white"><i class="i-Big-Data text-32 mr-3"></i>
                                    <div>
                                        <h4 class="text-18 mb-1 text-white">Databases</h4><span>Total: 302</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="p-4 border border-light rounded d-flex align-items-center"><i class="i-Data-Cloud text-32 mr-3"></i>
                                    <div>
                                        <h4 class="text-18 mb-1">Space used</h4><span>Total: 160GB</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="p-4 border border-light rounded d-flex align-items-center"><i class="i-Data-Download text-32 mr-3"></i>
                                    <div>
                                        <h4 class="text-18 mb-1">Downloaded</h4><span>Total: 30GB</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="ul-widget__head">
                            <div class="ul-widget__head-label">
                                <h3 class="ul-widget__head-title">Recent Notifications</h3>
                            </div>
                            <div class="ul-widget__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold ul-widget-nav-tabs-line" role="tablist">
                                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#__g-widget-s7-tab1-content" role="tab" aria-selected="true">Today</a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#__g-widget-s7-tab2-content" role="tab" aria-selected="false">Month</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ul-widget__body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="__g-widget-s7-tab1-content">
                                    <div class="ul-widget-s7n">
                                        <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle">10:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-primary"></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor<br> incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                        <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle">08:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-success"></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor<br> incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                        <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle">13:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-danger"></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor<br> incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time ul-middle">05:30</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-warning"></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor<br> incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="__g-widget-s7-tab2-content">
                                    <div class="ul-widget-s7n">
                                        <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle">12:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-danger"></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor<br> incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                        <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle">08:00</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-info"></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor<br> incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                        <div class="ul-widget-s7__items mb-4"><span class="ul-widget-s7__item-time ul-middle">04:30</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-warning"></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor<br> incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                        <div class="ul-widget-s7__items"><span class="ul-widget-s7__item-time ul-middle">05:30</span>
                                            <div class="ul-widget-s7__item-circle">
                                                <p class="ul-vertical-line bg-dark"></p>
                                            </div>
                                            <div class="ul-widget-s7__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                                tempor<br> incididunt ut labore et dolore magna
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- right-side-->
    <div class="col-lg-6 col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title"> Basic Column chart</div>
                        <div id="basicColumn-chart"></div>
                    </div>
                </div>
            </div>
            <div class="mt-3 mb-4 col-lg-12 col-xl-12">
                <div class="card text-center border-primary">
                    <!-- -->
                    <div class="card-header bg-primary text-white">
                        <div>Developers</div>
                    </div>
                    <div class="card-body">
                        <!-- -->
                        <!-- -->
                        <div class="ul-widget5">
                            <div class="ul-widget-s5__item mb-5">
                                <div class="ul-widget-s5__content">
                                    <div class="ul-widget-s5__pic"><img id="userDropdown" src=" {{asset('assets/images/faces/1.jpg')}} " alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget-s5__section"><a class="ul-widget4__title" href="#">Great Logo Designn</a>
                                        <p class="ul-widget-s5__desc">UI LIb admin themes.</p>
                                    </div>
                                </div>
                                <div class="ul-widget-s5__content">
                                    <div class="ul-widget-s5__progress">
                                        <div class="ul-widget-s5__stats"><span>50%</span><span>London</span></div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="25" style="width: 25%;">25</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary" type="button">Follow</button>
                                </div>
                            </div>
                            <div class="ul-widget-s5__item mb-5">
                                <div class="ul-widget-s5__content">
                                    <div class="ul-widget-s5__pic"><img id="userDropdown" src=" {{asset('assets/images/faces/2.jpg')}} " alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget-s5__section"><a class="ul-widget4__title" href="#">Great Logo Designn</a>
                                        <p class="ul-widget-s5__desc">UI LIb admin themes.</p>
                                    </div>
                                </div>
                                <div class="ul-widget-s5__content">
                                    <div class="ul-widget-s5__progress">
                                        <div class="ul-widget-s5__stats"><span>75%</span><span>U.S</span></div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="75" style="width: 75%;">75</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-success" type="button">Follow</button>
                                </div>
                            </div>
                            <div class="ul-widget-s5__item mb-5">
                                <div class="ul-widget-s5__content">
                                    <div class="ul-widget-s5__pic"><img id="userDropdown" src=" {{asset('assets/images/faces/3.jpg')}} " alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" /></div>
                                    <div class="ul-widget-s5__section"><a class="ul-widget4__title" href="#">Frontend Developer</a>
                                        <p class="ul-widget-s5__desc">UI LIb admin themes.</p>
                                    </div>
                                </div>
                                <div class="ul-widget-s5__content">
                                    <div class="ul-widget-s5__progress">
                                        <div class="ul-widget-s5__stats"><span>30%</span><span>Finland</span></div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="30" style="width: 30%;">30</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-danger" type="button">Follow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->
                    <!-- -->
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- fotter end -->
@endsection

@section('moreJS')
<script src=" {{asset('assets/js/plugins/datatables.min.js')}} "></script>
<script src=" {{asset('assets/js/scripts/datatables.script.min.js')}} "></script>
<script>
@if(session()->get('user')->isAdmin())
$.ajax({
        url: '{{url("peminjaman/get")}}',
        type: 'post',
        data: {
            tipe: 'populate',
            "_token": "{{ csrf_token() }}",
        },
        success: function(response) {
            console.log(response['data'].length);
            if(response['data'].length === 0)
            {
                $("#all-borrowed-card-holder").html("<p class='text-secondary mb-1 text-14'>Sedang tidak meminjam</p>");
            }
            else{
                var toadd='';
                data = response;
                $.each(data,function(i,member){
                    for(var i in member){
                        time = member[i].tanggal_kembali_raw.split(", ")
                        toadd = toadd+"<div>\
                                            <div class='card mb-4'>\
                                                <div class='card-header d-flex justify-content-between mb-1'>\
                                                    <p style='font-size: 12px;' class='align-self-center mb-0'>"+member[i].kode_peminjaman+"</p>\
                                                    <a class='btn btn-primary btn-rounded' href='"+member[i].link+"' style='font-size: 9px;'>Selengkapnya</a>\
                                                </div>\
                                                <div class='card-body'>\
                                                    <h5 class='card-title' style='font-size: 20px; font-weight: 700;'>"+member[i].asset.nama+"</h5>\
                                                    <p class='text-secondary mb-1 text-16'><i class='i-MaleFemale text-16 mr-2'></i>"+member[i].user.nama+"</p>\
                                                    <p class='text-secondary mb-1 text-14'><i class='i-Calendar text-16 mr-2 '></i> <span><strong>"+time[0]+", "+time[1]+"</strong></span> | "+time[2]+" WIB</p>\
                                                </div>\
                                            </div>\
                                        </div>";
                        $("#all-borrowed-card-holder").html(toadd);
                    }
                });
            }
        },
        error: function (request, error) {
            swal(
                'Mohon maaf :(',
                'Data tidak ditemukan!',
                'error'
            );
        },
    });
@endif
$.ajax({
        url: '{{url("peminjaman/get")}}',
        type: 'post',
        data: {
            uid: '{{session()->get("user")->id}}',
            tipe: 'selfborrowed',
            "_token": "{{ csrf_token() }}",
        },
        success: function(response) {
            console.log(response['data'].length);
            if(response['data'].length === 0)
            {
                $("#borrowed-card-holder").html("<p class='text-secondary mb-1 text-14'>Sedang tidak meminjam</p>");
            }
            else{
                var toadd='';
                data = response;
                $.each(data,function(i,member){
                    for(var i in member){
                        time = member[i].tanggal_kembali_raw.split(", ")
                        toadd = toadd+"<div>\
                                            <div class='card mb-4'>\
                                                <div class='card-header d-flex justify-content-between mb-1'>\
                                                    <p style='font-size: 12px;' class='align-self-center mb-0'>"+member[i].kode_peminjaman+"</p>\
                                                    <a class='btn btn-primary btn-rounded' href='"+member[i].link+"' style='font-size: 9px;'>Selengkapnya</a>\
                                                </div>\
                                                <div class='card-body'>\
                                                    <h5 class='card-title text-20' style='font-size: 20px; font-weight: 700;'>"+member[i].asset.nama+"</h5>\
                                                    <p class='text-secondary mb-1 text-14'><i class='i-Calendar text-20 mr-2 mt-2'></i><span class='text-16'><strong>"+time[0]+", "+time[1]+"</strong> | "+time[2]+" WIB </span></p>\
                                                </div>\
                                            </div>\
                                        </div>";
                        $("#borrowed-card-holder").html(toadd);
                    }
                });
            }
        },
        error: function (request, error) {
            swal(
                'Mohon maaf :(',
                'Data tidak ditemukan!',
                'error'
            );
        },
    });
    
</script>
@endsection