<?php 
include '../koneksi.php';

// 1. Panggil Header & Sidebar
include 'components/header.php';
include 'components/sidebar.php';
?>

<div class="col-md-10 p-4" style="min-height: 100vh;">
    <?php
    if(isset($_GET['modul'])){
        $modul = $_GET['modul'];
        switch ($modul) {
            case 'dashboard': include 'modules/dashboard.php'; break;
            case 'reservasi': include 'modules/reservasi.php'; break;
            case 'kamar':     include 'modules/kamar.php'; break;
            case 'pesan':     include 'modules/pesan.php'; break;
            default:          include 'modules/dashboard.php'; break;
        }
    } else {
        include 'modules/dashboard.php';
    }
    ?>
</div>

<?php 
// 3. Panggil Footer
include 'components/footer.php'; 
?>