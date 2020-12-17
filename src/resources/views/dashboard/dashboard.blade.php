@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
@endsection

@section('content')
<div class="breadcrumb">
    <h1>Dashboard </h1>
</div>

<br>

<div class="row">
    <div class="col-md-12">
        <div class="card o-hidden mb-4">
            <div class="card-header d-flex align-items-center">
                <h3 class="float-left card-title m-2">Data Barang Digunakan</h3>
            </div>
            <div class="card-body">
                <div class="ul-widget-body">
                    <div class="ul-widget3">
                        <div class="ul-widget6__item--table">
                            <table class="display table table-striped table-bordered" id="alternative_pagination_table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Waktu Penggunaan</th>
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
                                            </a><span>17.29 WIB </span></td>
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
                                            </a><span>17.29 WIB </span></td>
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
                                            </a><span>17.29 WIB </span></td>
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
                                            </a><span>17.29 WIB </span></td>
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
                                            </a><span>17.29 WIB </span></td>
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
                                            </a><span>17.29 WIB </span></td>
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
                                            </a><span>17.29 WIB </span></td>
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
                                            </a><span>17.29 WIB </span></td>
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
    </div>
    <!-- end of col-->
</div>
@endsection

@section('moreJS')
<script src=" {{asset('assets/js/plugins/datatables.min.js')}} "></script>
<script src=" {{asset('assets/js/scripts/datatables.script.min.js')}} "></script>
@endsection