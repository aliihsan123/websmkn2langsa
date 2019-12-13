<?php  

include "../koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_struktur WHERE id='$id'");
if ($query){
	header("location:struktur.php");
}

?>