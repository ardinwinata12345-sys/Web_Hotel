<?php
include '../koneksi.php';

// 1. PROSES CHECK-IN
if(isset($_POST['act_checkin'])){
    $id = $_POST['id_res'];
    $in = $_POST['in']; $out = $_POST['out']; $jml = $_POST['jml'];
    $tamu = $_POST['id_tamu']; $room = $_POST['room'];
    
    // Panggil Procedure SQL
    $sql = "CALL sp_check_in_tamu('$id', '$in', '$out', '$jml', '$tamu', '$room', '101')";
    if(mysqli_query($koneksi, $sql)) header("Location: index.php");
    else echo mysqli_error($koneksi);
}

// 2. PROSES BAYAR
if(isset($_POST['act_bayar'])){
    $id_res = $_POST['id_res'];
    $nom = $_POST['nominal'];
    $met = $_POST['metode'];
    $id_bayar = rand(10000, 99999); // ID Bayar acak

    $sql = "CALL sp_input_pembayaran('$id_bayar', '$id_res', '$nom', '$met')";
    if(mysqli_query($koneksi, $sql)) header("Location: index.php");
    else echo mysqli_error($koneksi);
}

// 3. PROSES CHECK-OUT
if(isset($_POST['act_checkout'])){
    $id = $_POST['id_res'];
    $sql = "CALL sp_check_out_tamu('$id')";
    if(mysqli_query($koneksi, $sql)) header("Location: index.php");
    else echo mysqli_error($koneksi);
}
?>