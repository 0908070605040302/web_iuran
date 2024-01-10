<div class="container">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Warga</title>
    <!-- Tambahkan link Bootstrap CSS di sini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h1 class="display-4">Halaman Tambah Warga</h1>

    <form action="" method="post">
        <ul class="list-unstyled">
            <li class="form-group">
                <label for="nisn">Nisn</label>
                <input name="nisn" placeholder="masukkan nisn" type="text" class="form-control">
            </li>
            <li class="form-group">
                <label for="nama">Nama Warga</label>
                <input name="nama" placeholder="masukkan nama warga" type="text" class="form-control">
            </li>
            <li class="form-group">
                <label for="no_rumah">no_rumah</label>
                <input placeholder="masukkan no rumah" name="no_rumah" type="text" class="form-control">
            </li>
            <li class="form-group">
                <label for="kontak">kontak</label>
                <input placeholder="masukkan kontak" name="kontak" type="text" class="form-control">
            </li>
            <li>
                <button name="simpan" class="btn btn-primary">Simpan</button>
            </li>
        </ul>
    </form>

    <?php 

    if(isset($_POST['simpan'])) {
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $no_rumah = $_POST['no_rumah'];
        $kontak = $_POST['kontak'];

        $result = $koneksi->query("INSERT INTO warga (nisn,nama_warga,no_rumah,kontak)
        VALUES ('$nisn','$nama','$no_rumah','$kontak')
        ");

        if($result) {
            echo "<script>alert('Data berhasil ditambahkan'); location='index.php?halaman=warga';</script>";
        }
    }

    ?>

</body>
</div>
</html>
