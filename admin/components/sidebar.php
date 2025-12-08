<div class="sidebar-admin col-md-2 d-none d-md-block p-0">
    <div class="d-flex flex-column h-100">
        <div class="p-4 text-center border-bottom border-secondary">
            <h4 class="text-white fw-bold serif-font m-0"><i class="fas fa-crown text-warning me-2"></i> ASTON</h4>
            <small class="text-white-50">Admin Panel</small>
        </div>
        
        <div class="py-3">
            <small class="text-uppercase text-white-50 px-3 fw-bold" style="font-size: 11px;">Main Menu</small>
            
            <a href="index.php?modul=dashboard" class="sidebar-link <?= (!isset($_GET['modul']) || $_GET['modul']=='dashboard')?'active':'' ?>">
                <i class="fas fa-th-large fa-fw me-3"></i> Dashboard
            </a>
            <a href="index.php?modul=reservasi" class="sidebar-link <?= (@$_GET['modul']=='reservasi')?'active':'' ?>">
                <i class="fas fa-calendar-check fa-fw me-3"></i> Reservasi
            </a>
            <a href="index.php?modul=kamar" class="sidebar-link <?= (@$_GET['modul']=='kamar')?'active':'' ?>">
                <i class="fas fa-bed fa-fw me-3"></i> Manajemen Kamar
            </a>
            <a href="index.php?modul=tamu" class="sidebar-link <?= (@$_GET['modul']=='tamu')?'active':'' ?>">
                <i class="fas fa-users fa-fw me-3"></i> Data Tamu
            </a>
            <a href="index.php?modul=pesan" class="sidebar-link <?= (@$_GET['modul']=='pesan')?'active':'' ?>">
                <i class="fas fa-envelope fa-fw me-3"></i> Kotak Masuk
            </a>
        </div>

        <div class="mt-auto p-4">
            <a href="../index.php" target="_blank" class="btn btn-outline-light w-100 btn-sm">
                <i class="fas fa-external-link-alt me-2"></i> Lihat Website
            </a>
        </div>
    </div>
</div>