<div class="sidebar col-md-2 d-none d-md-block" id="sidebar">
    <div class="p-4 text-center fw-bold fs-4 border-bottom border-secondary mb-3">
        <i class="fas fa-hotel text-warning"></i> ADMIN
    </div>
    
    <a href="index.php?modul=dashboard" class="<?= (!isset($_GET['modul']) || $_GET['modul']=='dashboard')?'active':'' ?>">
        <i class="fas fa-tachometer-alt me-2"></i> Dashboard
    </a>
    <a href="index.php?modul=reservasi" class="<?= (@$_GET['modul']=='reservasi')?'active':'' ?>">
        <i class="fas fa-calendar-check me-2"></i> Reservasi
    </a>
    <a href="index.php?modul=kamar" class="<?= (@$_GET['modul']=='kamar')?'active':'' ?>">
        <i class="fas fa-bed me-2"></i> Data Kamar
    </a>
    <a href="index.php?modul=pesan" class="<?= (@$_GET['modul']=='pesan')?'active':'' ?>">
        <i class="fas fa-envelope me-2"></i> Pesan Masuk
    </a>
    
    <div class="mt-5 px-3">
        <a href="../index.php" target="_blank" class="btn btn-outline-light w-100 text-center py-2" style="border-radius: 30px;">
            <i class="fas fa-globe me-1"></i> Ke Website
        </a>
    </div>
</div>