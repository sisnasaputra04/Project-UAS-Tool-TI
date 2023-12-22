<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Aplikasi Perpustakaan</title>
  </head>
  <body>
    <?php
    include("koneksi.php"); //memanggil file koneksi.php
    include("function.php"); //memanggil file function.php
    menu(); //memanggil prosedur menu

    if(isset($_GET['caripen'])){
      include("penerbit.php");
    } else if(isset($_GET['caribuk'])){
      include ("buku.php");
    } else if(isset($_GET['hal'])){
      $hal=$_GET['hal'];
      if($hal=='penerbit'){
        include("penerbit.php");
    }else if($hal=='pentambah'){
      include("penerbit_tambah.php");
    }else if($hal=='penedit'){
      include("penerbit_edit.php");
    }else if($hal=='penhapus'){
      include("penerbit_hapus.php");
    }else if($hal=='penshow'){
      include("penerbit_show.php");
    }else if($hal=='buku'){
      include("buku.php");
    }else if($hal=='buktambah'){
      include ("buku_tambah.php");
    }else if($hal=='bukedit'){
      include("buku_edit.php");
    }else if($hal=='bukhapus'){
      include("buku_hapus.php");
    }else if($hal=='bukshow'){
      include("buku_show.php");
    }
  }else{
      beranda(); //memanggil prosedur beranda
    }

    footer(); //memanggil prosedur footer
    ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="bootstrap/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>