<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="hero-content container text-white position-relative">
        <span class="text-uppercase text-warning ls-2 fw-bold mb-2 d-block">Welcome to Grand Aston</span>
        <h1 class="display-3 fw-bold mb-4">A New Vision of Luxury</h1>
        <p class="lead mb-5 opacity-75" style="max-width: 600px;">Rasakan kenyamanan tak tertandingi di jantung kota dengan pelayanan kelas dunia.</p>
        <a href="#booking-area" class="btn btn-gold btn-lg rounded-pill px-5">Book Your Stay</a>
    </div>
</section>

<div class="booking-wrapper" id="booking-area">
    <div class="container">
        <div class="booking-card">
            <h4 class="mb-4 fw-bold text-center">Cari Ketersediaan Kamar</h4>
            <form action="pesan.php" method="POST">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="number" name="id_tamu" class="form-control" id="ktp" placeholder="No KTP" required>
                            <label for="ktp">Nomor Identitas (KTP)</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
                            <label for="nama">Nama Lengkap</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input type="text" name="telp" class="form-control" id="telp" placeholder="Telp" required>
                            <label for="telp">No. WhatsApp</label>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" name="check_in" class="form-control" id="in" required>
                            <label for="in">Check-In</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input type="date" name="check_out" class="form-control" id="out" required>
                            <label for="out">Check-Out</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <select name="id_ruangan" class="form-select" id="room" required>
                                <option value="" selected disabled>Pilih Tipe</option>
                                <?php
                                $q_kamar = mysqli_query($koneksi, "SELECT * FROM Ruangan WHERE status_ruangan='Tersedia'");
                                while($k = mysqli_fetch_array($q_kamar)){
                                    echo "<option value='$k[id_ruangan]'>$k[tipe_ruangan] - Rp ".number_format($k['harga'])."</option>";
                                }
                                ?>
                            </select>
                            <label for="room">Tipe Kamar</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                         <input type="hidden" name="jml_tamu" value="1"> 
                        <button type="submit" class="btn btn-gold w-100 h-100 fw-bold">PESAN SEKARANG</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<section class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="text-gold text-uppercase fw-bold">Fasilitas</h5>
            <h2 class="fw-bold">Experience The Best</h2>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-4 border rounded-3 h-100">
                    <div class="mb-3 text-gold"><i class="fas fa-swimming-pool fa-3x"></i></div>
                    <h4>Infinity Pool</h4>
                    <p class="text-muted">Berenang dengan pemandangan langit kota yang menakjubkan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded-3 h-100">
                    <div class="mb-3 text-gold"><i class="fas fa-utensils fa-3x"></i></div>
                    <h4>Fine Dining</h4>
                    <p class="text-muted">Nikmati hidangan internasional dari Chef bintang lima kami.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded-3 h-100">
                    <div class="mb-3 text-gold"><i class="fas fa-spa fa-3x"></i></div>
                    <h4>Luxury Spa</h4>
                    <p class="text-muted">Manjakan diri Anda dengan perawatan relaksasi terbaik.</p>
                </div>
            </div>
        </div>
    </div>
</section>