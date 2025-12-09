<?php 
include '../koneksi.php';
include 'components/header.php';
include 'components/sidebar.php';
?>

<div id="main-content">
    <?php
    if(isset($_GET['modul'])){
        $modul = $_GET['modul'];
        switch ($modul) {
            case 'dashboard': include 'modules/dashboard.php'; break;
            case 'reservasi': include 'modules/reservasi.php'; break;
            case 'kamar':     include 'modules/kamar.php'; break;
            case 'tamu':      include 'modules/tamu.php'; break;
            case 'pesan':     include 'modules/pesan.php'; break;
            default:          include 'modules/dashboard.php'; break;
        }
    } else {
        include 'modules/dashboard.php';
    }
    ?>
</div>

<?php include 'components/footer.php'; ?>