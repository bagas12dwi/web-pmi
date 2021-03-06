        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #5B8DD7;" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i>
                        <img src="/asssets/img/logo-admin.png" alt="" height="40" />

                    </i>
                </div>
                <div class="sidebar-brand-text mx-3">PMI</div>
            </a>


            <!-- Nav Item - Dashboard -->
            {{-- <li class="nav-item {{ $tittle == 'Dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage data
            </div>

            <li class="nav-item {{ $tittle == 'Produk' ? 'active' : '' }}">
                <a class="nav-link" href="/product-admin">
                    <i class="fas fa-fw fa-box-open"></i>
                    <span>Produk</span></a>
            </li>
            <li class="nav-item {{ $tittle == 'User' ? 'active' : '' }}">
                <a class="nav-link" href="/user">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User</span></a>
            </li>
            <li class="nav-item {{ $tittle == 'Rekap Transaksi' ? 'active' : '' }}">
                <a class="nav-link" href="/transaksi">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Rekap Transaksi</span></a>
            </li>
            <li class="nav-item {{ $tittle == 'Konfirmasi Pembayaran' ? 'active' : '' }}">
                <a class="nav-link" href="/konfirmasi-pembayaran">
                    <i class="fas fa-fw fa-shipping-fast"></i>
                    <span>Konfirmasi Pembayaran</span></a>
            </li> --}}

            <li class="nav-item {{ $title == "Dashboard" ? 'active active-select' : '' }}">
                <div class=" {{ $title == "Dashboard" ? 'select-bar' : '' }} ">
                    <a class="nav-link" href="/admin">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </div>
            </li>
            <!-- Heading -->
            <li class="nav-item {{ $title == "Input Data" ? 'active active-select' : '' }}">
                <div class="{{ $title == "Input Data" ? ' select-bar' : '' }}">
                    <a class="nav-link" href="/inputData">
                        <i class="bi bi-pencil-fill"></i>
                        <span>Input Data</span></a>
                </div>
            </li>
            <li class="nav-item {{ $title == "Reporting" ? 'active active-select' : '' }}">
                <div class="{{ $title == "Reporting" ? ' select-bar' : '' }}">
                    <a class="nav-link" href="/reporting">
                        <i class="bi bi-printer-fill"></i>
                        <span>Reporting</span></a>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
