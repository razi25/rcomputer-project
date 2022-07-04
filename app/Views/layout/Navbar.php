<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="<?= base_url() ?>/Home" class="logo d-flex align-items-center">
            <img src="<?= base_url() ?>/template/assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">R-COM</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div> -->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <?php foreach ($notifi as $nf) : ?>
                        <span class="badge bg-primary badge-number"><?= $nf->stat; ?></span>

                </a><!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">

                    <li class="dropdown-header">
                        You have <?= $nf->stat; ?> new notifications
                    <?php endforeach; ?>
                    <a href="<?= base_url() ?>/pesanan/pending"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">

                    </li>
                    <?php foreach ($notif as $na) : ?>
                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <a href="<?= base_url('transaksi/' . $na->id); ?>">
                                    <h4>ORD<?= $na->id; ?></h4>
                                    <p><?= $na->pelanggan; ?></p>
                                    <p><?= $na->Tanggal; ?></p>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; ?>

                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li class="dropdown-footer">
                        <a href="<?= base_url() ?>/pesanan/pending">Show all notifications</a>
                    </li>

                </ul><!-- End Notification Dropdown Items -->

            </li><!-- End Notification Nav -->
            <?php if (in_groups('admin')) : ?>
                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <?php foreach ($pesan1 as $ps1) : ?>
                            <span class="badge bg-success badge-number"><?= $ps1->stat; ?></span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">

                        <li class="dropdown-header">
                            You have <?= $ps1->stat; ?> new notifications
                        <?php endforeach; ?>
                        <a href="<?= base_url() ?>/Message"><span class="badge rounded-pill bg-success p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">

                        </li>
                        <?php foreach ($pesan as $ps) : ?>
                            <li class="notification-item">
                                <a class="nav-link nav-icon search-bar-toggle " href="<?= base_url('Message/' . $ps->id); ?>">
                                    <img src="<?= base_url() ?>/img/<?= $ps->user_image; ?>" style="float:left;width:50px;height:50px;" alt="Profile" class="rounded-circle">
                                </a>
                                <div>
                                    <a href="<?= base_url('/Message'); ?>">
                                        <h4><?= $ps->subjek; ?></h4>

                                        <p><?= $ps->date_in; ?></p>
                                    </a>
                                </div>
                            </li>
                        <?php endforeach; ?>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="<?= base_url() ?>/Message">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Messages Nav -->
            <?php endif; ?>
            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="<?= base_url() ?>/img/<?= user()->user_image; ?>" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2"><?= user()->username; ?></span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6><?= user()->job; ?></h6>

                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url() ?>/User">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    <!-- <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                            <i class="bi bi-gear"></i>
                            <span>Account Settings</span>
                        </a>
                    </li> -->
                    <li>
                        <hr class="dropdown-divider">
                    </li>


                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('logout'); ?>">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= base_url() ?>/Home">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <?php if (in_groups('admin')) : ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url() ?>/admin">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>User List</span>
                </a>
            </li><!-- End Contact Page Nav -->
        <?php endif; ?>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url() ?>/pesanan">
                <i class="bi bi-cart4"></i>
                <span>Pesanan</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <!-- ======= Sidebar Tabel ======= -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Data Produk</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url() ?>/Tabel_Produk">
                        <i class="bi bi-circle"></i><span>Tabel Produk</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/Tabel_Kategori">
                        <i class="bi bi-circle"></i><span>Tabel Kategori</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url() ?>/Tabel_Servis">
                <i class="bi bi-wrench"></i>
                <span>Data Service</span>
            </a>
        </li><!-- End Tables Nav -->

        <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-bar-chart"></i><span>Data Statistik</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= base_url() ?>/charts-chartjs.html">
                        <i class="bi bi-circle"></i><span>Chart.js</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/charts-apexcharts.html">
                        <i class="bi bi-circle"></i><span>ApexCharts</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>/charts-echarts.html">
                        <i class="bi bi-circle"></i><span>ECharts</span>
                    </a>
                </li>
            </ul>
        </li>End Charts Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url() ?>/Contact">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->
        </li><!-- End Icons Nav -->



    </ul>

</aside><!-- End Sidebar-->