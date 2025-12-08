<?php 
// 1. Hubungkan ke Database
include 'koneksi.php'; 
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
                    include 'pages/kamar.php'; // Jika ada
                } else {
                    include 'pages/home.php';
                }
            } else {
                // Default halaman pertama kali buka
                include 'pages/home.php';
            }
        ?>
    </main>

    <?php include 'includes/footers.php'; ?>

</body>
</html>