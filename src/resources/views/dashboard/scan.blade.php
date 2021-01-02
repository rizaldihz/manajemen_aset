@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
@endsection

@section('content')
<div class="main-content">
    <div class="breadcrumb">
        <h1>Scan Barang</h1>
    </div>
    <!--  end of col -->
    <br>
    <div id="reader"></div>
    <br>
    <br>
    <br>

    <a href="detailaset_peminjaman.html" class="btn btn-primary btn-rounded">Scanning...</a>

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