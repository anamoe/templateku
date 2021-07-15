<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        
                <li class="nav-item {{ request()->is('dashboard-admin') ? 'active' : '' }}">
                    <a class="nav-link" href="">
                        <i class="icon-grid menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                {{-- <li class="nav-item {{ request()->is('admin/pengguna') ? 'active' : '' }}">
                    <a class="nav-link" href="">
                        <i class="ti-agenda menu-icon"></i>
                        <span class="menu-title">Data Pengguna</span>
                    </a>
                </li> --}}

                <li class="nav-item {{ request()->is('admin/datsdiri') ? 'active' : '' }}">
                    <a class="nav-link" href="">
                        <i class="icon-paper menu-icon"></i>
                        <span class="menu-title">Data  <br> Diri</span>
                    </a>
                </li>
                
                {{-- <li class="nav-item {{ request()->is('admin/laporan') ? 'active' : '' }}">
                    <a class="nav-link" href="">
                        <i class="icon-paper menu-icon"></i>
                        <span class="menu-title">Laporan</span>
                    </a>
                </li> --}}
         
        </ul>
    </nav>
