<div class="card shadow-sm border-0">
    <div class="card-header bg-white py-3">
        <h5 class="mb-0 fw-bold">Data Tamu</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID Tamu</th>
                        <th>Nama Lengkap</th>
                        <th>No. Telp</th>
                        <th>Jenis Kelamin</th>
                        <th>Jml Menginap</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query Join untuk menghitung berapa kali tamu menginap
                    $q = mysqli_query($koneksi, "SELECT t.*, COUNT(r.id_reservasi) as total_inap 
                                                 FROM Tamu t 
                                                 LEFT JOIN Reservasi r ON t.id_tamu = r.id_tamu 
                                                 GROUP BY t.id_tamu");
                    while($row = mysqli_fetch_array($q)):
                    ?>
                    <tr>
                        <td><?= $row['id_tamu'] ?></td>
                        <td><?= $row['nama_lengkap'] ?></td>
                        <td><?= $row['No_telp'] ?></td>
                        <td><?= ($row['jenis_kelamin']=='L')?'Laki-laki':'Perempuan' ?></td>
                        <td class="text-center"><span class="badge bg-secondary"><?= $row['total_inap'] ?> kali</span></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>