<?php
	$id     = $_GET['id'];
	$tampil = mysqli_query($koneksi, "SELECT * FROM penerbit WHERE id_penerbit='$id'");
	$data   = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
	<h2 align="center">Hapus Data Penerbit</h2>
	<form method="POST">
		<div class="form-group">
			<div class="alert alert-danger" role="alert">
			<h6>Yakin Akan Menghapus Data Penerbit <b><?php echo $data['nama_penerbit'] ?></b> ?</h6>
			<input type="hidden" name="id_penerbit" value="<?php echo $id ?>" required class="form-control">
			<input type="submit" name="hapus" class="btn btn-primary" value="Hapus">
			<a href="index.php?hal=penerbit" class="btn btn-secondary">Batal</a>
			</div>
		</div>
	</form>
</div>

<?php
	if(isset ($_POST['hapus'])){ //proses hapus data penerbit
		$id_penerbit	= $_POST['id_penerbit'];

		$ubah = mysqli_query($koneksi, 'DELETE FROM penerbit WHERE id_penerbit="'.$id_penerbit.'"');
		if ($ubah){
			echo '
				<script>
					alert("Berhasil Menghapus Data Penerbit");
					window.location="index.php?hal=penerbit"; //menuju ke halaman penerbit
				</script>
			';
		}
	}
?>