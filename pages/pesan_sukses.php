<div class="container text-center py-5" style="margin-top: 50px; min-height: 60vh;">
    <div class="card shadow p-5 mx-auto border-0" style="max-width: 600px;">
        <div class="text-success mb-3"><i class="fas fa-check-circle fa-5x"></i></div>
        <h2 class="fw-bold">Reservasi Berhasil!</h2>
        <p class="text-muted">Terima kasih telah memilih Grand Aston. Silakan cetak bukti booking Anda.</p>
        
        <div class="alert alert-light border my-4">
            <small class="text-uppercase ls-2">Kode Booking</small>
            <h1 class="fw-bold text-primary">#<?= $_GET['id'] ?></h1>
        </div>
        
        <div class="d-grid gap-2">
            <a href="cetak/bukti_booking.php?id=<?= $_GET['id'] ?>" target="_blank" class="btn btn-gold">
                <i class="fas fa-print me-2"></i> Cetak Bukti Booking
            </a>
            <a href="index.php" class="btn btn-outline-secondary">Kembali ke Home</a>
        </div>
    </div>
</div>
