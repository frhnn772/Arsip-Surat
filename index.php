<!-- Dashboard -->
<?php
    include 'include/navbar.php';

    $surat1 = mysqli_query($con, "SELECT * FROM srt_msk");
    $surat_masuk = mysqli_num_rows($surat1);
    
    $surat2 = mysqli_query($con, "SELECT * FROM srt_klr");
    $surat_keluar = mysqli_num_rows($surat2);
?>

<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                </div>
                <ul class="navbar-nav header-right">
				<li class="nav-item dropdown  header-profile">
					<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="assets/images/user.png" width="60" alt="">
					</a>
					<div class="dropdown-menu dropdown-menu-end">
						<a href="logout.php" onClick="return confirm('Yakin Ingin Logout?')" class="dropdown-item ai-icon">
							<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
							<span class="ms-2">Logout </span>
						</a>
					</div>
				</li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<?php include 'include/sidebar.php'; ?>

<div class="content-body">
    <div class="container-fluid">
		<div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
				<li class="breadcrumb-item "><a href="javascript:void(0)">Jumlah Data Surat</a></li>
			</ol>
		</div>
		<div class="alert alert-primary solid alert-square">
			<?php $nama = $_SESSION['nama'];
			echo "<strong>Selamat Datang!</strong> $nama "; ?>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
				<a href="m-surat.php"><div class="widget-stat card bg-success">
					<div class="card-body  p-4">
						<div class="media">
							<span class="me-3">
								<i class="bi bi-box-arrow-in-down"></i>
							</span>
							<div class="media-body text-white">
								<p class="mb-1">Surat Masuk</p>
								<h3 class="text-white"><?php echo $surat_masuk ?></h3>
							</div>
						</div>
					</div>
				</div></a>
			</div>
			<div class="col-xl-6 col-lg-6 col-xxl-6 col-sm-6">
				<a href="k-surat.php"><div class="widget-stat card bg-info" >
					<div class="card-body  p-4">
						<div class="media">
							<span class="me-3">
								<i class="bi bi-box-arrow-up"></i>
							</span>
							<div class="media-body text-white">
								<p class="mb-1">Surat Keluar</p>
								<h3 class="text-white"><?php echo $surat_keluar ?></h3>
							</div>
						</div>
					</div>
				</div></a>
			</div>
		</div>
   <!-- <div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-xl-6 col-sm-6">
							<div class=" owl-carousel card-slider">
								<div class="items">
									<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
									<span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
								</div>	
								<div class="items">
									<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
									<span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
								</div>	
								<div class="items">
									<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile Website Project</h4>
									<span class="fs-14 font-w400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </span>
								</div>	
							</div>
						</div>
						<div class="col-xl-6 redial col-sm-6">
							<div id="redial"></div>
							<span class="text-center d-block fs-18 font-w600">On Progress <small class="text-success">70%</small></span>	
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</div>       

<?php include "include/footer.php"; ?>