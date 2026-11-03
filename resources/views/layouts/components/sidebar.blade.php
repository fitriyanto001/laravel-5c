<!-- begin: :sidebar -->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="/" class="brand-link">
                    <!--begin::Brand Image-->
                    <img src="{{ asset('dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
    class="brand-image opacity-75 shadow" />
                    <!--end::Brand Image-->
                    <!--begin::Brand Text-->
                    <span class="brand-text fw-light">AdminLTE 4</span>
                    <!--end::Brand Text-->
                </a>
                <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2" aria-label="Main navigation">
                    <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" data-accordion="false"
    id="navigation">
    <li class="nav-item">
        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('tables') }}" class="nav-link {{ request()->routeIs('tables') ? 'active' : '' }}">
            <i class="nav-icon bi bi-file-earmark-text"></i>
            <p>Tables</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('datatables') }}" class="nav-link {{ request()->routeIs('datatables') ? 'active' : '' }}">
            <i class="nav-icon bi bi-table"></i>
            <p>DataTables</p>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('periode.*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ request()->routeIs('periode.*') ? 'active' : '' }}">
            <i class="nav-icon bi bi-box-seam-fill"></i>
            <p>
                Data Master
                <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                        </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('periode.index') }}"
                                        class="nav-link {{ request()->routeIs('periode.*') ? 'active' : '' }}">
                                        <i class="nav-icon bi bi-calendar3"></i>
                                        <p>Periode</p>
                                    </a>
                                </li>
                             </ul>
                        </li>
                    </ul>
                    <!--end::Sidebar Menu-->

                    <!-- Docs CTA (bottom of sidebar) -->
                    <div class="p-3 mt-3 border-top border-secondary border-opacity-25">
                        <a href="./docs/introduction.html"
                            class="btn btn-sm btn-outline-light w-100 d-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-book" aria-hidden="true"></i>
                            View documentation
                        </a>
                    </div>
                </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->