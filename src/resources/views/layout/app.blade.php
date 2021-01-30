<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sistem Informasi Manajemen Asset | Unit Pendidikan dan Pelatihan Petrokimia Gresik</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="/assets/css/themes/lite-purple.min.css" rel="stylesheet">
    <link href="/assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="/assets/css/plugins/datatables.min.css" rel="stylesheet">
    <link rel="icon" href="/assets/images/sim_asset.png" sizes="16x16" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('moreCSS')
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-compact sidebar-dark-purple clearfix">
        @include('layout.sidebar')
        <!--=============== Left side End ================-->
        <div class="main-content-wrap d-flex flex-column">
            @include('layout.header')

            <!-- ============ Body content start ============= -->
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bottom Navbar -->
    <nav class="navbar navbar-dark bg-primary navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none mt-3" style="
    border-top: 1px solid #d3d3d3;
    box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.2);
    padding-top: 1.5px;
    padding-bottom: 0.25px;
  ">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="{{url('')}}" class="nav-link">
                    <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg><br>
                    <span style="font-size: 10px">Beranda</span>
                </a>
            </li>
            @if(session()->get('user')->isAdmin())
            <li class="nav-item">
                <a href="{{url('data-aset')}}" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                        <path d="M.54 3.87L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z" />
                    </svg><br>
                    <span style="font-size: 10px">Data Aset</span>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a href="{{url('scan')}}" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5em" height="2.5em" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
                        <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
                    </svg><br>
                </a>
            </li>
            @if(session()->get('user')->isAdmin())
            <li class="nav-item">
                <a href="{{url('daftar-aset')}}" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
                        <path d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z" />
                        <path d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z" />
                    </svg><br>
                    <span style="font-size: 10px">Report</span>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a href="{{url('profile')}}" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg><br>
                    <span style="font-size: 10px">Profil</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="customizer d-noned-sm-block">
        <div class="handle" type="button" data-toggle="tooltip" data-placement="left" title="Shortcut Menu"><i class="i-Gear spin"></i></div>
        <div class="customizer-body" data-perfect-scrollbar="" data-suppress-scroll-x="true">
            <div class="accordion" id="accordionCustomizer">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <p class="mb-0 text-16 my-2">Shortcut Menu</p>
                    </div>
                    <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionCustomizer">
                        <div class="card-body">
                            <label class="radio radio-primary my-2">
                                <input type="radio">
                                <a href="report.html"><span class="text-16 mx-2">Beranda</span>
                                    <span class="checkmark"></span></a>
                            </label>
                            <label class="radio radio-primary my-2">
                                <input type="radio">
                                <a href="report_transaksi.html"><span class="text-16 mx-2">Data Aset</span>
                                    <span class="checkmark"></span></a>
                            </label>
                            <label class="radio radio-primary my-2">
                                <input type="radio">
                                <a href="report_transaksi.html"><span class="text-16 mx-2">Scan Aset</span>
                                    <span class="checkmark"></span></a>
                            </label>
                            <label class="radio radio-primary my-2">
                                <input type="radio">
                                <a href="report_transaksi.html"><span class="text-16 mx-2">Reporting</span>
                                    <span class="checkmark"></span></a>
                            </label>
                            <label class="radio radio-primary my-2">
                                <input type="radio">
                                <a href="report_transaksi.html"><span class="text-16 mx-2">Profile</span>
                                    <span class="checkmark"></span></a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=" /assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src=" /assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src=" /assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src=" /assets/js/scripts/script.min.js"></script>
    <script src=" /assets/js/scripts/sidebar.compact.script.min.js"></script>
    <script src=" /assets/js/scripts/customizer.script.min.js"></script>
    <script src=" /assets/js/plugins/datatables.min.js"></script>
    <script src=" /assets/js/scripts/datatables.script.min.js"></script>
    {{-- <script src=" /assets/js/plugins/apexcharts.min.js"></script> --}}
    {{-- <script src=" /assets/js/plugins/echarts.min.js"></script> --}}
    {{-- <script src=" /assets/js/scripts/echart.options.min.js"></script> --}}
    <script src=" /assets/js/scripts/dashboard.v3.script.min.js"></script>
    {{-- <script src=" /assets/js/scripts/apexcharts.min.js"></script> --}}
    <script src=" /assets/js/scripts/card.metrics.script.min.js"></script>
    {{-- <script src=" /assets/js/scripts/widgets-statistics.min.js"></script> --}}
    {{-- <script src=" /assets/js/scripts/apexColumnChart.script.min.js"></script> --}}
    {{-- <script src=" /assets/js/plugins/list.min.js"></script> --}}
    @yield('moreJS')
</body>

</html>