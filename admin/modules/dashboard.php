<div class="mb-4">
    <h3 class="fw-bold text-dark">Dashboard Overview</h3>
    <p class="text-muted">Ringkasan aktivitas hotel hari ini.</p>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="stat-card d-flex align-items-center">
            <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-3 me-3">
                <i class="fas fa-calendar-alt fa-2x"></i>
            </div>
            <div>
                <small class="text-muted fw-bold">RESERVASI PENDING</small>
                <?php $p = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Reservasi WHERE stat_reserv='Pending'")); ?>
                <h3 class="mb-0 fw-bold"><?= $p['j'] ?></h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card d-flex align-items-center">
            <div class="bg-success bg-opacity-10 text-success rounded-3 p-3 me-3">
                <i class="fas fa-door-open fa-2x"></i>
            </div>
            <div>
                <small class="text-muted fw-bold">KAMAR TERSEDIA</small>
                <?php $k = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Ruangan WHERE status_ruangan='Tersedia'")); ?>
                <h3 class="mb-0 fw-bold"><?= $k['j'] ?></h3>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="stat-card d-flex align-items-center">
            <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-3 me-3">
                <i class="fas fa-envelope fa-2x"></i>
            </div>
            <div>
                <small class="text-muted fw-bold">PESAN MASUK</small>
                <?php $m = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Pesan")); ?>
                <h3 class="mb-0 fw-bold"><?= $m['j'] ?></h3>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="stat-card d-flex align-items-center">
            <div class="bg-info bg-opacity-10 text-info rounded-3 p-3 me-3">
                <i class="fas fa-users fa-2x"></i>
            </div>
            <div>
                <small class="text-muted fw-bold">TOTAL TAMU</small>
                <?php $t = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Tamu")); ?>
                <h3 class="mb-0 fw-bold"><?= $t['j'] ?></h3>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white py-3 border-bottom">
                <h5 class="mb-0 fw-bold">Akses Cepat</h5>
            </div>
            <div class="card-body">
                <a href="index.php?modul=reservasi" class="btn btn-primary me-2"><i class="fas fa-plus me-1"></i> Proses Check-In</a>
                <a href="index.php?modul=kamar" class="btn btn-outline-dark"><i class="fas fa-search me-1"></i> Cek Kamar</a>
            </div>
        </div>
    </div>
</div>