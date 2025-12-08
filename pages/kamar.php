<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold">Pilihan Kamar Eksklusif</h2>
        <div style="width: 60px; height: 3px; background: #d4af37; margin: 20px auto;"></div>
    </div>
    <div class="row g-4">
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM Ruangan ORDER BY harga ASC");
        while($k = mysqli_fetch_array($query)):
            // Dummy Image Logic
            $img = "https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=500&q=60";
            if($k['tipe_ruangan']=='Deluxe') $img="https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=500&q=60";
            
            // Badge Logic
            $badge = ($k['status_ruangan']=='Tersedia') 
                ? '<span class="badge bg-success position-absolute top-0 end-0 m-3 p-2">Available</span>' 
                : '<span class="badge bg-secondary position-absolute top-0 end-0 m-3 p-2">Booked</span>';
        ?>
        <div class="col-md-4">
            <div class="card room-card h-100 position-relative">
                <?= $badge ?>
                <img src="<?= $img ?>" class="card-img-top room-img-top">
                <div class="card-body text-center p-4">
                    <h5 class="fw-bold"><?= $k['tipe_ruangan'] ?></h5>
                    <div class="price-tag mb-3"><?= formatRp($k['harga']) ?></div>
                    <button class="btn btn-outline-dark rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalRoom<?= $k['id_ruangan'] ?>">
                        <i class="fas fa-eye me-2"></i> Detail
                    </button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalRoom<?= $k['id_ruangan'] ?>" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0 overflow-hidden">
                    <div class="row g-0">
                        <div class="col-md-6"><img src="<?= $img ?>" class="img-fluid h-100 w-100" style="object-fit:cover;"></div>
                        <div class="col-md-6 p-4">
                            <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                            <h3 class="fw-bold"><?= $k['tipe_ruangan'] ?></h3>
                            <p class="text-muted">Kamar No. <?= $k['no_ruangan'] ?></p>
                            <p><?= $k['deskripsi'] ? $k['deskripsi'] : 'Deskripsi belum tersedia.' ?></p>
                            <h6 class="fw-bold">Fasilitas:</h6>
                            <p class="text-muted small"><i class="fas fa-check text-warning"></i> <?= $k['fasilitas'] ?></p>
                            <?php if($k['status_ruangan']=='Tersedia'): ?>
                                <a href="index.php?page=home#booking" class="btn btn-gold w-100 mt-3">Pesan Kamar Ini</a>
                            <?php else: ?>
                                <button class="btn btn-secondary w-100 mt-3" disabled>Tidak Tersedia</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
