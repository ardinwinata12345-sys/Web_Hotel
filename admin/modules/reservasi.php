<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fw-bold">Manajemen Reservasi</h5>
        <button class="btn btn-sm btn-dark" onclick="window.location.reload()"><i class="fas fa-sync"></i> Refresh</button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr><th>ID</th><th>Tamu</th><th>Kamar</th><th>Check-In/Out</th><th>Status</th><th>Aksi</th></tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT r.*, t.nama_lengkap, ru.no_ruangan FROM Reservasi r 
                              JOIN Tamu t ON r.id_tamu = t.id_tamu 
                              JOIN Ruangan ru ON r.id_ruangan = ru.id_ruangan 
                              ORDER BY r.id_reservasi DESC";
                    $result = mysqli_query($koneksi, $query);
                    while($row = mysqli_fetch_assoc($result)): 
                        $st = $row['stat_reserv'];
                        $bg = ($st=='Pending')?'bg-warning':(($st=='Check-In')?'bg-primary':(($st=='Lunas')?'bg-success':'bg-secondary'));
                    ?>
                    <tr>
                        <td>#<?= $row['id_reservasi'] ?></td>
                        <td><b><?= $row['nama_lengkap'] ?></b></td>
                        <td><span class="badge bg-info text-dark"><?= $row['no_ruangan'] ?></span></td>
                        <td><small><?= $row['check_in'] ?><br><?= $row['check_out'] ?></small></td>
                        <td><span class="badge <?= $bg ?>"><?= $st ?></span></td>
                        <td>
                            <form action="proses.php" method="POST">
                                <input type="hidden" name="id_res" value="<?= $row['id_reservasi'] ?>">
                                
                                <?php if($st == 'Pending'): ?>
                                    <input type="hidden" name="in" value="<?= $row['check_in'] ?>">
                                    <input type="hidden" name="out" value="<?= $row['check_out'] ?>">
                                    <input type="hidden" name="jml" value="<?= $row['juml_tamu'] ?>">
                                    <input type="hidden" name="id_tamu" value="<?= $row['id_tamu'] ?>">
                                    <input type="hidden" name="room" value="<?= $row['id_ruangan'] ?>">
                                    <button type="submit" name="act_checkin" class="btn btn-sm btn-primary">Check-In</button>
                                
                                <?php elseif($st == 'Check-In'): ?>
                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalBayar<?= $row['id_reservasi'] ?>">Bayar</button>
                                    <div class="modal fade" id="modalBayar<?= $row['id_reservasi'] ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header"><h5 class="modal-title">Bayar</h5></div>
                                                <div class="modal-body">
                                                    <input type="number" name="nominal" class="form-control mb-2" placeholder="Nominal" required>
                                                    <select name="metode" class="form-control"><option>Cash</option><option>QRIS</option></select>
                                                </div>
                                                <div class="modal-footer"><button type="submit" name="act_bayar" class="btn btn-success">Proses</button></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php elseif($st == 'Lunas'): ?>
                                    <button type="submit" name="act_checkout" class="btn btn-sm btn-danger">Out</button>
                                <?php endif; ?>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>