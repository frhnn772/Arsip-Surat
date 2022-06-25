<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header('location:../arsip/login.php?alert=belum_login');
    }
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- PAGE TITLE HERE -->
	<title>Arsip Surat</title>
    <link rel="icon" type="image/x-icon" href="assets/arsipan.ico">
    <!-- Datatable -->
    <link href="assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="assets/vendor/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="assets/vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="assets/vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="assets/vendor/jquery-asColorPicker/css/asColorPicker.min.css" rel="stylesheet">
    <!-- Material color picker -->
    <link href="assets/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="assets/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="assets/vendor/pickadate/themes/default.date.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="assets/vendor/toastr/css/toastr.min.css">
</head>
<body>

<!--   Loading Animation   -->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <div id="main-wrapper">

<!--    Nav header start   -->
    <div class="nav-header">
        <a href="index.php" class="brand-logo">
            <img src="assets/arsipan.png" width="46" height="48" alt="">

            <div class="brand-title">
                <h2 class="">Arsip</h2>
                <span class="brand-sub-title">Management Data Surat</span>
            </div>
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>