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
		Visi dan Misi
	</div>
</div>

<div class="container" style="margin-top: 50px;">
	<div class="card">
	  <h5 class="card-header">Visi</h5>
	  <div class="card-body">
	  	<?php  
	  		include "../koneksi.php";
	  		$sql = mysqli_query($koneksi, "SELECT * from tbl_visi");
	  		$data = mysqli_fetch_array($sql);
	  	?>
	    <p class="card-text">
	    	<form method="post" action="">
	    		<textarea class="container" name="visi">
<?php echo $data['visi']; ?>
	    		</textarea>
	    		<input type="submit" name="update" class="btn btn-primary" value="Update">
	    	</form>
	    	<?php  

	    		if(isset($_POST['update'])){
					//variabel dari elemen form
					$visi = $_POST['visi'];

					if($visi == ''){
						echo "Form belum lengkap";
					}else {
						//proses edit data guru
						$edit = mysqli_query($koneksi, 
							"UPDATE tbl_visi SET 
								visi='$visi' WHERE id=1");

						if(!$edit){
							echo "Edit data gagal";
						}else {
							header('location:visimisi.php');
							echo "Edit data berhasil";
						}
					}
				}
	    	?>
	    </p>
	  </div>
	</div><br>

	<div class="card">
	  	<h5 class="card-header">Misi</h5>
	  	<div class="card-body">
	    	<p class="card-text">
	    		<form method="post" action="">
	    			<table class="table table-striped table-light">
	    				<tr>
	    					<td><input type="text" class="container" name="misi" placeholder="Tambah misi baru"></td>
	    					<td><input class="btn btn-primary" type="submit" name="simpan" value="Add"></td>
	    				</tr>
	    			</table>
	    		</form>
	    		<?php  
	    			if($_SERVER['REQUEST_METHOD']=='POST'){
	    				$misi = $_POST['misi'];

	    				if($misi == ''){
	    					echo "Form belum lengkap";
	    				}else{
	    					$simpan = mysqli_query($koneksi, "INSERT into tbl_misi(misi) VALUES('$misi')");

	    					if(!$simpan){
	    						echo "Penyimpanan data gagal";
	    					}else{
	    						header("location:visimisi.php");
	    					}
	    				}
	    			}
	    		?>
    			<table class="table table-striped table-light">
    				<?php  
			  			include "../koneksi.php";
			  			$sql = mysqli_query($koneksi, "SELECT * from tbl_misi");
			  			while($data = mysqli_fetch_array($sql)){
			  		?>
    				<tr>
    					<td><?php echo $data['id']; ?></td>
    					<td><input class="container" type="text" value="<?php echo $data['misi']; ?>" name="misi"></td>
    					<td><a href="editmisi.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    					<td><a href="hapusmisi.php?id=<?php echo $data['id']; ?>">Hapus</a></td>
    				</tr>
    				<?php } ?>
    			</table>
	    	</p>
		</div>
	</div>
</div><br>

</body>
</html>