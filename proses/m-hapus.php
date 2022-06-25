<!-- Hapus Surat Masuk -->
<?php 
	include "../include/config.php";
	$id = $_GET["del"];
	$i = mysqli_query($con, "SELECT * FROM srt_msk WHERE id ='$id' ");
	$u =mysqli_fetch_array($i);
	
	if(is_file("../berkas/masuk/".$u['file'])) unlink("../berkas/masuk/".$u['file']); 
	mysqli_query($con, "DELETE FROM srt_msk WHERE id='$id' ");
	header("location:../m-surat.php?=sukses");
 ?>