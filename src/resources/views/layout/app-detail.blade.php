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