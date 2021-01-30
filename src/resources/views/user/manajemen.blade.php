@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="/assets/css/plugins/datatables.min.css" />
<link rel="stylesheet" href="/assets/css/plugins/sweetalert2.min.css" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="breadcrumb">
    <h3>Tabel Manajemen User</h3>
</div>

<div class="row" style="margin-left: 2px; margin-right: 2px;">
    <div class="d-flex justify-content-start">
        <button type="button" class="btn btn-success"><img src="/assets/images/excel.png" style="width: 16px; height: 16px;" class="mr-2">Export Data</button>
    </div>
    <div class="col-md-12 mt-3 mb-3">
        <button class="btn btn-success mb-1" data-toggle="modal" data-target="#modalTambahUser">Tambah User</button>
        <button class="btn btn-success mb-1" data-toggle="modal" data-target="#modalImportUser">Import User Excel</button>
    </div>
    <div class="col-md-12" style="margin-bottom:100px">
        <div class="table-responsive">
            <table class="display table table-striped table-bordered" id="user_table" style="width:100%">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Unit Kerja</th>
                        <th>Tipe</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="modalTambahUser" tabindex="-1" role="dialog" aria-labelledby="modalTambahUser" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahUser">Tambah User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method='post' action='{{url("user/tambah")}}' enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-form-label">NIK</label>
                        <input class="form-control" type="text" name='nik' />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Nama</label>
                        <input class="form-control" type="text" name='nama' />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Unit Kerja</label>
                        <input class="form-control" type="text" name='unit_kerja' />
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Tipe User</label>
                        <select class="form-control" name='tipe'>
                            <option value="0">Admin</option>
                            <option value="1">User Biasa</option>
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
<div class="modal fade" id="modalImportUser" tabindex="-1" role="dialog" aria-labelledby="modalImportUser" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalImportUser">Import User</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method="post" action="{{url('user/import')}}">
                @csrf
                <div class="modal-body">
                <div class="form-group">
                        <label class="col-form-label">Excel User</label>
                        <input class="form-control" type="file" name="file" />
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
<script src="/assets/js/plugins/datatables.min.js"></script>
<script src="/assets/js/scripts/datatables.script.min.js"></script>
<script src="/assets/js/plugins/sweetalert2.min.js"></script>
<script src="/assets/js/scripts/sweetalert.script.min.js"></script>
<script>
    var table = $('#user_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('user/populate-user') }}",
        columns: [{
                data: 'nik',
                name: 'nik'
            },
            {
                data: 'nama',
                name: 'nama'
            },
            {
                data: 'unit_kerja',
                name: 'unit_kerja'
            },
            {
                data: 'tipe',
                name: 'tipe'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ],
        paginate:true,
        pagingType: "full"
    });
</script>
@endsection