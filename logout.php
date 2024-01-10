 <?php 

if(isset($_SESSION['login_admin'])) {
    session_destroy();
    echo "<script>alert('anda telah logout')</script>";
    echo "<script>location='login.php';</script>";
} else {
    echo "<script>alert('sesi tidak diinisialisasi')</script>";
    echo "<script>location='login.php';</script>";
}
?>