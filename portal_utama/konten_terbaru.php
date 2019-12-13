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

<div class="container-fluid" style="background-color: #2F4F4F; padding-top: 1.2%; padding-bottom: 1.2%;">
	<div class="container">
		<a class="navbar-brand" id="index" href="konten_terbaru.php"><i>Konten Terbaru</i></a>
		<a class="navbar-brand" id="logout" href="../login.php">Login</a>
	</div>
</div>
<div class="container-fluid" style="background-color: white; padding-top: .6%; padding-bottom: .6%;">
	<div class="container">
		<ol style="list-style: none; margin: 0; padding:0;">
		    <li class="breadcrumb-item" style="float: left; margin-right: 10px;"><a href="index.php">Portal Utama</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Konten Terbaru</li>
		</ol>
	</div>
</div>

<div class="container" style="margin-top: 50px;">
	<div class="card">
	  	<div class="card-body">
	  		<?php
	  			include "../koneksi.php";
				$produk =mysqli_query($koneksi, "SELECT * FROM tbl_konten_terbaru");
				while ($hasil = mysqli_fetch_array($produk)){
			?>
			<div class="card-deck">
			  <div class="card">
			    <div class="media">
				    	<img src="../images/<?php echo $hasil['foto'] ?>" class="align-self-center mr-3" width="300px" />
					    <div class="card-body">
					    	<h5 class="card-title"><?php echo $hasil['judul']; ?></h5>
					      	<p class="card-text"><?php echo $hasil['nama']; ?></p>
					    </div>
					</div>
					<div class="card-footer">
				      	<small class="text-muted">
				      		Di post pada <?php echo $hasil['tanggal']; ?>
				      	</small>
				    </div>
			  </div>
			</div><br>
			<?php } ?>
	  	</div>
	</div>
</div><br>


<script src="../portal_utama/js/bootstrap.bundle.js"></script>
<script src="../portal_utama/js/bootstrap.bundle.min.js"></script>
<script src="../portal_utama/js/bootstrap.js"></script>
<script src="../portal_utama/js/bootstrap.min.js"></script>
<script src="../portal_utama/js/jquery.slim.min.js"></script>
<script src="../portal_utama/bootstrap/js/dist/util.js"></script>
<script src="../portal_utama/bootstrap/js/dist/carousel.js"></script>

</body>
</html>