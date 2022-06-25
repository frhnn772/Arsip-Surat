<?php
    //connect mysqli database
$server = "localhost";
$user = "root";
$pass = "root";
$db = "arsip";

$con = mysqli_connect($server, $user, $pass, $db);

if( !$con ){
    die("Gagal terhubung dengan database: ".mysqli_connect_error());
    }
?>