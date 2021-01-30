<div class="main-header">
    <div class="logo">
        <img src="/assets/images/logoo.png" alt="" />
    </div>
    <div class="menu-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="d-flex align-items-center">
        <div>
            <img src="/assets/images/sim_asset.png" class="img-thumbnail img-preview justify-content-center" style="max-width: 40px;" alt="Product-img" />
            <h5 style="margin-top: 12px" class="d-flex justify-content-center">
                <strong>SIM Aset Diklat</strong>
            </h5>
        </div>
    </div>

    <div class="header-part-right">
        <!-- Full screen toggle -->
        <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
        <!-- Notificaiton -->
        <div class="dropdown">
            <div class="badge-top-container d-flex align-items-center" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="badge badge-primary">3</span>
                <i class="i-Bell text-muted header-icon "></i>
            </div>
            <!-- Notification dropdown -->
            <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                <div class="dropdown-item d-flex" style="height: 100px">
                    <div class="notification-icon">
                        <i class="i-Empty-Box text-primary mr-1 text-20"></i>
                    </div>
                    <div class="notification-details flex-grow-1">
                        <p class="m-0 d-flex align-items-center mb-2" style="font-size: 16px">
                            <span style="font-size: 16px">"Nama Barang"</span>
                            <span class="flex-grow-1" style="font-size: 16px"></span>
                            <span class="badge badge-pill badge-primary ml-1 mr-1" style="font-size: 13px">Peminjaman</span>
                        </p>
                        <p class="text-primary mb-0 mt-2" style="font-size: 14px">
                            <i class="i-MaleFemale mr-2"></i>Pak Rizaldi
                        </p>
                        <p class="text-primary mb-1" style="font-size: 14px">
                            <i class="i-Calendar mr-2"></i>
                            <span><strong>27 Januari 2020</strong></span> | 13.29 WIB
                        </p>
                    </div>
                </div>
                <div class="dropdown-item d-flex" style="height: 100px">
                    <div class="notification-icon">
                        <i class="i-Empty-Box text-success mr-1 text-20"></i>
                    </div>
                    <div class="notification-details flex-grow-1">
                        <p class="m-0 d-flex align-items-center mb-2" style="font-size: 16px">
                            <span style="font-size: 16px">"Nama Barang"</span>
                            <span class="flex-grow-1"></span>
                            <span class="badge badge-pill badge-success ml-1 mr-1" style="font-size: 13px">
                                Pengembalian</span>
                        </p>

                        <p class="text-success mb-0 mt-2" style="font-size: 14px">
                            <i class="i-MaleFemale mr-2"></i>Pak Rizaldi
                        </p>
                        <p class="text-success mb-1" style="font-size: 14px">
                            <i class="i-Calendar mr-2"></i>
                            <span><strong>27 Januari 2020</strong></span> | 13.29 WIB
                        </p>
                    </div>
                </div>
                <div class="dropdown-item d-flex" style="height: 100px">
                    <div class="notification-icon">
                        <i class="i-Empty-Box text-primary mr-1 text-20"></i>
                    </div>
                    <div class="notification-details flex-grow-1">
                        <p class="m-0 d-flex align-items-center mb-2" style="font-size: 16px">
                            <span style="font-size: 16px">"Nama Barang"</span>
                            <span class="flex-grow-1"></span>
                            <span class="badge badge-pill badge-primary ml-1 mr-1" style="font-size: 13px">Peminjaman</span>
                        </p>

                        <p class="text-primary mb-0 mt-2" style="font-size: 14px">
                            <i class="i-MaleFemale mr-2"></i>Pak Rizaldi
                        </p>
                        <p class="text-primary mb-1" style="font-size: 14px">
                            <i class="i-Calendar mr-2"></i>
                            <span><strong>27 Januari 2020</strong></span> | 13.29 WIB
                        </p>
                    </div>
                </div>
                <div class="dropdown-item d-flex" style="height: 100px">
                    <div class="notification-icon">
                        <i class="i-Empty-Box text-primary mr-1 text-20"></i>
                    </div>
                    <div class="notification-details flex-grow-1">
                        <p class="m-0 d-flex align-items-center mb-2" style="font-size: 16px">
                            <span>"Nama Barang"</span>
                            <span class="flex-grow-1"></span>
                            <span class="badge badge-pill badge-primary ml-1 mr-1" style="font-size: 13px">Peminjaman</span>
                        </p>

                        <p class="text-primary mb-0 mt-2" style="font-size: 14px">
                            <i class="i-MaleFemale mr-2"></i>Pak Rizaldi
                        </p>
                        <p class="text-primary mb-1" style="font-size: 14px">
                            <i class="i-Calendar mr-2"></i>
                            <span><strong>27 Januari 2020</strong></span> | 13.29 WIB
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notificaiton End -->

        <!-- User avatar dropdown -->
        <div class="dropdown d-none d-sm-block">
            <div class="user col align-self-end">
                <img src="/assets/images/1.jpg" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-header">
                        <i class="i-Lock-User mr-1"></i>{{session()->get('user')->nama}}
                    </div>
                    <a class="dropdown-item" href="{{url('profile')}}">Profil Pengguna</a>
                    <a class="dropdown-item">
                        <form method="post" action="{{url('logout')}}">
                            @csrf
                            <button class="btn btn-primary btn-rounded text-14" type="submit">Log out</button>
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>