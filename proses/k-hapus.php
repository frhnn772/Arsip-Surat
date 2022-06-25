<!-- Hapus Surat Masuk -->
<?php 
	include "../include/config.php";
	$id = $_GET["del"];
	$i = mysqli_query($con, "SELECT * FROM srt_klr WHERE id ='$id' ");
	$u = mysqli_fetch_array($i);
	
	if(is_file("../berkas/keluar/".$u['file'])) unlink("../berkas/keluar/".$u['file']); 
	mysqli_query($con, "DELETE FROM srt_klr WHERE id='$id' ");
	header("location:../k-surat.php?=sukses");
 ?>