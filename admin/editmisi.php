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
		Edit Misi
	</div>
</div>

<div class="container" style="margin-top: 50px;">
	<div class="card">
	  <h5 class="card-header">Misi</h5>
	  <div class="card-body">
	  		<?php  
	  			include "../koneksi.php";
				$sqlEdit = mysqli_query($koneksi, "SELECT * FROM tbl_misi where id='$_GET[id]'");
				$data = mysqli_fetch_array($sqlEdit);
			?>
			<a href="visimisi.php" class="btn btn-outline-warning">< Kembali</a><br><br>
			<form method="post" action="">
				<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
				<input type="text" name="misi" class="container" value="<?php echo $data['misi']; ?>"><br><br>
				<input type="submit" name="edit" class="btn btn-outline-success" value="Update">
			</form>

			<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){
					$id = $_POST['id'];
					$misi = $_POST['misi'];

					if ($misi == ''){
						echo "form belum lengkap";
					}else{
						$edit = mysqli_query($koneksi, "UPDATE tbl_misi SET misi='$misi' where id='$id'");
						if(!$edit){
							echo "Edit data gagal";
						}else{
							header("location:visimisi.php");
						}
					}
				}
			?>	
	  </div>
	</div>
</div>

</body>
</html>