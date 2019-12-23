<?php  

	//memanggil session start
	session_start();

	if(!isset($_SESSION['login'])){
		header("location:../login.php?pesan=belum_login");
	}

	include "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>smkn2langsa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../portal_utama/css/bootstrap.css">
	<link rel="stylesheet" href="../portal_utama/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<style type="text/css">
		#index{font-family: Cambria; color: #eee;}
		#logout{font-family: Cambria; float: right; color: #eee;}
		#index:hover,#logout:hover{color: white; text-decoration: underline;}
		body{background-color: #eee;}
	</style>
</head>
<body>

<?php include "header.php"; ?>

<div class="container-fluid" style="background-color: white; padding-top: .6%; padding-bottom: .6%;">
	<div class="container">
		Dashboard Admin
	</div>
</div>

<div class="container">

	<div class="card-deck" style="margin-top: 50px;">
	  <div class="card">
	    <img src="../images/kelola1.png" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Struktur Organisasi</h5>
	      <p class="card-text">Mengelola struktur organisasi SMKN 2 Langsa.</p>
	      <a href="struktur.php" class="btn btn-primary">Kelola</a>
	    </div>
	  </div>
	  <div class="card">
	    <img src="../images/kelola2.png" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Konten Terbaru</h5>
	      <p class="card-text">Mengelola halaman konten terbaru.</p>
	      <a href="konten_terbaru.php" class="btn btn-primary">Kelola</a>
	    </div>
	  </div>
	  <div class="card">
	    <img src="../images/kelola3.png" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Berita Unggulan</h5>
	      <p class="card-text">Mengelola berita yang termasuk kedalam berita unggulan.</p>
	      <a href="berita_unggulan.php" class="btn btn-primary">Kelola</a>
	    </div>
	  </div>
	  <div class="card">
	    <img src="../images/kelola4.png" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Pengumuman</h5>
	      <p class="card-text">Mengelola pengumuman di SMKN 2 Langsa.</p>
	      <a href="pengumuman.php" class="btn btn-primary">Kelola</a>
	    </div>
	  </div>
	</div>

	<div class="card-deck" style="margin-top: 50px;">
	  <div class="card">
	    <img src="../images/kelola5.png" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Gallery Foto</h5>
	      <p class="card-text">Mengelola Gallery foto SMK.</p>
	      <a href="galery.php" class="btn btn-primary">Kelola</a>
	    </div>
	  </div>
	  <div class="card">
	    <img src="../images/kelola6.png" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Profil</h5>
	      <p class="card-text">Mengelola profil SMKN 2 Langsa.</p>
	      <a href="profil.php" class="btn btn-primary">Kelola</a>
	    </div>
	  </div>
	  <div class="card">
	    <img src="../images/kelola7.png" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Kurikulum</h5>
	      <p class="card-text">Mengelola Kurikulum.</p>
	      <a href="kurikulum/index.php" class="btn btn-primary">Kelola</a>
	    </div>
	  </div>
	  <div class="card">
	    <img src="../images/kelola8.png" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">Visi Misi</h5>
	      <p class="card-text">Mengelola Visi Misi di SMKN 2 Langsa.</p>
	      <a href="visimisi.php" class="btn btn-primary">Kelola</a>
	    </div>
	  </div>
	</div>
</br>

</div>

<script src="../portal_utama/js/bootstrap.bundle.js"></script>
<script src="../portal_utama/js/bootstrap.bundle.min.js"></script>
<script src="../portal_utama/js/bootstrap.js"></script>
<script src="../portal_utama/js/bootstrap.min.js"></script>
<script src="../portal_utama/js/jquery.slim.min.js"></script>
<script src="../portal_utama/bootstrap/js/dist/util.js"></script>
<script src="../portal_utama/bootstrap/js/dist/carousel.js"></script>

</body>
</html>