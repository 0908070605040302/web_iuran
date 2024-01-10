<?php 

$nisn = $_GET['nisn'];

$result = $koneksi->query("DELETE FROM warga WHERE nisn = '$nisn'");

   if($result) {
        echo "<script>alert('data berhasil dihapus'); location='index.php?halaman=warga';</script>";
    }



?>