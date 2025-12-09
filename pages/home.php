<section class="hero">
    <div class="container text-center">
        <p class="text-uppercase fw-bold ls-2 mb-2 text-warning">Welcome to Grand Aston</p>
        <h1 class="display-3 fw-bold mb-4 text-white">
            Experience The Extraordinary
        </h1>
        <p class="lead text-white opacity-75 mb-0">Temukan kenyamanan tak tertandingi di jantung kota.</p>
    </div>
</section>

<div class="container">
    <div class="booking-container">
        <h3 class="text-center mb-4 fw-bold" style="color: var(--primary);">Reservasi Online</h3>
        <form action="pesan.php" method="POST">
            <div class="row g-3 align-items-end">
                <div class="col-md-3">
                    <label class="form-label text-muted small fw-bold">Check-In</label>
                    <input type="date" name="check_in" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label text-muted small fw-bold">Check-Out</label>
                    <input type="date" name="check_out" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label text-muted small fw-bold">Tipe Kamar</label>
                    <select name="id_ruangan" class="form-select" required>
                        <option value="" selected disabled>Pilih Kamar...</option>
                        <?php
                        $q_kamar = mysqli_query($koneksi, "SELECT * FROM Ruangan WHERE status_ruangan='Tersedia'");
                        while($k = mysqli_fetch_array($q_kamar)){
                            echo "<option value='$k[id_ruangan]'>$k[tipe_ruangan] - Rp ".number_format($k['harga'])."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="hidden" name="jml_tamu" value="1">
                    <input type="hidden" name="id_tamu" value="999">
                    <input type="hidden" name="nama" value="Guest">
                    <input type="hidden" name="telp" value="-">
                    <button type="submit" class="btn btn-gold w-100 fw-bold">CARI</button>
                </div>
            </div>
        </form>
    </div>
</div>

<section class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="text-warning fw-bold text-uppercase ls-2">Fasilitas</span>
            <h2 class="fw-bold" style="color: var(--primary);">Kenapa Memilih Kami?</h2>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-4 bg-white shadow-sm rounded-3 h-100">
                    <i class="fas fa-swimming-pool fa-3x text-warning mb-3"></i>
                    <h4>Infinity Pool</h4>
                    <p class="text-muted">Pemandangan kota yang menakjubkan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white shadow-sm rounded-3 h-100">
                    <i class="fas fa-utensils fa-3x text-warning mb-3"></i>
                    <h4>Fine Dining</h4>
                    <p class="text-muted">Sajian kuliner internasional.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white shadow-sm rounded-3 h-100">
                    <i class="fas fa-spa fa-3x text-warning mb-3"></i>
                    <h4>Luxury Spa</h4>
                    <p class="text-muted">Relaksasi total untuk tubuh Anda.</p>
                </div>
            </div>
        </div>
    </div>
</section>