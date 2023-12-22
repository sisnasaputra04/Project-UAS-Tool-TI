<?php
	$id = $_GET['id'];
	$tampil = mysqli_query($koneksi , "SELECT * FROM penerbit WHERE id_penerbit = $id");
	$data = mysqli_fetch_array($tampil);
?>

<div class="alert alert-light" role="alert">
	<div class="card">
		<div class="card-header">
			<h2 align="center">Form Detail Data <?php echo $data['nama_penerbit']?></h2>
		</div>
		<div class="card-body">
			<div class="form-row">
				<div class="form-group col-md-6">
					<p class="form-control">Nama Penerbit : <b><?php echo $data['nama_penerbit'] ?></b></p>
				</div>

				<div class="form-group col-md-6">
					<p class="form-control">Tahun : <b><?php echo $data['tahun'] ?></b></p>
						
				</div>
			</div>
		</div>
		<div class="card-footer text-right">
			<a href="index.php?hal=penerbit" class="btn btn-secondary">Kembali</a>
		</div>
	</div>
</div>

<!-- <div class="card mb-3">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div> -->