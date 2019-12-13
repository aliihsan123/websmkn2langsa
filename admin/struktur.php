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
		Struktur Organisasi
	</div>
</div>

<div class="container" style="margin-top: 50px;">
	<div class="card">
	  	<h5 class="card-header">Struktur Organisasi</h5>
	  	<div class="card-body">
		    <form method="post" action="" enctype="multipart/form-data">
		    	<p class="card-text">
		    		<input type="text" name="nama">
			    	<input type="file" name="foto" >
			    	<input type="submit" class="btn btn-primary" name="simpan" value="Add">
			    </p>
		    </form><br><br>
		    <hr><br>

		    <?php 
		    	include "../koneksi.php";
				if (isset($_POST['simpan'])){
					$folder = '../images/';
					$name_p = $_FILES['foto']['name'];
					$rename = date('Hs').$name_p;
					$sumber_p = $_FILES['foto']['tmp_name'];
					move_uploaded_file($sumber_p, $folder.$rename );
					$insert = mysqli_query($koneksi, "INSERT INTO tbl_struktur VALUES (NULL,'".$_POST['nama']."','".$rename."',NULL)");
					if ($insert) {
						echo 'Data berhasil di simpan<br>';
					}else {
						echo 'Data gagal disimpan';
					}
				}
			?><br>
			<div class="card-deck">
			<?php
				$produk =mysqli_query($koneksi, "SELECT * FROM tbl_struktur");
				while ($hasil = mysqli_fetch_array($produk)){
			?>
			  <div class="card">
			    <img src="../images/<?php echo $hasil['foto'] ?>" class="card-img-top" />
			    <div class="card-body">
			      <p class="card-text"><?php echo $hasil['nama']."<br>"; ?></p>
			      <a class="btn btn-primary" href="hapusstruktur.php?id=<?php echo $hasil['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus foto ini ?')">Hapus Foto</a>
			    </div>
			    <div class="card-footer">
			      <small class="text-muted">
			      	Di post pada <?php echo $hasil['tanggal']; ?>
			      </small>
			    </div>
			  </div>
			  <?php } ?>
			</div>
		</div>
	</div>
</div>

</body>
</html>