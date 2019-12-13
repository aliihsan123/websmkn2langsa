<?php  

include "../koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_galery WHERE id='$id'");
if ($query){
	header("location:galery.php");
}

?>