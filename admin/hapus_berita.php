<?php  

include "../koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_beritaunggulan WHERE id='$id'");
if ($query){
	header("location:berita_unggulan.php");
}

?>