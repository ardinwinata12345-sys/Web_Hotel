<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3"><h5 class="mb-0 fw-bold">Kotak Masuk</h5></div>
    <div class="card-body">
        <div class="list-group">
            <?php
            $q = mysqli_query($koneksi, "SELECT * FROM Pesan ORDER BY id_pesan DESC");
            while($p = mysqli_fetch_array($q)):
            ?>
            <a href="#" class="list-group-item list-group-item-action p-3">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-1 fw-bold"><?= $p['subjek'] ?></h6>
                    <small class="text-muted"><?= $p['tanggal'] ?></small>
                </div>
                <p class="mb-1"><?= $p['isi_pesan'] ?></p>
                <small class="text-primary"><i class="fas fa-user"></i> <?= $p['nama_pengirim'] ?> (<?= $p['email_pengirim'] ?>)</small>
            </a>
            <?php endwhile; ?>
        </div>
    </div>
</div>