<?php  
	include "../koneksi.php";

	$bayar = mysqli_query($koneksi, "UPDATE tbl_galery SET kategori='aktif' where id='$_GET[id]'");
	if($bayar){
		header("location:galery.php");
	}else{
		echo "Gagal Mengaktifkan";
	}
?>