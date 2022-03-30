<h2>Halaman Pembelian</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama pelanggan</th>
			<th>Tanggal</th>
			<th>Total</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; ?>
		<?php $ambil=$koneksi->query("select * from pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>

		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['tanggal_pembelian']; ?></td>
			<td><?php echo $pecah['total_pembelian'] ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class= "btn btn-info">Detail</a>
			</td>
		</tr>
		<?php $no++; ?>
	<?php } ?>

	</tbody>
</table>