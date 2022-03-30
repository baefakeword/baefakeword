<h2>Halaman Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Berat</th>
			<th>Foto</th>
			<th>Aksi</th>

		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		<?php $ambil=$koneksi->query("select * from produk"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>

		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga_produk'] ?></td>
			<td><?php echo $pecah['berat_produk'] ?></td>
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto_produk'] ?>" width="100">
			</td>
			<td>
				<a href="" class ="btn-danger btn">Hapus</a>
				<a href="" class="btn btn-warning">Ubahh</a>
			</td>
		</tr>
		<?php $no++; ?>
	<?php } ?>

	</tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>