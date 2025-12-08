<div class="contact-section" id="contact">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-5">
                    <span class="text-uppercase text-muted ls-2">Hubungi Kami</span>
                    <h2 class="display-5 fw-bold mb-4">Butuh Bantuan?</h2>
                    <p class="text-muted mb-5">Tim resepsionis kami siap melayani Anda 24/7. Jangan ragu untuk menghubungi kami untuk pertanyaan khusus atau permintaan spesial.</p>
                    
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-contact"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h6 class="fw-bold mb-0">Lokasi Hotel</h6>
                            <small class="text-muted">Jl. Jendral Sudirman No. 1, Jakarta Pusat</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-contact"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <h6 class="fw-bold mb-0">Telepon</h6>
                            <small class="text-muted">+62 21 5555 8888</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="icon-contact"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h6 class="fw-bold mb-0">Email</h6>
                            <small class="text-muted">reservation@grandaston.com</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="contact-box">
                        <h4 class="fw-bold mb-4">Kirim Pesan</h4>
                        
                        <?php
                        if(isset($_POST['kirim_pesan'])){
                            $nama = $_POST['nama_pengirim'];
                            $email = $_POST['email_pengirim'];
                            $subjek = $_POST['subjek'];
                            $pesan = $_POST['isi_pesan'];
                            
                            $sql_pesan = "INSERT INTO Pesan (nama_pengirim, email_pengirim, subjek, isi_pesan) VALUES ('$nama', '$email', '$subjek', '$pesan')";
                            if(mysqli_query($koneksi, $sql_pesan)){
                                echo "<div class='alert alert-success'>Pesan terkirim! Kami akan membalas via Email.</div>";
                            }
                        }
                        ?>

                        <form method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="nama_pengirim" class="form-control py-3" placeholder="Nama Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email_pengirim" class="form-control py-3" placeholder="Email Aktif" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="subjek" class="form-control py-3" placeholder="Subjek / Judul Pesan" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="isi_pesan" class="form-control" rows="4" placeholder="Tulis pesan Anda di sini..." required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="kirim_pesan" class="btn btn-gold w-100 py-3 fw-bold">KIRIM SEKARANG</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mega-footer">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-white fw-bold mb-4" style="font-family: 'Playfair Display', serif;">GRAND ASTON</h3>
                    <p class="text-white-50 mb-4">Kepercayaan adalah bukti dari janji yang terpenuhi. Nikmati pengalaman menginap tak terlupakan bersama kami.</p>
                    
                    <h6 class="text-uppercase fw-bold mb-3 ls-1" style="font-size: 0.8rem;">Kunjungi Kami</h6>
                    <div class="mb-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    </div>
                    
                    <h6 class="text-uppercase fw-bold mb-3 ls-1" style="font-size: 0.8rem;">Unduh Aplikasi</h6>
                    <div class="d-flex flex-wrap">
                        <a href="#" class="app-btn">
                            <i class="fab fa-apple fa-2x me-2"></i>
                            <div style="line-height: 1.2;">
                                <small style="font-size: 0.6rem;">Download on the</small><br>
                                <span class="fw-bold">App Store</span>
                            </div>
                        </a>
                        <a href="#" class="app-btn">
                            <i class="fab fa-google-play fa-2x me-2"></i>
                            <div style="line-height: 1.2;">
                                <small style="font-size: 0.6rem;">GET IT ON</small><br>
                                <span class="fw-bold">Google Play</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Perusahaan</h5>
                    <a href="#" class="footer-link">Tentang Kami</a>
                    <a href="#" class="footer-link">Karir</a>
                    <a href="#" class="footer-link">Berita & Media</a>
                    <a href="#" class="footer-link">Tanggung Jawab Sosial</a>
                    <a href="#" class="footer-link">Kontak Bisnis</a>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Layanan</h5>
                    <a href="#" class="footer-link">Reservasi Kamar</a>
                    <a href="#" class="footer-link">Ruang Meeting</a>
                    <a href="#" class="footer-link">Paket Pernikahan</a>
                    <a href="#" class="footer-link">Restoran & Bar</a>
                    <a href="#" class="footer-link">Spa & Wellness</a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h5 class="footer-title">Kami Bersertifikat</h5>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fas fa-certificate cert-logo"></i>
                        <div>
                            <div class="fw-bold text-white">ISO 9001:2015</div>
                            <small class="text-white-50">Sistem Manajemen Mutu</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <i class="fas fa-leaf cert-logo"></i>
                        <div>
                            <div class="fw-bold text-white">Green Hotel Award</div>
                            <small class="text-white-50">Ramah Lingkungan & Berkelanjutan</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-shield-alt cert-logo"></i>
                        <div>
                            <div class="fw-bold text-white">CHSE Certified</div>
                            <small class="text-white-50">Cleanliness, Health, Safety, Environment</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-top border-secondary pt-4 text-center text-white-50">
                <small>&copy; 2025 Grand Aston Hotel. All rights reserved. | <a href="#" class="text-white-50 text-decoration-none">Privacy Policy</a> | <a href="#" class="text-white-50 text-decoration-none">Terms of Service</a></small>
            </div>
        </div>
    </footer>