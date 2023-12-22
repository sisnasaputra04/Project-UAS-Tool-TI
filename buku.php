<h2 align="center">Data Buku</h2>

<form action="index.php?hal=buku&" method="get">
  <div class="form-row align-items-center">
    <div class="col-sm-3 my-1">
      <label class="sr-only" for="inLineFormInputName">Name</label>
      <input type="text" name="caribuk" class="form-control" id="inLineFormInputName" placeholder="Pencarian Judul Buku">
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-success">Cari Buku</button>
    </div>
    <div class="col-sm-3 my-1">
      <a href="index.php?hal=buktambah" class="btn btn-primary">Tambah Buku</a>
    </div>
  </div>
</form>

<?php
    if(isset ($_GET['caribuk'])){
    $cari = $_GET['caribuk'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>

	<table class="table">
	    <thead>
	        <tr>
	            <th scope-"col">ID Buku</th>
	            <th scope-"col">Judul Buku</th>
	            <th scope-"col">Jumlah</th>
	            <th scope-"col">Nama Penerbit</th>
	            <th scope="col">Tahun</th>
	            <th scope="col">Aksi</th>
	        </tr>
	    </thead>
	    <?php
	        if(isset ($_GET['caribuk'])){
	        	$cari = $_GET['caribuk'];
	        	$tampil = mysqli_query($koneksi,"SELECT * FROM viewrelasi WHERE judul_buku LIKE '%".$cari."%' ORDER BY id_buku DESC");
	        }else{
	        	$tampil = mysqli_query($koneksi,"SELECT * FROM viewrelasi ORDER BY id_buku DESC");
	        }
	        while ($data = mysqli_fetch_array($tampil)){
	    ?>
	    <tbody>
	         <tr>
	            <th scope="row"><?php echo $data['id_buku']; ?></th>
	            <td><?php echo $data['judul_buku']; ?></td>
	            <td><?php echo $data['jumlah']; ?></td>
	            <td><?php echo $data['nama_penerbit']; ?></td>
	            <td><?php echo $data['tahun']; ?></td>
	            <td>
	                <?php
	                echo'
	                    <a href="index.php?hal=bukedit&id='.$data['id_buku'].'" class="btn btn-warning">Edit</a>
	                    <a href="index.php?hal=bukhapus&id='.$data['id_buku'].'" class="btn btn-danger">Hapus</a>
						<a href="index.php?hal=bukshow&id='.$data['id_buku'].'" class="btn btn-secondary">Show</a>
	                ';?>
	            </td>
	        </tr>
	    </tbody>
	    <?php
	        }
	    ?>
	</table>