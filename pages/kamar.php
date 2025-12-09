<div class="container py-5 mt-5">
    <div class="text-center mb-5">
        <span class="text-warning fw-bold ls-2">AKOMODASI</span>
        <h2 class="display-5 fw-bold" style="color: var(--primary);">Pilihan Kamar & Suites</h2>
    </div>
    
    <div class="row g-4">
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM Ruangan ORDER BY harga ASC");
        while($k = mysqli_fetch_array($query)):
            $img = "https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=800&q=80";
        ?>
        <div class="col-md-4">
            <div class="room-card h-100 d-flex flex-column">
                <div class="position-relative">
                    <img src="<?= $img ?>" class="room-img-top w-100" alt="Kamar">
                    <span class="badge bg-success position-absolute top-0 end-0 m-3"><?= $k['status_ruangan'] ?></span>
                </div>
                <div class="p-4 d-flex flex-column flex-grow-1">
                    <h4 class="fw-bold mb-1" style="font-family: 'Playfair Display', serif;"><?= $k['tipe_ruangan'] ?></h4>
                    <p class="text-muted small">No. <?= $k['no_ruangan'] ?></p>
                    
                    <div class="mt-auto">
                        <div class="price-tag mb-3">Rp <?= number_format($k['harga']) ?></div>
                        <button class="btn btn-gold w-100" data-bs-toggle="modal" data-bs-target="#modalRoom<?= $k['id_ruangan'] ?>">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="modalRoom<?= $k['id_ruangan'] ?>" tabindex="-1">
           <div class="modal-dialog modal-lg modal-dialog-centered">
               <div class="modal-content">
                   <div class="row g-0">
                       <div class="col-md-6">
                           <img src="<?= $img ?>" class="object-fit-cover h-100">
                       </div>
                       <div class="col-md-6 p-5">
                           <button type="button" class="btn-close float-end" data-bs-dismiss="modal"></button>
                           <h3 class="fw-bold" style="color: var(--primary);"><?= $k['tipe_ruangan'] ?></h3>
                           <h4 class="text-warning fw-bold mb-3">Rp <?= number_format($k['harga']) ?></h4>
                           <p class="text-muted"><?= $k['deskripsi'] ? $k['deskripsi'] : 'Kamar nyaman dengan fasilitas lengkap.' ?></p>
                           <hr>
                           <h6 class="fw-bold mb-2">Fasilitas:</h6>
                           <p class="text-muted"><i class="fas fa-check text-warning me-2"></i> <?= $k['fasilitas'] ?></p>
                           <a href="index.php?page=home" class="btn btn-gold w-100 mt-3">Pesan Sekarang</a>
                       </div>
                   </div>
               </div>
           </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>