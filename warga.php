<div class="container">
<h1>halaman warga</h1>

<?php 

$warga = array();

$ambil = $koneksi->query("SELECT * FROM warga");

while($pecah = $ambil->fetch_assoc()) {
    $warga[] = $pecah;
}

// tombol cari di klik/ditekan




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman warga</title>
</head>
<body>
      <h1 class="display-4">Halaman Warga</h1>

    <a class="btn btn-primary mb-3" href="index.php?halaman=tambah_warga">Tambah Warga</a>



      
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Warga</th>
                <th scope="col">No Rumah</th>
                <th scope="col">Kontak</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
           </tbody style="text-transform: capitalize;">
                <?php foreach($warga as $key => $value): ?>
                    <tr>
                        <td width="50"><?= $key+1; ?></td>
                        <td><?= $value['nama_warga']; ?></td>
                        <td><?= $value['no_rumah']; ?></td>
                        <td><?= $value['kontak']; ?></td>
                       
                        <td class="text-center" width="150">
                            <a href="index.php?halaman=edit_warga&nisn=<?= $value['nisn'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="index.php?halaman=hapus_warga&nisn=<?= $value['nisn'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>    
            </tbody>
        </table>
    </div>
</div>