<?php
// File ini khusus menyimpan fungsi-fungsi sakti

function formatRp($angka){
    return "Rp " . number_format($angka,0,',','.');
}

function statusBadge($status){
    if($status == 'Tersedia') return '<span class="badge bg-success">Available</span>';
    if($status == 'Booked') return '<span class="badge bg-secondary">Booked</span>';
    return '<span class="badge bg-danger">Maintenance</span>';
}

function tglIndo($tanggal){
    // Mengubah 2025-12-01 jadi 01 Desember 2025
    $bulan = array (
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>