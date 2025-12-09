<div class="mb-5">
    <h5 class="text-secondary mb-1">Overview</h5>
    <h2 class="fw-bold" style="color: var(--navy-dark);">Dashboard Statistik</h2>
</div>

<div class="row g-4">
    <div class="col-md-3">
        <div class="card-dashboard">
            <div class="icon-box bg-primary bg-opacity-10 text-primary">
                <i class="fas fa-clock"></i>
            </div>
            <div>
                <div class="card-title-small">Pending</div>
                <?php $p = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Reservasi WHERE stat_reserv='Pending'")); ?>
                <div class="card-value"><?= $p['j'] ?></div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-dashboard">
            <div class="icon-box bg-success bg-opacity-10 text-success">
                <i class="fas fa-door-open"></i>
            </div>
            <div>
                <div class="card-title-small">Kamar Tersedia</div>
                <?php $k = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Ruangan WHERE status_ruangan='Tersedia'")); ?>
                <div class="card-value"><?= $k['j'] ?></div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-dashboard">
            <div class="icon-box bg-warning bg-opacity-10 text-warning">
                <i class="fas fa-envelope"></i>
            </div>
            <div>
                <div class="card-title-small">Pesan Masuk</div>
                <?php $m = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Pesan")); ?>
                <div class="card-value"><?= $m['j'] ?></div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card-dashboard">
            <div class="icon-box bg-info bg-opacity-10 text-info">
                <i class="fas fa-users"></i>
            </div>
            <div>
                <div class="card-title-small">Total Tamu</div>
                <?php $t = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) as j FROM Tamu")); ?>
                <div class="card-value"><?= $t['j'] ?></div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-md-8">
        <div class="card border-0 shadow-sm" style="border-radius: 20px;">
            <div class="card-header bg-white border-0 pt-4 px-4">
                <h5 class="fw-bold mb-0">Reservasi Terbaru</h5>
            </div>
            <div class="card-body px-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="text-secondary small">
                            <tr><th>Tamu</th><th>Check-In</th><th>Status</th></tr>
                        </thead>
                        <tbody>
                            <?php
                            $q_new = mysqli_query($koneksi, "SELECT r.*, t.nama_lengkap FROM Reservasi r JOIN Tamu t ON r.id_tamu=t.id_tamu ORDER BY id_reservasi DESC LIMIT 5");
                            while($rn = mysqli_fetch_array($q_new)):
                                $badge = ($rn['stat_reserv']=='Pending') ? 'bg-warning' : 'bg-success';
                            ?>
                            <tr>
                                <td class="fw-bold"><?= $rn['nama_lengkap'] ?></td>
                                <td><?= $rn['check_in'] ?></td>
                                <td><span class="badge <?= $badge ?> rounded-pill"><?= $rn['stat_reserv'] ?></span></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>