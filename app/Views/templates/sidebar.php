<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Peduli Diri <sup>Adm00n</sup></div>
    </a>

    <!-- Heading -->
    <div class="sidebar-heading">
        User Profile
    </div>
    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>My profile</span></a>

        <?php if (in_groups('admin')) :
        ?>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Dashboard -->
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                User
            </div>
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Daftar User</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="datauser">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Data User</span></a>
    </li>
<?php endif; ?>
<!-- Divider -->
<hr class="sidebar-divider">
<div class="sidebar-heading">
    Perjalanan
</div>
</li> <!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Tambah Perjalanan</span></a>
</li> <!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Riwayat perjalanan</span></a>
</li>

<!-- Divider -->

<hr class="sidebar-divider my-0">

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="/logout">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>LOG OUT</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->