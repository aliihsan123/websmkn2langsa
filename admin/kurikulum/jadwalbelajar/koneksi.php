<?php  

$koneksi = mysqli_connect("localhost:3036","root","","db_jadwal");

if(!$koneksi){
	echo "Koneksi Gagal";
}

?>