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
		Pengumuman
	</div>
</div>

<div class="container" style="margin-top: 50px;">
	<div class="card">
	  	<h5 class="card-header">Pengumuman</h5>
	  	<div class="card-body">
		  	<p class="card-text">
	    		<form method="post" action="">
	    			<table class="table table-striped table-light">
	    				<tr>
	    					<td><input type="text" class="container" name="pengumuman" placeholder="Tambah pengumuman baru"></td>
	    					<td><input class="btn btn-primary" type="submit" name="simpan" value="Add"></td>
	    				</tr>
	    			</table>
	    		</form>
	    		<?php  
	    			include "../koneksi.php";
	    			if($_SERVER['REQUEST_METHOD']=='POST'){
	    				$pengumuman = $_POST['pengumuman'];

	    				if($pengumuman == ''){
	    					echo "Form belum lengkap";
	    				}else{
	    					$simpan = mysqli_query($koneksi, "INSERT into tbl_pengumuman(pengumuman) VALUES('$pengumuman')");

	    					if(!$simpan){
	    						echo "Penyimpanan data gagal";
	    					}else{
	    						header("location:pengumuman.php");
	    					}
	    				}
	    			}
	    		?>
    			<table class="table table-striped table-light">
    				<?php  
			  			include "../koneksi.php";
			  			$sql = mysqli_query($koneksi, "SELECT * from tbl_pengumuman");
			  			$no=1;
			  			while($data = mysqli_fetch_array($sql)){
			  		?>
    				<tr>
    					<td><?php echo $no; ?></td>
    					<td><input class="container" type="text" value="<?php echo $data['pengumuman']; ?>" name="pengumuman"></td>
    					<td><a href="editpengumuman.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    					<td><a href="hapuspengumuman.php?id=<?php echo $data['id']; ?>" onclick = "return confirm('Yakin ingin menghapus ?')">Hapus</a></td>
    				</tr>
    				<?php $no++; } ?>
    			</table>
	    	</p>
		</div>
	</div>
</div>

</body>
</html>