<h2>Data Warga</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nisn</th>
			<th>Nama</th>
			<th>no_rumah</th>
			<th>kontak</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM warga JOIN warga ON warga.
		nisn=warga.nisn"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nisn']; ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td><?php echo $pecah['no_rumah']; ?></td>
			<td><?php echo $pecah['kontak']; ?></td>
			<td>
				<a href="index.php?halaman=hapuswarga&nisn=<?php echo $pecah['nisn']; ?>"class="btn-danger btn">hapus</a>
				<a href="index.php?halaman=editwarga&nisn=<?php echo $pecah['nisn'];  ?>" class="btn btn-warning">edit</a>

			

			</td>
		</tr>
    <?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahwarga" class="btn btn-primary">Tambah Data</a>

</script>