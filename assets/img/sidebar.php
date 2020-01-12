<!-- Sidebar -->
<div class="sidebar">

    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="assets/img/circle-user.png" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo $_SESSION['username_session_staff']; ?>
                            <span class="user-level">Staff Dispenduk</span>
                        </span>
                    </a>
                    <div class="clearfix"></div>


                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <!-- <span class="badge badge-count">5</span> -->
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Tracking</h4>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#baseed">
                        <i class="fas fa-layer-group"></i>
                        <p>Data Siap Kirim</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="baseed">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="kirim_kematian.php">
                                    <span class="sub-item"><i class="fas fa-ambulance"></i> Kematian</span>
                                </a>
                            </li>
                            <li>
                                <a href="kirim_kelahiran.php">
                                    <span class="sub-item"><i class="fas fa-child"></i> Kelahiran</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-paper-plane"></i>
                        <p>Data Terkirim</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="terkirim_kematian.php">
                                    <span class="sub-item"><i class="fas fa-ambulance"></i> Kematian</span>
                                </a>
                            </li>
                            <li>
                                <a href="terkirim_kelahiran.php">
                                    <span class="sub-item"><i class="fas fa-child"></i> Kelahiran</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- EndSidebar -->