<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- PAGE TITLE HERE -->
	<title>Arsip Surat</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="assets/arsipan.ico">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href=""><img src="" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">LOGIN</h4>
                                    <center>
                                    <?php
                                        if(isset($_GET['alert'])){
                                            if($_GET['alert']=="gagal"){
                                                echo "<p>Maaf! Username & Password Salah.</p>";
                                            }else if($_GET['alert']=="belum_login"){
                                                echo "<p>Anda Harus Login Terlebih Dulu!</p>";
                                            }else if($_GET['alert']=="logout"){
                                                echo "<p>Anda Telah Logout!</p>";
                                            }
                                        }
                                    ?>
                                    </center>
                                    <form action="proses/login-proses.php" method="post">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="Masukkan Username" name="username" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Masukkan Password" name="password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="login" value="login" >Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>