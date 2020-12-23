<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item active" data-item="dashboard">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Home-2" style="color: #c9c9c9;"></i>
                    <span class="nav-text">Beranda</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="peminjaman">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Library" style="color: #c9c9c9;"></i>
                    <span class="nav-text">Peminjaman</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="admin">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Checked-User" style="color: #c9c9c9;"></i>
                    <span class="nav-text">Menu Admin</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item">
                <a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank">
                    <i class="nav-icon i-Safe-Box1"></i>
                    <span class="nav-text">Doc</span>
                </a>
                <div class="triangle"></div>
            </li>
        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
        <header>
            <div class="logo">
                <img src="{{asset('assets/images/logoo.png')}}" alt="" style="height: 44px;">
            </div>
        </header>
        <!-- Submenu Dashboards -->
        <div class="submenu-area" data-parent="dashboard">
            <header>
                <h6><strong>Beranda</strong>
                </h6>
                <p>Sistem Informasi Manajemen Asset.</p>
            </header>
            <br>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{url('')}}">
                        <i class="nav-icon i-Line-Chart-2"></i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('daftar-aset')}}">
                        <i class="nav-icon i-Folder-With-Document"></i>
                        <span class="item-name">Data Aset Diklat</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="peminjaman">
            <header>
                <h6><strong>Penggunaan Aset</strong></h6>
                <p>Sistem Informasi Manajemen Asset.</p>
            </header>
            <br>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{url('peminjaman')}}">
                        <i class="nav-icon i-Line-Chart-2"></i>
                        <span class="item-name">Peminjaman Aset</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pengembalian.html">
                        <i class="nav-icon i-Folder-With-Document"></i>
                        <span class="item-name">Pengembalian Aset</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="submenu-area" data-parent="admin">
            <header>
                <h6><strong>Menu Admin</strong></h6>
                <p>Sistem Informasi Manajemen Asset.</p>
            </header>
            <br>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="peminjaman.html">
                        <i class="nav-icon i-Speach-Bubble"></i>
                        <span class="item-name">Menu Admin 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pengembalian.html">
                        <i class="nav-icon i-Speach-Bubble-10"></i>
                        <span class="item-name">Menu Admin 2</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>