
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('welcome')}}">
            <div class="sidebar-brand-text mx-3">Quản lý tour du lịch</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <div class="nav-item">
            <a class="nav-link" href="{{route('tour')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Thông tin tour</span></a>
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <div class="nav-item">
            <a class="nav-link collapsed" href="{{route('customer')}}">
                <i class="fas fa-fw fa-cog"></i>
                <span>Thông tin khách hàng</span>
            </a>
        </div>

        <!-- Nav Item - Utilities Collapse Menu -->
        <div class="nav-item">
            <a class="nav-link collapsed" href="{{route('employee')}}">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Thông tin nhân viên</span>
            </a>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
