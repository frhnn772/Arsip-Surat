<!-- belum siap  -->

<?php include 'include/navbar.php';?>

<div class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="dashboard_bar">
					 Profile
					</div>
					
				</div>
				<!-- <ul class="navbar-nav header-right">
					<li class="nav-item dropdown  header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<img src="images/user.jpg" width="56" alt="">
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="page-error-404.html" class="dropdown-item ai-icon">
								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
								<span class="ms-2">Logout </span>
							</a>
						</div>
					</li>
				</ul> -->
			</div>
		</nav>
	</div>
</div>
<!--**********************************
    Header end
***********************************-->


<?php include 'include/sidebar.php' ?>


<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Edit</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
			</ol>
		</div>

        <div id="profile-settings" class="tab-pane fade">
        <div class="col-12">
            <div class="card">
                <div class="settings-form">
                    <h4 class="text-primary">Account Setting</h4>
                    <form>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Password</label>
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" placeholder="1234 Main St" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address 2</label>
                            <input type="text" placeholder="Apartment, studio, or floor" class="form-control">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">State</label>
                                <select class="form-control default-select wide" id="inputState">
                                    <option selected="">Choose...</option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label">Zip</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check custom-checkbox">
                                <input type="checkbox" class="form-check-input" id="gridCheck">
                                <label class="form-check-label form-label" for="gridCheck"> Check me out</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Sign
                            in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  

<?php
    include 'include/footer.php';
?>