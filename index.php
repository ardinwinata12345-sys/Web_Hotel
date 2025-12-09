<?php 
// 1. Hubungkan ke Database & Fungsi
include 'koneksi.php'; 
include 'includes/functions.php'; // <--- INI WAJIB DITAMBAHKAN AGAR TIDAK ERROR
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>

    <?php include 'includes/navbar.php'; ?>

    <main>
        <?php 
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                if($page == 'home') {
                    include 'pages/home.php';
                } else if ($page == 'kamar') {
                    include 'pages/kamar.php';
                } else if ($page == 'kontak') { // Tambahkan ini sekalian
                    include 'pages/kontak.php';
                } else {
                    include 'pages/home.php';
                }
            } else {
                include 'pages/home.php';
            }
        ?>
    </main>

    <?php include 'includes/footers.php'; ?>

</body>
</html>