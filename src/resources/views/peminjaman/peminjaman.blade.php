@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="{{asset('assets/css/plugins/datatables.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/plugins/sweetalert2.min.css')}}" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
@endsection

@section('content')
<div class="breadcrumb">
    <h1>Peminjaman Barang</h1>
</div>
<!--  end of col -->
<a class="btn btn-primary" id="btn-scan-qr">Scan</a>

<canvas hidden="" id="qr-canvas"></canvas>

<div id="qr-result" hidden="">
    <b>Data:</b> <span id="outputData"></span>
</div>
<!-- fotter end -->
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
@endsection

@section('moreJS')
<script src=" {{asset('assets/js/plugins/datatables.min.js')}} "></script>
<script src=" {{asset('assets/js/scripts/datatables.script.min.js')}} "></script>
<script src=" {{asset('assets/js/plugins/sweetalert2.min.js')}}"></script>
<script src=" {{asset('assets/js/scripts/sweetalert.script.min.js')}}"></script>
<script src=" {{asset('assets/js/scripts/html5-qrcode.min.js')}}"></script>
<script src=" https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
<script src=" {{asset('assets/js/qrcode.js')}} "></script>
<script>
    function toggleModalDetail(params)
    {
        if(lastdata != params){
            $.ajax({
                url: '{{url("asset/get")}}',
                type: 'post',
                data: {id: params, tipe:'modal', _token: "{{ csrf_token() }}",},
                success: function(response){ 
                    $('#modalDetailAset .modal-title').html("Detail Aset")
                    $('#modalDetailAset .modal-body').html(response.data);
                    $('#modalDetailAset').modal('show'); 
                }
            });
        }
        else{
            $('#modalDetailAset .modal-title').html("Detail Aset")
            $('#modalDetailAset').modal('show');
        }
    }
    function toggleCode(params)
    {
        $('#modalDetailAset .modal-title').html("QR Code")
        $('#modalDetailAset .modal-body').html("<div class='row'><div class='col-12'><img src='{{url('/')}}/asset/code/"+params+"'></div></div>");
        $('#modalDetailAset').modal('show'); 
    }
    
    function docReady(fn) {
        // see if DOM is already available
        if (document.readyState === "complete" || document.readyState === "interactive") {
            // call on next available tick
            setTimeout(fn, 1);
        } else {
            document.addEventListener("DOMContentLoaded", fn);
        }
    } 

    docReady(function() {
        var resultContainer = document.getElementById('qr-reader-results');
        var lastResult, countResults = 0;
        
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { fps: 10, qrbox: 250 });
        
        function onScanSuccess(qrCodeMessage) {
            if (qrCodeMessage !== lastResult) {
                ++countResults;
                lastResult = qrCodeMessage;
                resultContainer.innerHTML += `<div>[${countResults}] - ${qrCodeMessage}</div>`;
                
                // Optional: To close the QR code scannign after the result is found
                html5QrcodeScanner.clear();
            }
        }
        
        // Optional callback for error, can be ignored.
        function onScanError(qrCodeError) {
            // This callback would be called in case of qr code scan error or setup error.
            // You can avoid this callback completely, as it can be very verbose in nature.
        }
        html5QrcodeScanner.render(onScanSuccess);
    });
    
</script>
@endsection