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
		Galery Foto
	</div>
</div>

<div class="container" style="margin-top: 50px;">
	<div class="card">
	  	<h5 class="card-header">Gallery Foto</h5>
	  	<div class="card-body">
		    <form method="post" action="" enctype="multipart/form-data">
		    	<p class="card-text">
		    		<input type="text" name="judul" placeholder="Judul berita" class="container"><br><br>
		    		<input type="text" name="nama" placeholder="Isi berita" class="container"><br><br>
			    	<input type="file" name="foto" >
			    	<input type="submit" class="btn btn-primary" name="simpan" value="Add">
			    </p>
		    </form>

		    <?php 
		    	include "../koneksi.php";
				if (isset($_POST['simpan'])){
					$folder = '../images/';
					$name_p = $_FILES['foto']['name'];
					$rename = date('Hs').$name_p;
					$sumber_p = $_FILES['foto']['tmp_name'];
					move_uploaded_file($sumber_p, $folder.$rename );
					$insert = mysqli_query($koneksi, "INSERT INTO tbl_galery VALUES (NULL,'".$_POST['judul']."','".$_POST['nama']."','".$rename."','tidak aktif',NULL)");
					if ($insert) {
						echo 'Data berhasil di simpan<br>';
					}else {
						echo 'Data gagal disimpan';
					}
				}
			?><br><br><br><br>
			<hr><br>
			<?php
				$produk =mysqli_query($koneksi, "SELECT * FROM tbl_galery");
				while ($hasil = mysqli_fetch_array($produk)){
			?>
			<div class="card-deck">
				<div class="card">
				  	<div class="media">
				    	<img src="../images/<?php echo $hasil['foto'] ?>" class="align-self-center mr-3" width="300px" />
					    <div class="card-body">
					    	<h5 class="card-title"><?php echo $hasil['judul']; ?></h5>
					      	<p class="card-text"><?php echo $hasil['nama']; ?></p>
					      	<a class="btn btn-primary" href="hapus_galery.php?id=<?php echo $hasil['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus foto ini ?')">Hapus Foto</a>
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
</div>

<div class="container" style="margin-top: 50px;">
	<div class="card">
	  	<h5 class="card-header">Aktifkan Galery</h5>
	  	<div class="card-body">
	  		<p>
	  			Hanya bisa mengaktifkan paling banyak 4 berita.
	  		</p>
		    	<table class="table table-striped table-light">
		    		<tr>
		    			<th>No</th>
		    			<th>Judul Galery</th>
		    			<th>Status</th>
		    			<th>Aksi</th>
		    		</tr>
		    		<?php  
				    	include "../koneksi.php";
				    	$sql = mysqli_query($koneksi, "SELECT * from tbl_galery");
				    	$no=1;
				    	while($data=mysqli_fetch_array($sql)){
				    ?>
		    		<tr>
		    			<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
		    			<td><?php echo $no; ?></td>
		    			<td><?php echo $data['judul']; ?></td>
		    			<td><?php echo $data['kategori']; ?></td>
		    			<td>
		    				<a href="aktifgalery.php?id=<?php echo $data['id']; ?>">Aktif |</a>
		    				<a href="nonaktifgalery.php?id=<?php echo $data['id']; ?>">Nonaktif</a>
		    			</td>
		    		</tr>
		    		<?php $no++; } ?>
		    	</table>
		</div>
	</div>
</div><br>

</body>
</html>