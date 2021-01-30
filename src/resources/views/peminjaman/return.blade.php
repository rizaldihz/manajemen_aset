@extends('layout.app')

@section('moreCSS')
<link rel="stylesheet" href="/assets/css/plugins/datatables.min.css" />
<link rel="stylesheet" href="/assets/css/plugins/sweetalert2.min.css" />
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
    <h3>Pengembalian Barang</h3>
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
<div class="row" id="to-be-formed">
    {{-- <div class="col-md-12" style="margin-bottom: 100px">
        <form method='post' action='{{url("asset/pinjam")}}'>
            {{ csrf_field() }}
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
                <input id="kode-aset-input" class="form-control" type="text" name='kode_aset' readonly="readonly"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Nama Asset</label>
                <input id="nama-aset-input" class="form-control"type="text" name='nama' readonly="readonly"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Lokasi</label>
                <input id="lokasi-aset-input" class="form-control"type="text" name='lokasi'/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Jenis Asset</label>
                <input id="jenis-aset-input" class="form-control" type="text" name='jenis' readonly="readonly"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Tanggal Pinjam</label>
                <input id="tanggalpinjam-aset-input" class="form-control" type="text" name='tanggalpinjam' readonly="readonly"/>
            </div>
            <div class="form-group">
                <label class="col-form-label">Tanggal Kembali</label>
                <input id="tanggalkembali-aset-input" class="form-control" type="text" name='tanggalkembali' readonly="readonly"/>
            </div>
            <div class="form-group">
                <button class="btn btn-secondary" type="button" onclick="flush()">Batal</button>
                <button class="btn btn-primary ml-2" type="submit">Pinjam</button>
            </div>
        </form>
    </div> --}}
    <div class="col-12" style="margin-bottom: 100px">
        <div class="card">
            <div class="card-body">
                <div class="row px-3 py-3">
                    <div class="col-lg-3">
                        <!-- Product image -->
                        <a href="javascript: void(0);" class="text-center d-block mb-4">
                            <img id="gambar-aset" src="" class="img-thumbnail img-preview" style="max-width: 280px;" alt="Product-img" />
                        </a>
                        <br>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-9">
                            <!-- Product title -->
                            <br>
                            <h3 class="mt-0"><strong id="nama-aset-input"></strong><a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ml-2"></i></a> </h3>
                            <h6 class="mb-1" style="font-size: 18px;" id="kode-aset-input"></h6>
                            <p class="font-16">
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                                <span class="text-warning mdi mdi-star"></span>
                            </p>

                            <!-- Waktu Peminjaman -->
                            <div class="mt-4">
                                <p class="text-primary mb-1"><i class="i-Calendar text-16 mr-2 "></i>Waktu Pengembalian</p>
                                <span><strong id="tanggal-kembali-aset-input"></strong></span> | <span id="waktu-kembali-aset-input"></span> WIB
                            </div>
                            <br>
                            <div class="bordered_1px"></div>

                            <!-- Aset information -->
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <h6 class="font-14">Status:</h6>
                                        <span id="status-terlambat" class="badge badge-pill badge-outline-danger p-2 m-1" style="font-size: 14px;">Terlambat Mengembalikan</span>
                                        <span id="status-tersedia" class="badge badge-pill badge-outline-success p-2 m-1" style="font-size: 14px;">Sudah Dikembalikan</span>
                                        <span id="status-tidaktersedia" class="badge badge-pill badge-outline-warning p-2 m-1" style="font-size: 14px;">Belum Dikembalikan</span>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Peminjam Aset:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;" id="peminjam-aset-input"></p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="font-14">Jenis Aset:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;" id="jenis-aset-input"></p>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <h6 class="font-14">Satuan:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px;">Unit</p>
                                    </div> --}}
                                    <div class="col-md-4">
                                        <h6 class="font-14">Lokasi terakhir peminjaman:</h6>
                                        <p class="text-sm lh-150" style="font-size: 16px" id="lokasi-aset-input"></p>
                                    </div>
                                    <div class="col-md-4">
                                        <form method='post' action='{{url("asset/kembalikan")}}'>
                                            @csrf
                                        <input id="id-input" type="hidden" name='id'/>
                                        <button class="btn btn-secondary" type="button" onclick="flush()">Batal</button>
                                        <input class="btn btn-primary ml-2" type="submit" value="Kembalikan">
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row-->
            </div>
            <!-- end card-body-->
        </div>
        <!-- end card-->
    </div>
</div>
@endsection

@section('moreJS')
<script src="/assets/js/plugins/datatables.min.js"></script>
<script src="/assets/js/scripts/datatables.script.min.js"></script>
<script src="/assets/js/plugins/sweetalert2.min.js"></script>
<script src="/assets/js/scripts/sweetalert.script.min.js"></script>
<script src="/assets/js/scripts/html5-qrcode.min.js"></script>
<script src=" https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
<script>
    function flush(){
        $('#to-be-formed').hide();
    }
    flush();
    var pinjam = function(barang){
        $.ajax({
            url: '{{url("peminjaman/get")}}',
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: barang,
                tipe: 'tobereturned',
            },
            success: function(response) {
                response = response['data'][0];
                time = response.tanggal_kembali_raw.split(", ")
                timetoreturn = Date.parse(response.tanggal_kembali);
                timenow = Date.now();
                $('#kode-aset-input').html(response['kode_peminjaman']);
                $('#idaset-input').val(barang);
                $('#peminjam-aset-input').html(response['user']['nama']);
                $('#nama-aset-input').html(response['asset']['nama']);
                $('#lokasi-aset-input').html(response['lokasi']);
                $('#jenis-aset-input').html(response['jenis_asset']);
                $('#gambar-aset').attr('src',response['asset_foto_path']);
                $('#id-input').val(response.id);
                $('#tanggal-kembali-aset-input').html(time[0]+", "+time[1]);
                $('#waktu-kembali-aset-input').html(time[2]);
                if(timenow > timetoreturn){
                    $('#status-terlambat').show()
                    $('#status-tersedia').hide()
                    $('#status-tidaktersedia').hide()
                }else if(response.status == 'Kembali'){
                    $('#status-terlambat').hide()
                    $('#status-tersedia').show()
                    $('#status-tidaktersedia').hide()
                }
                else{
                    $('#status-terlambat').hide()
                    $('#status-tersedia').hide()
                    $('#status-tidaktersedia').show()
                }
                $('#to-be-formed').show();
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

    const btnScanQR = document.getElementById("btn-scan-qr");

    let scanning = false;

    qrcode.callback = res => {
        if (res) {
            scan_res = res;
            scanning = false;
            // alert(scan_res);

            video.srcObject.getTracks().forEach(track => {
                track.stop();
            });

            canvasElement.hidden = true;
            btnScanQR.hidden = false;
            btnScanQR.innerText = "Scan Ulang";
            btnScanQR.disabled= false;
            pinjam(res);
        }
    };

    btnScanQR.onclick = () => {
        navigator.mediaDevices
            .getUserMedia({ video: { facingMode: "environment" } })
            .then(function(stream) {
                flush();
                scanning = true;
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