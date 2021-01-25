<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item" data-item="dashboard">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Duplicate-Window" style="color: #c9c9c9"></i>
                    <span class="nav-text">Beranda</span>
                </a>
                <div class="triangle"></div>
            </li>
            @if(session()->get('user')->isAdmin())
            <li class="nav-item" data-item="peminjaman">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Library" style="color: #c9c9c9"></i>
                    <span class="nav-text">Peminjaman</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="admin">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Checked-User" style="color: #c9c9c9"></i>
                    <span class="nav-text">Menu Admin</span>
                </a>
                <div class="triangle"></div>
            </li>
            @endif
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
                <h6><strong>Fitur Utama</strong></h6>
                <p>Sistem Informasi Manajemen Asset.</p>
            </header>
            <br>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{url('')}}">
                        <i class="nav-icon i-Home-2"></i>
                        <span class="item-name">Beranda</span>
                    </a>
                </li>
                @if(session()->get('user')->isAdmin())
                <li class="nav-item">
                    <a href="{{url('data-aset')}}">
                        <i class="nav-icon i-Folder-With-Document"></i>
                        <span class="item-name">Data Aset</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('daftar-aset')}}">
                        <i class="nav-icon i-File-Horizontal-Text"></i>
                        <span class="item-name">Data Report Aset</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        <div class="submenu-area" data-parent="peminjaman">
            <header>
                <h6><strong>Penggunaan Aset</strong></h6>
                <p>Sistem Informasi Manajemen Asset.</p>
            </header>
            <br />
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{url('scan')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Scan</span>
                    </a>
                </li>
            </ul>
        </div>
        @if(session()->get('user')->isAdmin())
        <div class="submenu-area" data-parent="admin">
            <header>
                <h6><strong>Menu Admin</strong></h6>
                <p>Sistem Informasi Manajemen Asset.</p>
            </header>
            <br />
            <ul class="childNav">
                <li class="nav-item">
                    <a href="{{url('user')}}">
                        <i class="nav-icon i-Checked-User"></i>
                        <span class="item-name">Kelola Pengguna</span>
                    </a>
                </li>
            </ul>
        </div>
        @endif
    </div>
</div>