<h2>Data Pelanggan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		<?php $ambil=$koneksi->query("select * from pelanggan"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>

		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['email_pelanggan']; ?></td>
			<td><?php echo$pecah['telpon']; ?></td>
			<td>
				<a href="" class= "btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $no++; ?>
<?php } ?>

	</tbody>

</table>
<a href="index.php?halaman=tambahpelanggan" class="btn btn-primary">Tambah Data </a>