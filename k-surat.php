<!-- Surat Masuk -->
<?php include 'include/navbar.php'; ?>

<div class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="dashboard_bar">
						Surat Keluar
					</div>
				</div>
				<ul class="navbar-nav header-right">
					<li class="nav-item dropdown  header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<img src="assets/images/user.png" width="56" alt="">
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
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Data Surat</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)">Surat Keluar</a></li>
			</ol>
		</div>

        <?php
            if(isset($_SESSION['sukses'])){
        ?>
            <div class="alert alert-success text-dark" role="alert" id="notip">
                <strong>Sukses!</strong> <?php echo $_SESSION['sukses'] ?>
            </div>
        <?php
        unset($_SESSION['sukses']);
            }
        ?>
        
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <button type="button" class="btn btn-rounded btn-success" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><span 
                class="btn-icon-start text-primary"><i class="fa fa-plus color-success"></i></span>Tambah</button>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="width:95%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No.Surat</th>
                                    <th>Asal</th>
                                    <th>Tanggal Surat</th>
                                    <th>Perihal</th>
                                    <th>Keterangan</th>
                                    <!-- <th>Diinput</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $query = $con->query("SELECT * FROM srt_klr");
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['no_srt'] ?></td>
                                    <td><?php echo $data['asal_srt'] ?></td>
                                    <td><?php echo $data['tgl_srt'] ?></td>
                                    <td><?php echo $data['perihal'] ?></td>
                                    <td><?php echo $data['ket'] ?></td>
                                    <!-- <td><?php echo $data['created'] ?></td> -->
                                    <td>
                                        <div class="d-flex">
                                    <?php 
                                        $level = $_SESSION['level'];
                                        if($level == "admin") {
                                    ?>
                                        <a href="berkas/keluar/<?php echo $data['file']; ?>" target="_blank" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-file-pdf"></i></a>
                                        <a href="proses/k-hapus.php?del=<?php echo $data['id'] ?>" onClick="return confirm('Yakin Ingin Hapus Surat Dari <?php echo $data['asal_srt']?> ?')" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    <?php
                                    }else{
                                    ?> 
                                        <a href="berkas/keluar/<?php echo $data['file']; ?>" target="_blank" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-file-pdf"></i></a>
                                    <?php } ?>
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
</div>

    <!--**********************************
                Modal Tambah Data
    ***********************************-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Surat</h5>
            </div>
        <form action="proses/k-proses.php" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <label for="no_srt" class="mb-1">Nomor Surat</label>
                <input type="text" class="form-control input-rounded" placeholder="Masukkan Nomor Surat" required="" name="no_srt">
            
                <label for="asal_srt" class="mb-1">Asal Surat</label>
                <input type="text" class="form-control input-rounded" placeholder="Masukkan Asal Surat" required="" name="asal_srt">
                
                <label for="tgl_srt" class="mb-1">Tanggal Diterima</label>
                <input type="text" class="datepicker-default form-control input-rounded" id="datepicker" placeholder="Masukkan Tanggal Diterima" name="tgl_srt">
                
                <label for="ket" class="mb-1">Perihal</label>
                <textarea class="form-control" id="validationCustom04" rows="5" placeholder="Masukkan Perihal" required="" name="perihal"></textarea>
                
                <label for="asal_srt" class="mb-1">Keterangan</label>
                <input type="text" class="form-control input-rounded" placeholder="Masukkan Keterangan" required="" name="ket">
                
                <label for="file" class="mb-3"> </label>
                <div class="input-group">
                    <div class="form-file">
                        <input type="file" class="form-file-input form-control" name="file" required>
                    </div>
                </div>
                <small class="red-text">*Format file yang diperbolehkan *.PDF</small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php
    include 'include/footer.php';
?>