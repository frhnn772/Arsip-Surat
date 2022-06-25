<!-- Hapus Surat Masuk -->
<?php 
	include "../include/config.php";
	$iduser = $_GET["del"];
	$i = mysqli_query($con, "SELECT * FROM user WHERE iduser ='$iduser' ");
	$u = mysqli_fetch_array($i);
	
	mysqli_query($con, "DELETE FROM user WHERE iduser='$iduser' ");
	header("location:../user.php?=sukses");
?>