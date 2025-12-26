<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('editor.home') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('template_admin/img/Logo_KPM.png') }}" alt="..." width="190px">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('editor.home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item {{ Request::is('editor/users') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('editor.users') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>User</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item {{ Request::is('editor/master-head') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('editor.master-head') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Master Head</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item {{ Request::is('editor/contact') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('editor.contact') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Contact</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item {{ Request::is('editor/product') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('editor.product') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Product</span></a>
    </li>
    <hr class="sidebar-divider d-one d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>