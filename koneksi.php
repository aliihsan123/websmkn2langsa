<?php  

	$koneksi = mysqli_connect("localhost:3036","root","","db_smkn2langsa");

	//cek koneksi
	if (mysqli_connect_errno()){
		echo "gagal terhubung ke database" . mysqli_connect_error();
	}

?>