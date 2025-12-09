<div class="container py-5" style="margin-top: 100px;">
    <div class="text-center mb-5">
        <span class="text-warning fw-bold text-uppercase ls-2">Hubungi Kami</span>
        <h2 class="section-title display-5 fw-bold">Get In Touch</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            Tim resepsionis kami siap melayani Anda 24/7. Jangan ragu untuk menghubungi kami untuk pertanyaan khusus.
        </p>
    </div>

    <div class="card border-0 shadow-lg overflow-hidden rounded-3">
        <div class="row g-0">
            
            <div class="col-md-5 bg-navy text-white p-5 position-relative">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.2);"></div>
                <div class="position-relative z-2">
                    <h3 class="serif fw-bold mb-4">Informasi Kontak</h3>
                    <p class="mb-5 opacity-75">Kunjungi hotel kami atau hubungi melalui saluran di bawah ini.</p>
                    
                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3 text-warning"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Lokasi Hotel</h6>
                            <p class="small opacity-75 mb-0">Jl. Jendral Sudirman No. 1, Jakarta Pusat</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="me-3 text-warning"><i class="fas fa-phone-alt fa-2x"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Telepon</h6>
                            <p class="small opacity-75 mb-0">+62 21 5555 8888</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-5">
                        <div class="me-3 text-warning"><i class="fas fa-envelope fa-2x"></i></div>
                        <div>
                            <h6 class="fw-bold mb-1">Email</h6>
                            <p class="small opacity-75 mb-0">reservation@grandaston.com</p>
                        </div>
                    </div>

                    <div>
                        <h6 class="fw-bold mb-3">Ikuti Kami</h6>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-7 bg-white p-5">
                <h3 class="serif fw-bold mb-4 text-dark">Kirim Pesan</h3>
                
                <?php
                if(isset($_POST['kirim'])){
                    $n = $_POST['nama']; $e = $_POST['email']; $s = $_POST['subjek']; $p = $_POST['pesan'];
                    $sql = "INSERT INTO Pesan (nama_pengirim, email_pengirim, subjek, isi_pesan) VALUES ('$n', '$e', '$s', '$p')";
                    if(mysqli_query($koneksi, $sql)) {
                        echo "<div class='alert alert-success rounded-0 mb-4'><i class='fas fa-check-circle me-2'></i> Pesan Anda telah terkirim!</div>";
                    }
                }
                ?>

                <form method="POST" action="">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label-custom">Nama Lengkap</label>
                            <input type="text" name="nama" class="input-custom bg-light" placeholder="Masukkan nama" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-custom">Email Address</label>
                            <input type="email" name="email" class="input-custom bg-light" placeholder="email@contoh.com" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label-custom">Subjek</label>
                            <input type="text" name="subjek" class="input-custom bg-light" placeholder="Judul pesan..." required>
                        </div>
                        <div class="col-12">
                            <label class="form-label-custom">Isi Pesan</label>
                            <textarea name="pesan" class="input-custom bg-light" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="kirim" class="btn-3d-glow w-100 rounded">
                                KIRIM PESAN <i class="fas fa-paper-plane ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<style>
    .bg-navy { background-color: var(--navy); }
</style>