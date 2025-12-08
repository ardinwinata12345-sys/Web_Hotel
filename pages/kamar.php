<div class="container py-5">
    <div class="text-center mb-5">
        <span class="text-gold text-uppercase fw-bold">Akomodasi</span>
        <h2 class="display-5 fw-bold">Pilihan Kamar & Suites</h2>
    </div>
    
    <div class="row g-4">
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM Ruangan ORDER BY harga ASC");
        while($k = mysqli_fetch_array($query)):
            // Logika gambar dummy
            $img = "https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=500&q=60";
            if($k['tipe_ruangan']=='Deluxe') $img="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=500&q=60";
            
            $status_label = ($k['status_ruangan']=='Tersedia') 
                ? '<span class="badge bg-success position-absolute top-0 start-0 m-3 px-3 py-2">Available</span>' 
                : '<span class="badge bg-secondary position-absolute top-0 start-0 m-3 px-3 py-2">Booked</span>';
        ?>
        <div class="col-md-4">
            <div class="card room-card h-100">
                <div class="position-relative overflow-hidden">
                    <?= $status_label ?>
                    <img src="<?= $img ?>" class="card-img-top room-img-top" alt="Kamar">
                </div>
                <div class="card-body p-4 text-center">
                    <h5 class="fw-bold mb-1"><?= $k['tipe_ruangan'] ?></h5>
                    <p class="text-muted small mb-3">Kamar No. <?= $k['no_ruangan'] ?></p>
                    <h4 class="text-gold fw-bold mb-3"><?= formatRp($k['harga']) ?> <small class="text-muted fs-6 fw-normal">/ malam</small></h4>
                    
                    <button class="btn btn-outline-dark rounded-pill px-4 w-100" data-bs-toggle="modal" data-bs-target="#modalRoom<?= $k['id_ruangan'] ?>">
                        Lihat Detail
                    </button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalRoom<?= $k['id_ruangan'] ?>" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6"><img src="<?= $img ?>" class="img-fluid h-100 w-100" style="object-fit:cover;"></div>
                        <div class="col-md-6 p-5 d-flex flex-column justify-content-center">
                            <button type="button" class="btn-close ms-auto mb-3" data-bs-dismiss="modal"></button>
                            <h3 class="fw-bold serif-font"><?= $k['tipe_ruangan'] ?></h3>
                            <div class="text-gold mb-3 fs-5 fw-bold"><?= formatRp($k['harga']) ?></div>
                            <p class="text-muted"><?= $k['deskripsi'] ? $k['deskripsi'] : 'Kamar dengan fasilitas lengkap dan pemandangan terbaik.' ?></p>
                            
                            <hr>
                            <div class="mb-4">
                                <h6 class="fw-bold text-uppercase fs-7 ls-1">Fasilitas</h6>
                                <p class="text-muted"><i class="fas fa-check-circle text-gold me-2"></i> <?= $k['fasilitas'] ?></p>
                            </div>

                            <?php if($k['status_ruangan']=='Tersedia'): ?>
                                <a href="index.php?page=home#booking" class="btn btn-gold w-100">Pesan Kamar Ini</a>
                            <?php else: ?>
                                <button class="btn btn-secondary w-100" disabled>Kamar Penuh</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>