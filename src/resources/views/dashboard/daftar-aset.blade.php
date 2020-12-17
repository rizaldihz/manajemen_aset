@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
@endsection

@section('content')
<div class="breadcrumb">
    <h1>Data Aset Diklat</h1>
</div>

<div class="row">
    <div class="col-md-12 mb-3">
        <button class="btn btn-success mb-1" data-toggle="modal" data-target="#modalTambahAset">Tambah Aset</button>
        <button class="btn btn-success mb-1" data-toggle="modal" data-target="#modalTambahJenis">Tambah Jenis Asset</button>
    </div>
    <div class="col-md-12">
        <div class="table-responsive ">
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
    </div>
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
                        <input class="form-control"type="text" name='kode_aset'/>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama Asset</label>
                        <input class="form-control"type="text" name='nama'/>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Lokasi</label>
                        <input class="form-control"type="text" name='lokasi'/>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Stok</label>
                        <input class="form-control"type="text" name='stok'/>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Jenis Asset</label>
                        <select class="form-control" name='jenis_asset'>
                            @foreach($jenisAssets as $jenisAsset)
                            <option value="{{$jenisAsset->id}}">{{$jenisAsset->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Foto</label>
                        <input class="form-control"type="file" name="foto"/>
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
<div class="modal fade" id="modalDetailAset" tabindex="-1" role="dialog" aria-labelledby="modalDetailAset" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailAset">Detail Aset</h5>
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
                        <input class="form-control" type="text" name="nama"/>
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
        columns: [
            {data: 'kode_aset', name: 'kode aset'},
            {data: 'nama', name: 'nama aset'},
            {data: 'jenis_aset', name: 'jenis aset'},
            {data: 'lokasi', name: 'lokasi'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    var lastdata=NULL;
    function toggleModalDetail(params)
    {
        if(lastdata != params){
            $.ajax({
                url: '{{url("asset/get")}}',
                type: 'post',
                data: {id: params, tipe:'modal', _token: "{{ csrf_token() }}",},
                success: function(response){ 
                    $('#modalDetailAset .modal-body').html(response.data);
                    $('#modalDetailAset').modal('show'); 
                }
            });
        }
        else{
            $('#modalDetailAset').modal('show');
        }
    }
    function showDelete(params)
    {
        $.ajax({
            url: '{{url("asset/delete")}}',
            type: 'post',
            data: {id: params, tipe:'modal', _token: "{{ csrf_token() }}",},
            success: function(response){ 
                swal(
                    'Sukses',
                    'Data Berhasil dihapus!',
                    'success'
                );
                table.ajax.reload();
            }
        });
    }
</script>
@endsection