<div class="container">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Warga</title>
    <!-- Tambahkan link Bootstrap CSS di sini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h1 class="display-4">Halaman Edit Warga</h1>

    <?php 
    $nisn = $_GET['nisn'];
    $ambil = $koneksi->query("SELECT * FROM warga WHERE nisn='$nisn'");
    $pecah = $ambil->fetch_assoc();
    ?>

    <form action="" method="post">
        <ul class="list-unstyled">
            <li class="form-group">
                <label for="nisn">Nisn</label>
                <input name="nisn" value="<?= $pecah['nisn']  ?>" type="text" class="form-control">
            </li>
            <li class="form-group">
                <label for="nama">Nama Warga</label>
                <input name="nama" value="<?= $pecah['nama_warga']  ?>" type="text" class="form-control">
            </li>
            <li class="form-group">
                <label for="no_rumah">No Rumah</label>
                <input name="no_rumah" value="<?= $pecah['no_rumah']  ?>" type="text" class="form-control">
            </li>
            <li class="form-group">
                <label for="hontak">Kontak</label>
                <input name="kontak" value="<?= $pecah['kontak']  ?>" type="text" class="form-control">
            </li>
            <li>
                <button name="simpan" class="btn btn-primary">Simpan</button>
            </li>
        </ul>
    </form>

    <?php 
    if(isset($_POST['simpan'])){
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $no_rumah = $_POST['no_rumah'];
        $kontak = $_POST['kontak'];

        $result = $koneksi->query("UPDATE warga SET 
        nisn='$nisn',
        nama_warga='$nama',
        no_rumah='$no_rumah',
        kontak='$kontak'
         WHERE nisn='$nisn'");

        if($result) {
            echo "<script>alert('Data berhasil diupdate'); location='index.php?halaman=warga'</script>";
        }
    }
    ?>

    <!-- Tambahkan script Bootstrap JavaScript di sini -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</div>
</html>
