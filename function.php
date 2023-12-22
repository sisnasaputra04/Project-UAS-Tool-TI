<?php
// prosedur menampilkan menu
function menu(){
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">App Perpustakaan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php?hal=penerbit">Penerbit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?hal=buku">Buku</a>
      </li>
    </ul>
  </div>
</nav>
<?php
}

//procedure untuk menampilkan halaman beranda
function beranda(){
?>
<div class="alert alert-light" role="alert">
  Selamat Datang di Aplikasi Perpustakaan Berbasis Website<br>
  Nama : I Kadek Apri Sisna Saputra
  <hr>
  Project UAS Tool Teknologi Informasi
</div>
<?php
}

//prosedur untuk menampilkan footer
function footer(){
?>
<div class="alert alert-primary" role="alert" align="center">
  &copy 2023 I Kadek Apri Sisna Saputra
</div>
<?php
}
?>