<nav id="sidebar">
    <div class="sidebar-header">
        <div class="d-flex align-items-center brand-wrapper">
            <i class="fas fa-hotel text-warning fa-2x"></i>
            <span class="brand-text">ASTON</span>
        </div>
        
        <button type="button" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <div class="mt-4">
        <a href="index.php?modul=dashboard" class="nav-link-admin <?= (!isset($_GET['modul']) || $_GET['modul']=='dashboard')?'active':'' ?>">
            <i class="fas fa-th-large"></i>
            <span class="link-text">Dashboard</span>
        </a>
        <a href="index.php?modul=reservasi" class="nav-link-admin <?= (@$_GET['modul']=='reservasi')?'active':'' ?>">
            <i class="fas fa-calendar-check"></i>
            <span class="link-text">Reservasi</span>
        </a>
        <a href="index.php?modul=kamar" class="nav-link-admin <?= (@$_GET['modul']=='kamar')?'active':'' ?>">
            <i class="fas fa-bed"></i>
            <span class="link-text">Data Kamar</span>
        </a>
        <a href="index.php?modul=tamu" class="nav-link-admin <?= (@$_GET['modul']=='tamu')?'active':'' ?>">
            <i class="fas fa-users"></i>
            <span class="link-text">Data Tamu</span>
        </a>
        <a href="index.php?modul=pesan" class="nav-link-admin <?= (@$_GET['modul']=='pesan')?'active':'' ?>">
            <i class="fas fa-envelope"></i>
            <span class="link-text">Kotak Masuk</span>
        </a>
    </div>

    <div class="sidebar-footer">
        <a href="../index.php" target="_blank" class="btn-web">
            <i class="fas fa-globe"></i>
            <span class="ms-2">Ke Website</span>
        </a>
    </div>
</nav>