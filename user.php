<!-- kelola User -->
<?php include 'include/navbar.php'; ?>

<div class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="dashboard_bar">User</div>
				</div>
				<ul class="navbar-nav header-right">
					<li class="nav-item dropdown  header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<img src="assets/images/user.png" width="56" alt="">
						</a>
						<div class="dropdown-menu dropdown-menu-end">
                            <!-- <a href="edit-profile.php" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ms-2">Profile </span>
                            </a> -->
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
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Kelola</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
			</ol>
		</div>
        <div class="card">
            <div class="card-header">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-rounded btn-success" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><span 
                class="btn-icon-start text-primary"><i class="fa fa-plus color-success"></i></span>Tambah User</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-responsive-sm" style="width:98%">
                        <thead>
                            <tr>
                                <th><strong>#</strong></th>
                                <th><strong>Nama</strong></th>
                                <th><strong>Username</strong></th>
                                <th><strong>Dibuat</strong></th>
                                <th><strong>Status</strong></th>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $query = $con->query("SELECT * FROM user");
                            $no = 1;
                            while ($data = mysqli_fetch_array($query)){
                        ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['username'] ?></td>
                            <td><?php echo $data['created'] ?></td>
                                <!-- <td><b class="btn btn-rounded btn-primary"><?php echo $data['level'] ?></b></td> -->
                            <td>
                            <?php 
                                $level = $data['level'];
                                if($level == "admin") {
                            ?>
                                <i class="fa fa-circle text-success me-1"></i>
                            <?php
                            }else{
                            ?>
                                <i class="fa fa-circle text-info me-1"></i>
                            <?php } ?>
                                <?php echo $data['level'] ?>
                            </td>
                            <td>
                                <div class="d-flex">
                                    <!-- <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a> -->
                                    <a href="proses/hapus-user.php?del=<?php echo $data['iduser'] ?>" onClick="return confirm('Yakin Ingin Hapus User <?php echo $data['nama']?> ?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--**********************************
                Modal Tambah Data
    ***********************************-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah User</h5>
            </div>
            <form action="proses/tambah-user.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <label for="no_srt" class="mb-1">Nama</label>
                    <input type="text" class="form-control input-rounded" placeholder="Masukkan Nama" name="nama" required>
                
                    <label for="asal_srt" class="mb-1">Username</label>
                    <input type="text" class="form-control input-rounded" placeholder="Masukkan Username" name="username" required>
                    
                    <label for="asal_srt" class="mb-1">Password</label>
                    <input type="text" class="form-control input-rounded" placeholder="Masukkan Password" name="password" required>
                    
                <div class="mb-1">Level<br>
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="level" value="admin" required> Admin</label>
                    <label class="form-check-label"><input class="form-check-input" type="radio" name="level" value="user" required> User</label>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>