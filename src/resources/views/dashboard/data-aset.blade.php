@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="fixed-top px-4 d-" style="
              top: 70px;
              background: #fff;
              z-index: 3;
              box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.1);
            ">
    <div class="breadcrumb pt-4">
        <h3>Data Aset Diklat</h3>
    </div>
    <div class="form-group">
        <label class="col-form-label">Jenis Asset</label>
        <select class="form-control" id='select_jenis_asset'>
            <option value="" selected disabled hidden>Choose here</option>
            @if(!$jenis_assets->isEmpty())
            @foreach($jenis_assets as $jenis_asset)
            <option value='{"id":"{{$jenis_asset->id}}","tab":"{{strtolower(str_replace(" ", "",$jenis_asset->nama))}}"}' data-toggle="tab" href="#{{strtolower(str_replace(" ", "",$jenis_asset->nama))}}Basic" role="tab" aria-controls="{{strtolower(str_replace(" ", "",$jenis_asset->nama))}}Basic">{{$jenis_asset->nama}}</option>
            @endforeach
            @endif
        </select>
    </div>
    <ul class="nav nav-tabs" id="myTab" role="tablist" hidden>
        @if($jenis_assets->count())
        @php
        $i=0;
        @endphp
        @foreach ($jenis_assets as $jenis_asset)
            <li class="nav-item">
                <a class="nav-link @if($i==0)active @endif" id="{{strtolower(str_replace(" ", "-",$jenis_asset->nama))}}-basic-tab" data-toggle="tab" href="#{{strtolower(str_replace(" ", "",$jenis_asset->nama))}}Basic" role="tab" aria-controls="{{strtolower(str_replace(" ", "",$jenis_asset->nama))}}Basic" aria-selected="true" onclick="load('{{$jenis_asset->id}}','{{strtolower(str_replace(" ", "",$jenis_asset->nama))}}')">{{$jenis_asset->nama}}</a>
            </li>
            @php
            $i++; 
            @endphp
        @endforeach
        @endif
    </ul>
</div>

<br>
<br>
<br>
<br>
<br>
<div class="tab-content mt-4" id="myTabContent">
    @if($jenis_assets->count())
    @php
    $i=0;
    @endphp
        @foreach ($jenis_assets as $jenis_asset)
    <div class="tab-pane fade show @if($i==0)active @endif" style="margin-bottom: 36px" id="{{strtolower(str_replace(" ", "",$jenis_asset->nama))}}Basic" role="tabpanel" aria-labelledby="{{strtolower(str_replace(" ", "-",$jenis_asset->nama))}}-tab">
        <!-- end of col-->
        <div class="annotated-list form-group mb-3" id="assets">
            {{-- <input class="search form-control form-control-rounded" style="width: 100%; height: 3.25em;" placeholder="Search by name" />
            <button class="sort btn btn-light btn-rounded btn-sm mt-1 mr-1" data-sort="name" style="font-size: 12px;">Sort by Nama
                Aset</button>
            <button class="sort btn btn-light btn-rounded btn-sm mt-1 ml-1" data-sort="status" style="font-size: 12px;">Sort by
                Status Aset</button> --}}

            <div class="list" id="to-fill-{{strtolower(str_replace(" ", "",$jenis_asset->nama))}}">
            </div>
        </div>
        <!-- end of col-->
    </div>
            @php
            $i++; 
            @endphp
        @endforeach
    @endif
</div>
<br>
<br>
<!-- fotter end -->

</div>
<div class="action" onclick="actionToggle();">
    <span>+</span>
    <ul>
        <li><img src="{{asset('assets/images/folder.png')}}"><a data-toggle="modal" data-target="#modalTambahAset">
                <h5 style="font-weight: 700;">Tambah Data Aset</h5>
            </a></li>
        <li><img src="{{asset('assets/images/folderss.png')}}"><a data-toggle="modal" data-target="#modalTambahJenis">
                <h5 style="font-weight: 700;">Tambah Jenis Aset</h5>
            </a></li>
    </ul>
</div>
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
                            @if(!$jenis_assets->isEmpty())
                            @foreach($jenis_assets as $jenis_asset)
                            <option value="{{$jenis_asset->id}}">{{$jenis_asset->nama}}</option>
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
</div>
<div class="modal fade" id="modalTambahJenis" tabindex="-1" role="dialog" aria-labelledby="modalTambahJenis" aria-hidden="true">
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
    var lastdata = [];
    function load(id,name){
        if(!lastdata.includes(name))
            $.ajax({
                url: '{{url("asset/get")}}',
                type: 'post',
                data: {
                    tipe: 'getall',
                    "_token": "{{ csrf_token() }}",
                    id: id
                },
                success: function(response) {
                    lastdata.push(name)
                    console.log(response['data'].length);
                    if(response['data'].length === 0)
                    {
                        $("#to-fill-"+name).html("<p class='text-secondary mb-1 text-14'>Tidak Ada Asset yang terdaftar</p>");
                    }
                    else{
                        var toadd='';
                        data = response;
                        $.each(data,function(i,member){
                            for(var i in member){
                                status_tag = ""
                                if(member[i].status == 0){
                                    status_tag = "<span class='badge badge-success' style='font-size: 16px'>Tersedia</span>"
                                }else{
                                    status_tag = "<span class='badge badge-primary' style='font-size: 16px'>Tidak Tersedia</span>"
                                }
                                toadd = toadd+"<div class='card mb-3'>\
                                                    <div class='card-header d-flex justify-content-between'>\
                                                        <p style='font-size: 12px' class='align-self-center'>"+member[i].kode_aset+"</p>\
                                                        <a class='btn btn-primary btn-rounded' href='"+member[i].url+"' style='font-size: 9px'>Selengkapnya</a>\
                                                    </div>\
                                                    <div class='card-body'>\
                                                        <h5 class='card-title mb-3 name' style='font-size: 22px'>"+member[i].nama+"</h5>\
                                                        <p class='text-secondary mb-1 text-16'>\
                                                            <i class='i-Home1 mr-3' style='font-size: 14px; font-weight: 600'></i>"+member[i].lokasi+"</p>\
                                                        <p class='text-secondary status'>"+status_tag+"</p>\
                                                    </div>\
                                                </div>";
                                $("#to-fill-"+name).html(toadd);
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
    }
    $(document).ready(function(){
        $('#select_jenis_asset').change(function(e) {
            var val = JSON.parse(this.value);
            load(val.id,val.tab);
            $('#'+val.tab+'-basic-tab').tab('show');
        });
        @if($jenis_assets->count())
        load('{{$jenis_assets[0]->id}}','{{strtolower(str_replace(" ", "",$jenis_assets[0]->nama))}}');
        @endif
    });
</script>
    
@endsection