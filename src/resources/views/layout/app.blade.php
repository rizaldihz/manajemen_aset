<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sistem Informasi Manajemen Asset | Unit Pendidikan dan Pelatihan Petrokimia Gresik</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="{{asset('assets/css/themes/lite-purple.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/plugins/perfect-scrollbar.min.css')}}" rel="stylesheet" />
    @yield('moreCSS')
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-compact sidebar-dark-purple sidenav-open clearfix">
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
    <!-- ============ Search UI Start ============= -->
    <div class="search-ui ">
        <div class="search-header ">
            <img src="images/logoo.png " alt=" " class="logo ">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2 ">
                <i class="i-Close-Window text-22 text-muted "></i>
            </button>
        </div>
        <input type="text " placeholder="Type here " class="search-input " autofocus>
        <div class="search-title ">
            <span class="text-muted ">Search results</span>
        </div>
        <div class="search-results list-horizontal ">
            <div class="list-item col-md-12 p-0 ">
                <div class="card o-hidden flex-row mb-4 d-flex ">
                    <div class="list-thumb d-flex ">
                        <!-- TUMBNAIL -->
                        <img src="images/products/headphone-1.jpg " alt=" ">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex ">
                        <div>
                            <a href=" " class="w-40 w-sm-100 ">
                                <div class="item-title ">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 ">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 ">$300
                                <del class="text-secondary ">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges ">
                                <span class="badge badge-danger ">Sale</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0 ">
                <div class="card o-hidden flex-row mb-4 d-flex ">
                    <div class="list-thumb d-flex ">
                        <!-- TUMBNAIL -->
                        <img src="images/products/headphone-2.jpg " alt=" ">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex ">
                        <div>
                            <a href=" " class="w-40 w-sm-100 ">
                                <div class="item-title ">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 ">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 ">$300
                                <del class="text-secondary ">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges ">
                                <span class="badge badge-primary ">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0 ">
                <div class="card o-hidden flex-row mb-4 d-flex ">
                    <div class="list-thumb d-flex ">
                        <!-- TUMBNAIL -->
                        <img src="images/products/headphone-3.jpg " alt=" ">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex ">
                        <div>
                            <a href=" " class="w-40 w-sm-100 ">
                                <div class="item-title ">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 ">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 ">$300
                                <del class="text-secondary ">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges ">
                                <span class="badge badge-primary ">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0 ">
                <div class="card o-hidden flex-row mb-4 d-flex ">
                    <div class="list-thumb d-flex ">
                        <!-- TUMBNAIL -->
                        <img src="images/products/headphone-4.jpg " alt=" ">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex ">
                        <div>
                            <a href=" " class="w-40 w-sm-100 ">
                                <div class="item-title ">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 ">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 ">$300
                                <del class="text-secondary ">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges ">
                                <span class="badge badge-primary ">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center ">
            <nav aria-label="Page navigation example ">
                <ul class="pagination d-inline-flex ">
                    <li class="page-item ">
                        <a class="page-link " href="# " aria-label="Previous ">
                            <span aria-hidden="true ">&laquo;</span>
                            <span class="sr-only ">Previous</span>
                        </a>
                    </li>
                    <li class="page-item "><a class="page-link " href="# ">1</a></li>
                    <li class="page-item "><a class="page-link " href="# ">2</a></li>
                    <li class="page-item "><a class="page-link " href="# ">3</a></li>
                    <li class="page-item ">
                        <a class="page-link " href="# " aria-label="Next ">
                            <span aria-hidden="true ">&raquo;</span>
                            <span class="sr-only ">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <div class="customizer ">
        <div class="handle "><i class="i-Gear spin "></i></div>
        <div class="customizer-body " data-perfect-scrollbar=" " data-suppress-scroll-x="true ">
            <div class="accordion " id="accordionCustomizer ">
                <div class="card ">
                    <div class="card-header " id="headingOne ">
                        <p class="mb-0 ">Sidebar Colors</p>
                    </div>
                    <div class="collapse show " id="collapseOne " aria-labelledby="headingOne " data-parent="#accordionCustomizer ">
                        <div class="card-body ">
                            <div class="colors sidebar-colors "><a class="color gradient-purple-indigo " data-sidebar-class="sidebar-gradient-purple-indigo "><i class="i-Eye class=" color
                                        gradient-black-blue " data-sidebar-class=" sidebar-gradie
                                        lass="color gradient-black-gray " data-sidebar-class="sidebar-gradi class="
                                        color gradient-steel-gray " data-sidebar-class=" sidebar-gradie
                                        lass="color dark-purple active " data-sidebar-class="sidebar-dark-purple "><i
                                            class="i-Eye "></i></a><a class="color slate-gray " data-sidebar-class="sidebar-slate-gray "><i class="i-Ey lass=" color
                                        midnight-blue " data-sidebar-class=" sidebar-midnight-blue "><i
                                        class=" i-Eye "></i></a><a class=" color blue " data-sidebar-class="
                                        sidebar-blue "><i class=" i-Ey class="color indigo "
                                        data-sidebar-class="sidebar-indigo "><i class="i-Eye "></i></a><a class="color pink " data-sidebar-class="sidebar-pink "><i class="i-Ey lass=" color
                                        red " data-sidebar-class=" sidebar-red "><i class=" i-Eye "></i></a><a class="
                                        color purple " data-sidebar-class=" sidebar-purple "><i     class=" i-Eye "></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" card ">
                    <div class=" card-header " id=" headingOne ">
                        <p class=" mb-0 ">RTL</p>
                    </div>
                    <div class=" collapse show " id=" collapseTwo " aria-labelledby=" headingTwo " data-parent="
                                        #accordionCustomizer ">
                        <div class=" card-body ">
                            <label class=" checkbox checkbox-primary ">
                                <input id=" rtl-checkbox " type=" checkbox " /><span>Enable RTL</span><span
                                    class=" checkmark "></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src=" {{asset('assets/js/plugins/jquery-3.3.1.min.js')}} "></script>
    <script src=" {{asset('assets/js/plugins/bootstrap.bundle.min.js')}} "></script>
    <script src=" {{asset('assets/js/plugins/perfect-scrollbar.min.js')}} "></script>
    <script src=" {{asset('assets/js/scripts/script.min.js')}} "></script>
    <script src=" {{asset('assets/js/scripts/sidebar.compact.script.min.js')}} "></script>
    <script src=" {{asset('assets/js/scripts/customizer.script.min.js')}} "></script>
    @yield('moreJS')
</body>

</html>