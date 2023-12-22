<?php
    $id     = $_GET['id'];
	$tampil = mysqli_query($koneksi, "SELECT * FROM penerbit WHERE id_penerbit='$id'");
	$data   = mysqli_fetch_array($tampil);
?>

 <div class="alert alert-light" role="alert">
 	<h2 align="center">Form Ubah Data Penerbit</h2>
 	<form method="POST">
 		<div class="form-group">
 			<input type="hidden" name="id_penerbit" value="<?php echo $id ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Penerbit">
 			<label for="exampleInputEmail1">Nama Penerbit</label>
 			<input type="text" name="nama_penerbit" value="<?php echo $data['nama_penerbit'] ?>" required class="form-control" id="exampleInputEmail1" aria-describedby="emaiHelp" placeholder="Masukkan Nama Penerbit">
 		</div>
 		<div class="form-group">
 			<label for="exampleInputPassword1">Tahun</label>
 			<input type="number" name="tahun" value="<?php echo $data['tahun'] ?>" required class="form-control" id= "exampleInputPassword1" placeholder="Password">
 		</div>

 		<input type="submit" name="ubah" class="btn btn-primary" value="Simpan Perubahan">
 		<a href="index.php?hal=penerbit" class="btn btn-secondary">Batal</a>
 	</form>
 </div>

 <?php
 	if(isset($_POST['ubah'])){ //proses simpan perubahan data penerbit
 		$id_penerbit 	=	$_POST['id_penerbit'];
 		$nama_penerbit 	=	$_POST['nama_penerbit'];
 		$tahun 			= 	$_POST['tahun'];

 		$ubah = mysqli_query($koneksi, 'UPDATE penerbit SET nama_penerbit="'.$nama_penerbit.'",tahun="'.$tahun.'" WHERE id_penerbit="'.$id_penerbit.'"');
 		if ($ubah){
 			echo '
 				<script>
 					alert("Berhasil Mengubah Data Penerbit");
 					window.location="index.php?hal=penerbit"; //menuju ke halaman penerbit
 				</script>
 			';
 		}
 	}
 ?>