<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content container">
        <h1 class="hero-title">Experience The Extraordinary</h1>
        <p class="hero-subtitle">Kepercayaan adalah bukti dari janji yang terpenuhi.</p>
        <a href="#booking-area" class="btn btn-outline-light rounded-pill px-5 py-3">Jelajahi Kamar</a>
    </div>
</section>

<div class="booking-wrapper" id="booking-area">
    <div class="container">
        <div class="booking-card">
            <h3 class="text-center mb-4 fw-bold" style="color: var(--primary);">Reservasi Online</h3>
            
            <form action="pesan.php" method="POST">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4">
                        <label class="form-label">No. Identitas (KTP)</label>
                        <input type="number" name="id_tamu" class="form-control" placeholder="3301xxxx" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">No. Telepon</label>
                        <input type="text" name="telp" class="form-control" placeholder="08xxxx" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Check-In</label>
                        <input type="date" name="check_in" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Check-Out</label>
                        <input type="date" name="check_out" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Pilih Kamar</label>
                        <select name="id_ruangan" class="form-select" required>
                            <option value="" selected disabled>-- Pilih Tipe --</option>
                            <?php
                            // Mengambil data kamar yang tersedia
                            $q_kamar = mysqli_query($koneksi, "SELECT * FROM Ruangan WHERE status_ruangan='Tersedia'");
                            while($k = mysqli_fetch_array($q_kamar)){
                                $harga_fmt = "Rp " . number_format($k['harga'],0,',','.');
                                echo "<option value='$k[id_ruangan]'>$k[tipe_ruangan] - $harga_fmt</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label text-white">.</label>
                        <button type="submit" class="btn btn-gold w-100">PESAN SEKARANG</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="py-5 mt-5">
    <div class="container text-center">
        <h5 class="text-muted text-uppercase letter-spacing-2">Fasilitas</h5>
        <h2 class="mb-5 fw-bold" style="color: var(--primary);">Kenapa Memilih Kami?</h2>
        
        <div class="row g-4">
            <div class="col-md-4">
                <i class="fas fa-swimming-pool fa-3x text-warning mb-3"></i>
                <h4>Kolam Renang Infinity</h4>
                <p class="text-muted">Nikmati pemandangan kota dari ketinggian sambil bersantai.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-utensils fa-3x text-warning mb-3"></i>
                <h4>Restoran Bintang 5</h4>
                <p class="text-muted">Sajian kuliner lokal dan internasional dari chef terbaik.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-wifi fa-3x text-warning mb-3"></i>
                <h4>High Speed Wifi</h4>
                <p class="text-muted">Koneksi internet super cepat di seluruh area hotel.</p>
            </div>
        </div>
    </div>
</section>