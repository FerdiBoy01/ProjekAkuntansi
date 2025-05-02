<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">FrdiBoy <sup>By</sup></div>
    </a>

    <!-- <a class="collapse-item" href="{{ route('anotherTable.index') }}">Tabel Lainnya</a> -->


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Items -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Menu Tabel -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTabel" aria-expanded="true" aria-controls="collapseTabel">
        <i class="fas fa-table"></i>
        <span>Tabel</span>
    </a>
    <div id="collapseTabel" class="collapse" aria-labelledby="headingTabel" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tabel-tabel</h6>
            <a class="collapse-item" href="{{ route('djurnal.index') }}">Data Djurnal</a>
            <a class="collapse-item" href="{{ route('hjurnal.index') }}">Data Hjurnal</a>
            <a class="collapse-item" href="{{ route('perkiraan.index') }}">Data Perkiraan</a>
            <a class="collapse-item" href="{{ route('users.index') }}">Data User</a>
            <a class="collapse-item" href="{{ route('anotherTable.index') }}">Tabel Lainnya</a>
            <!-- Tambahkan link tabel lainnya sesuai kebutuhan -->
        </div>
    </div>
</li>

</ul>

    <!-- Tambahan item disini -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
