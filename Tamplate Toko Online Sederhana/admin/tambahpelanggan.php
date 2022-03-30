<h2>Tambah Pelanggan</h2>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>nama</label>
		<input type="text" class="form-control" name="nama">
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email">
	</div>

	<div class="form-group">
		<label>Telepon</label>
		<input type="text" class="form-control" name="telpon">
	</div>

	<button class="btn btn-primary " name="save">Simpan</button>
	
</form>
<?php 
if (isset($_POST['save'])) {
	$koneksi->query("insert into pelanggan (nama_pelanggan,email_pelanggan,telpon)
		values ('$_POST[nama]','$_POST[email]','$_POST[telpon]')");

	echo " <div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pelanggan'>";

}


 ?>