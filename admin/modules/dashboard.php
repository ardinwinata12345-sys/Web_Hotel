<div class="row g-4 mb-4">
    <div class="col-md-12">
        <h2 class="fw-bold text-dark">👋 Hello, Staff!</h2>
        <p class="text-muted">Selamat datang di panel kontrol operasional hotel.</p>
    </div>

    <div class="col-md-4">
        <div class="card card-stat bg-white p-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <small class="text-muted text-uppercase fw-bold">Pending</small>
                    <?php $p = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Reservasi WHERE stat_reserv='Pending'")); ?>
                    <h2 class="fw-bold text-primary mb-0"><?= $p['j'] ?></h2>
                </div>
                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                    <i class="fas fa-user-clock"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card card-stat bg-white p-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <small class="text-muted text-uppercase fw-bold">Tersedia</small>
                    <?php $k = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Ruangan WHERE status_ruangan='Tersedia'")); ?>
                    <h2 class="fw-bold text-success mb-0"><?= $k['j'] ?></h2>
                </div>
                <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                    <i class="fas fa-bed"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-stat bg-white p-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <small class="text-muted text-uppercase fw-bold">Pesan</small>
                    <?php $m = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Pesan")); ?>
                    <h2 class="fw-bold text-warning mb-0"><?= $m['j'] ?></h2>
                </div>
                <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
        </div>
    </div>
</div>
