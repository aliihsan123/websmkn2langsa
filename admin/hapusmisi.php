<?php  

	//memanggil session start
	session_start();

	if(!isset($_SESSION['login'])){
		header("location:../index.php?pesan=belum_login");
	}else{
		include "../koneksi.php";
		$hapus = mysqli_query($koneksi, "DELETE FROM tbl_misi WHERE id='$_GET[id]'" );

		if($hapus){
			header("location:visimisi.php");
		}else{
			echo "Hapus data gagal";	
		}
	}

?>