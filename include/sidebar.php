<!--    Sidebar     -->
<?php 
    $level = $_SESSION['level'];
    if($level == "admin") {
?>
    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
                <li><a href="index.php" class="" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a href="user.php" class="" aria-expanded="false">
                        <i class="fas fa-user-check"></i>
                        <span class="nav-text">Kelola User</span>
                    </a>
                </li>
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">Data Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="m-surat.php">Surat Masuk</a></li>
                    <li><a href="k-surat.php">Surat Keluar</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
<?php
    }else
    $level = $_SESSION['level'];
    if($level == "user") {
?> 
    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
                <li><a href="index.php" class="" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">Data Surat</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="m-surat.php">Surat Masuk</a></li>
                    <li><a href="k-surat.php">Surat Keluar</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
<?php } ?>