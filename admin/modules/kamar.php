<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3"><h5 class="mb-0 fw-bold">Status Kamar</h5></div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead><tr><th>No Kamar</th><th>Tipe</th><th>Harga</th><th>Status</th></tr></thead>
            <tbody>
                <?php
                $q = mysqli_query($koneksi, "SELECT * FROM Ruangan ORDER BY no_ruangan ASC");
                while($r = mysqli_fetch_array($q)):
                    $color = ($r['status_ruangan'] == 'Tersedia') ? 'text-success' : 'text-danger fw-bold';
                ?>
                <tr>
                    <td><?= $r['no_ruangan'] ?></td>
                    <td><?= $r['tipe_ruangan'] ?></td>
                    <td><?= number_format($r['harga']) ?></td>
                    <td class="<?= $color ?>"><?= $r['status_ruangan'] ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>