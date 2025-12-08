<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_tamu    = $_POST['id_tamu'];
    $nama       = $_POST['nama'];
    $telp       = $_POST['telp'];
    $id_ruangan = $_POST['id_ruangan'];
    $check_in   = $_POST['check_in'];
    $check_out  = $_POST['check_out'];
    $jml_tamu   = $_POST['jml_tamu'];
    
    // ID Reservasi Acak
    $id_reservasi = rand(1000, 9999);
    $id_staff_bot = 999; 

    // 1. Cek / Buat Tamu Baru
    $cek_tamu = mysqli_query($koneksi, "SELECT * FROM Tamu WHERE id_tamu = '$id_tamu'");
    if(mysqli_num_rows($cek_tamu) == 0){
        $sql_tamu = "INSERT INTO Tamu (id_tamu, nama_lengkap, No_telp, jenis_kelamin) VALUES ('$id_tamu', '$nama', '$telp', 'L')";
        mysqli_query($koneksi, $sql_tamu);
    }

    // 2. Masukkan Reservasi
    $sql_res = "INSERT INTO Reservasi (id_reservasi, check_in, check_out, juml_tamu, stat_reserv, id_tamu, id_ruangan, id_staff) 
                VALUES ('$id_reservasi', '$check_in', '$check_out', '$jml_tamu', 'Pending', '$id_tamu', '$id_ruangan', '$id_staff_bot')";

    if (mysqli_query($koneksi, $sql_res)) {
        // Update status kamar jadi Booked
        mysqli_query($koneksi, "UPDATE Ruangan SET status_ruangan = 'Booked' WHERE id_ruangan = '$id_ruangan'");
        // Redirect ke halaman sukses
        header("Location: index.php?page=sukses&id=$id_reservasi");
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>