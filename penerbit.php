<h2 align="center">Data Penerbit</h2>

<form action="index.php?hal=penerbit&" method="get">
  <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inLineFormInputName">Name</label>
      <input type="text" name="caripen" class="form-control" id="inLineFormInputName" placeholder="Pencarian Nama Penerbit">
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-success">Cari Penerbit</button>
    </div>
    <div class="col-sm-3 my-1">
      <a href="index.php?hal=pentambah" class="btn btn-primary">Tambah Penerbit</a>
    </div>
  </div>
</form>

<?php
    if(isset ($_GET['caripen'])){
    $cari = $_GET['caripen'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>

	<table class="table">
	    <thead>
	        <tr>
	            <th scope-"col">ID Penerbit</th>
	            <th scope-"col">Nama Penerbit</th>
	            <th scope="col">Tahun</th>
	            <th scope="col">Aksi</th>
	        </tr>
	    </thead>
	    <?php
	        if(isset ($_GET['caripen'])){
	        	$cari = $_GET['caripen'];
	        	$tampil = mysqli_query($koneksi,"SELECT * FROM penerbit WHERE nama_penerbit like '%".$cari."%'");
	        }else{
	        	$tampil = mysqli_query($koneksi,"SELECT * FROM penerbit");
	        }
	        while ($data = mysqli_fetch_array($tampil)){
	    ?>
	    <tbody>
	         <tr>
	            <th scope="row"><?php echo $data['id_penerbit']; ?></th>
	            <td><?php echo $data['nama_penerbit']; ?></td>
	            <td><?php echo $data['tahun']; ?></td>
	            <td>
	                <?php
	                echo'
	                    <a href="index.php?hal=penedit&id='.$data['id_penerbit'].'" class="btn btn-warning">Edit</a>
	                    <a href="index.php?hal=penhapus&id='.$data['id_penerbit'].'" class="btn btn-danger">Hapus</a>
						<a href="index.php?hal=penshow&id='.$data['id_penerbit'].'" class="btn btn-secondary">Show</a>
	                ';?>
	            </td>
	        </tr>
	    </tbody>
	    <?php
	        }
	    ?>
	</table>