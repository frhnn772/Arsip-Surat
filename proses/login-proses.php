<!-- proses login -->
<?php 
  session_start();
  include "../include/config.php";

  $username = $_POST['username'];
  $password = md5($_POST['password']);

  //cek data
  $sql = "SELECT * FROM user WHERE username='$username' ";
  $qry = mysqli_query($con,$sql);
  $usr = mysqli_fetch_array($qry);
  // var_dump($usr['username']);
  if($username == $usr['username'] AND md5($password) == md5($usr['password'])){
  $_SESSION['iduser']   = $usr['iduser'];
  $_SESSION['username'] = $usr['username'];
  $_SESSION['nama']     = $usr['nama'];
  $_SESSION['level']    = $usr['level'];
  $_SESSION['login']    = 1;
    header("location:../index.php");
  }else{
    header("location:../login.php?alert=gagal");
  }
?>