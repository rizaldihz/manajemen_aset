@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="/assets/css/plugins/datatables.min.css" />
<link rel="stylesheet" href="/assets/css/plugins/sweetalert2.min.css" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="/assets/js/datepicker/themes/classic.css" />
<link rel="stylesheet" href="/assets/js/datepicker/themes/classic.date.css" />
<style>
#qr-canvas {
  margin: auto;
  width: calc(100% - 20px);
  max-width: 400px;
  outline-style: solid;
  outline-width: 0.5px;
}
</style>
@endsection

@section('content')
<div class="breadcrumb">
    <h3>Peminjaman Barang</h3>
</div>
<!--  end of col -->
<div class="row">
    <div class="col-md-12 mb-3">
        <canvas hidden="" id="qr-canvas"></canvas>
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <button class="btn btn-primary btn-rounded" style="width:100%" id="btn-scan-qr" type="button">Scan Barang</button>
    </div>
</div>
<div class="row">
    <div class="col-md-12 mb-3">
        <div id="qr-result" hidden="">
            <b>Data:</b> <span id="outputData"></span>
        </div>
    </div>
</div>
<div class="modal fade" id="modalPinjamAset" tabindex="-1" role="dialog" aria-labelledby="modalPinjamAset" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPinjamAset">Pinjam Aset</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <form method='post' action='{{url("asset/pinjam")}}'>
                @csrf
            <div class="modal-body">
                <input id="idaset-input" type="hidden" name='id_aset'/>
                <div class="col-12 mb-1">
                    <img src="" id="gambar-aset" class="img-thumbnail img-preview" style="max-width: 280px;" alt="Product-img" />
                </div>
                <div class="col-12 mb-3">
                    <span id="status-tersedia" class="badge badge-pill badge-outline-success p-2 m-1" style="font-size: 14px;">Tersedia</span>
                    <span display="none" id="status-tidaktersedia" class="badge badge-pill badge-outline-warning p-2 m-1" style="font-size: 14px;">Sedang Dipinjam</span>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Kode Asset</label>
                    <input id="kode-aset-input" class="form-control modal-input" type="text" name='kode_aset' readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Nama Asset</label>
                    <input id="nama-aset-input" class="form-control modal-input" type="text" name='nama' readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Lokasi</label>
                    <input id="lokasi-aset-input" class="form-control modal-input"type="text" name='lokasi'/>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Jenis Asset</label>
                    <input id="jenis-aset-input" class="form-control modal-input" type="text" name='jenis' readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Tanggal Pinjam</label>
                    <input id="tanggalpinjam-aset-input" class="form-control modal-input" type="text" name='tanggalpinjam' readonly="readonly"/>
                </div>
                <div class="form-group">
                    <label class="col-form-label">Tanggal Kembali</label>
                    <input id="tanggalkembali-aset-input" class="form-control modal-input" type="text" name='tanggalkembali'/>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-primary ml-2" type="submit" id="pinjam-button">Pinjam</button>
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
<script src="/assets/js/datepicker/picker.js"></script>
<script src="/assets/js/datepicker/picker.date.js"></script>
<script src="/assets/js/scripts/html5-qrcode.min.js"></script>
<script src=" https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
<script>
    var pinjam = function(barang){
        $.ajax({
            url: '{{url("asset/get")}}',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: barang,
                tipe: 'populate',
            },
            success: function(response) {
                $('#kode-aset-input').val(response['data']['kode_aset']);
                $('#idaset-input').val(barang);;
                $('#nama-aset-input').val(response['data']['nama']);
                $('#lokasi-aset-input').val(response['data']['lokasi']);
                $('#jenis-aset-input').val(response['data']['jenis']);
                $('#gambar-aset').attr('src',response['data']['imgurl']);
                $('#tanggalpinjam-aset-input').val(response['data']['tanggal_pinjam']);
                $('#tanggalkembali-aset-input').val(response['data']['tanggal_kembali']);
                if(response['data']['status']==0){
                    $('#status-tersedia').show()
                    $('#status-tidaktersedia').hide()
                    $("#pinjam-button").show();
                    $('#tanggalkembali-aset-input').pickadate({
                        monthsFull: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agusuts', 'September', 'Oktober', 'November', 'Desember'],
                        weekdaysShort: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
                        today: 'Hari ini',
                        clear: 'Hapus',
                        formatSubmit: 'yyyy/mm/dd'
                    });
                }else{
                    $('#status-tersedia').hide()
                    $('#status-tidaktersedia').show()
                    $("#pinjam-button").hide();
                    $(".modal-input").attr('readonly','readonly');
                }
                $('#modalPinjamAset').modal('show');
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

    var scan_res = null;
    const video = document.createElement("video");
    const canvasElement = document.getElementById("qr-canvas");
    const canvas = canvasElement.getContext("2d");

    const qrResult = document.getElementById("qr-result");
    const outputData = document.getElementById("outputData");
    const btnScanQR = document.getElementById("btn-scan-qr");

    let scanning = false;

    qrcode.callback = res => {
        if (res) {
            outputData.innerText = res;
            scan_res = res;
            scanning = false;

            video.srcObject.getTracks().forEach(track => {
            track.stop();
            });

            qrResult.hidden = false;
            canvasElement.hidden = true;
            btnScanQR.hidden = false;
            btnScanQR.innerText = "Scan Barang";
            btnScanQR.disabled= false;
            pinjam(res);
        }
    };

    btnScanQR.onclick = () => {
        if(!navigator.mediaDevices){
            outputData.innerText = "chrome://flags/#unsafely-treat-insecure-origin-as-secure";  
            qrResult.hidden = false;
        }
        navigator.mediaDevices
            .getUserMedia({ video: { facingMode: "environment" } })
            .then(function(stream) {
                scanning = true;
                qrResult.hidden = true;
                btnScanQR.innerText = "Scanning...";
                btnScanQR.disabled= true;
                btnScanQR.hidden= false;
                canvasElement.hidden = false;
                video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
                video.srcObject = stream;
                video.play();
                tick();
                scan();
        });
    };

    function tick() {
        canvasElement.height = video.videoHeight;
        canvasElement.width = video.videoWidth;
        canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

        scanning && requestAnimationFrame(tick);
    }

    function scan() {
        try {
            qrcode.decode();
        } catch (e) {
            setTimeout(scan, 300);
        }
    }
</script>
@endsection