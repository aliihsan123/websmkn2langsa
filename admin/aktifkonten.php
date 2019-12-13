<?php  
	include "../koneksi.php";

	$bayar = mysqli_query($koneksi, "UPDATE tbl_konten_terbaru SET kategori='aktif' where id='$_GET[id]'");
	if($bayar){
		header("location:konten_terbaru.php");
	}else{
		echo "Gagal Mengaktifkan";
	}
?>