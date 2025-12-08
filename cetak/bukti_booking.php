<?php 
include '../koneksi.php'; 
include '../includes/functions.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM Reservasi r JOIN Tamu t ON r.id_tamu = t.id_tamu JOIN Ruangan ru ON r.id_ruangan = ru.id_ruangan WHERE r.id_reservasi = '$id'");
$r = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Receipt #<?= $id ?></title>
    <style>
        body { font-family: 'Courier New', monospace; background: #eee; padding: 40px; }
        .ticket { background: white; width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        .header { text-align: center; border-bottom: 2px dashed #000; padding-bottom: 15px; margin-bottom: 15px; }
        .item { display: flex; justify-content: space-between; margin-bottom: 8px; font-size: 14px; }
        .total { border-top: 2px dashed #000; padding-top: 10px; margin-top: 15px; font-weight: bold; font-size: 16px; }
    </style>
</head>
<body onload="window.print()">
    <div class="ticket">
        <div class="header">
            <h2 style="margin:0;">GRAND ASTON</h2>
            <small>Jl. Jendral Sudirman No. 1</small>
        </div>
        
        <div class="item"><span>Tgl Booking</span> <span><?= date('d/m/Y') ?></span></div>
        <div class="item"><span>Kode Booking</span> <b>#<?= $r['id_reservasi'] ?></b></div>
        <br>
        <div class="item"><span>Tamu</span> <span><?= $r['nama_lengkap'] ?></span></div>
        <div class="item"><span>Kamar</span> <span><?= $r['tipe_ruangan'] ?> (<?= $r['no_ruangan'] ?>)</span></div>
        <div class="item"><span>Check In</span> <span><?= tglIndo($r['check_in']) ?></span></div>
        <div class="item"><span>Check Out</span> <span><?= tglIndo($r['check_out']) ?></span></div>
        
        <div class="total item">
            <span>TOTAL ESTIMASI</span>
            <span><?= formatRp($r['harga']) ?></span>
        </div>
        
        <br>
        <center><small>*Harap tunjukkan saat Check-in</small></center>
    </div>
</body>
</html>