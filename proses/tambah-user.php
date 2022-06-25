<!-- Tambah User -->
<?php
    include("../include/config.php");
    // Memeriksa Tombol Disimpan Bisa diKlik atau Tidak
    if(isset($_POST['simpan'])){
    // Mengambil Data Dari Forum
    $nama    = $_POST ['nama'];
    $username  = $_POST ['username'];
    $password  = md5($_POST ['password']);
    $level  = $_POST ['level'];
    if(empty($nama)){
        $errMSG = "Masukkan Nama.";
	}else if(empty($username)){
		$errMSG = "Masukkan Username.";
	}else if(empty($password)){
		$errMSG = "Masukkan Password.";
	}else if(empty($level)){
		$errMSG = "Masukkan Level.";
	}else{
        $created = @date('Y-m-d H:i:s');
        // Memasukkan Data Ke Database
        $sql = "INSERT INTO user (nama, username, password, level, created) VALUE ('$nama', '$username', '$password', '$level', '$created')";
        $query = mysqli_query($con, $sql);

        // Pengecekkan Data Tersimpan Atau Tidak
        if( $query ){
            header('Location: ../user.php?=sukses');
            // $sukses = "Data Berhasil Diinput";
        }else{
            header('Location: ../user.php?=gagal');
            // $gagal = "Data Gagal Diinput";
        }
    }
    }header("Location: ../user.php");
?>