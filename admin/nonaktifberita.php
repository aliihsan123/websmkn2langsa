<?php  
	include "../koneksi.php";

	$bayar = mysqli_query($koneksi, "UPDATE tbl_beritaunggulan SET kategori='tidak aktif' where id='$_GET[id]'");
	if($bayar){
		header("location:berita_unggulan.php");
	}else{
		echo "pembayaran gagal";
	}
?>