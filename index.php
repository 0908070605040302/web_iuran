<?php 
session_start();    
include 'koneksi.php';
if(!isset($_SESSION['login_admin'])) {
        echo "<script>alert('anda belum login')</script>";
        echo "<script>location='login.php';</script>";
        exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">iuran warga</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=warga">Warga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?halaman=pembayaran">Pembayaran</a>
            </li>
        </ul>
    </div>
</nav>
</div>



    <?php 
    if(isset($_GET['halaman'])) {
        if($_GET['halaman']=="warga") {
            include 'warga.php';
        }elseif($_GET['halaman']=="pembayaran") {
        }elseif($_GET['halaman']=="tambah_warga") {
            include 'tambah_warga.php';
        }elseif($_GET['halaman']=="tambah_pembayaran") {
        }elseif($_GET['halaman']=="hapus_pembayaran") {
            include 'hapus_pembayaran.php';
        }elseif($_GET['halaman']=="hapus_warga") {
            include 'hapus_warga.php';
        }elseif($_GET['halaman']=="edit_warga") {
            include 'edit_warga.php';
        }elseif($_GET['halaman']=="edit_pembayaran") {
            include 'edit_pembayaran.php';
          }elseif($_GET['halaman']=="logout"){
            include 'logout.php';
        }
    }else {
        include 'home.php';
    }
    
    
    ?>
</body>
</html>
