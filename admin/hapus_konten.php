<?php  

include "../koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_konten_terbaru WHERE id='$id'");
if ($query){
	header("location:konten_terbaru.php");
}

?>