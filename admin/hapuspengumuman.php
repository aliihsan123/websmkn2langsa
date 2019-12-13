<?php  

		//memanggil session start
		session_start();

		if(!isset($_SESSION['login'])){
			header("location:../index.php?pesan=belum_login");
		}else{
			include "../koneksi.php";
			$hapus = mysqli_query($koneksi, "DELETE FROM tbl_pengumuman WHERE id='$_GET[id]'" );

			if($hapus){
				header("location:pengumuman.php");
			}else{
				echo "Hapus data gagal";	
			}
		}

	?>