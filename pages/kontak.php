<div class="container py-5">
    <div class="row g-5">
        <div class="col-md-5">
            <span class="text-uppercase text-muted">Hubungi Kami</span>
            <h2 class="display-5 fw-bold mb-4">Butuh Bantuan?</h2>
            <div class="d-flex align-items-center mb-4">
                <div class="icon-contact"><i class="fas fa-map-marker-alt"></i></div>
                <div><h6 class="fw-bold mb-0">Lokasi</h6><small>Jl. Sudirman No. 1</small></div>
            </div>
            <div class="d-flex align-items-center mb-4">
                <div class="icon-contact"><i class="fas fa-phone"></i></div>
                <div><h6 class="fw-bold mb-0">Telepon</h6><small>+62 21 555 888</small></div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="contact-box">
                <h4 class="fw-bold mb-4">Kirim Pesan</h4>
                <?php
                if(isset($_POST['kirim'])){
                    $n = $_POST['nama']; $e = $_POST['email']; $s = $_POST['subjek']; $p = $_POST['pesan'];
                    $sql = "INSERT INTO Pesan (nama_pengirim, email_pengirim, subjek, isi_pesan) VALUES ('$n', '$e', '$s', '$p')";
                    if(mysqli_query($koneksi, $sql)) echo "<div class='alert alert-success'>Pesan Terkirim!</div>";
                }
                ?>
                <form method="POST" action="">
                    <div class="row g-3">
                        <div class="col-6"><input type="text" name="nama" class="form-control" placeholder="Nama" required></div>
                        <div class="col-6"><input type="email" name="email" class="form-control" placeholder="Email" required></div>
                        <div class="col-12"><input type="text" name="subjek" class="form-control" placeholder="Subjek" required></div>
                        <div class="col-12"><textarea name="pesan" class="form-control" rows="4" placeholder="Pesan..." required></textarea></div>
                        <div class="col-12"><button type="submit" name="kirim" class="btn btn-gold w-100">KIRIM</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>