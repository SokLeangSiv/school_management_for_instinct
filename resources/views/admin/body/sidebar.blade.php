<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <li class="nav-item">
        <a class="sidebar-brand d-flex align-items-center justify-content-center nav-link collapsed" href="index.html"
            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <img src="{{ asset('img/logo.png') }}" width="150px" height="150px" alt="" class="mt-2">
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0 mb-3">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active mt-3">
        <a class="nav-link" href="{{ route('admin.dasboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('get.class') }}" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fa-solid fa-chalkboard"></i>
            <span>Classes</span>
        </a>

    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('get.student') }}" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fa-solid fa-user"></i>
            <span>Students</span>
        </a>

    </li>

    <!-- Nav Item - Utilities Collapse Menu -->



    
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('get.attendance') }}" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fa-solid fa-clipboard-user"></i>
            <span>attendance</span>
        </a>

    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
