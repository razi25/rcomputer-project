<?= $this->extend('layout/Template'); ?>
<?= $this->section('content'); ?>
<script src="<?= base_url() ?>/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/js/bootstrap.bundle.min.js"></script>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>/Home">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" id="salesjumlah">

                                    <li><a class="dropdown-item" href="#" id="today">Today</a></li>
                                    <li><a class="dropdown-item" href="#" id="month">This Month</a></li>
                                    <li><a class="dropdown-item" href="#" id="year">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body" id="jumlahtoday">
                                <h5 class="card-title">Sales <span>| Today</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($topsale as $sa) : ?>
                                            <h6><?= $sa->jumlah; ?></h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="display: none;" id="jumlahmonth">
                                <h5 class="card-title">Sales <span>| Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($topsalemonth as $sam) : ?>
                                            <h6><?= $sam->jumlah; ?></h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="display: none;" id="jumlahyear">
                                <h5 class="card-title">Sales <span>| Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($topsaleyear as $say) : ?>
                                            <h6><?= $say->jumlah; ?></h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">

                                    <li><a class="dropdown-item" href="#" id="todayrev">Today</a></li>
                                    <li><a class="dropdown-item" href="#" id="monthrev">This Month</a></li>
                                    <li><a class="dropdown-item" href="#" id="yearrev">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body" id="totaltoday">
                                <h5 class="card-title">Revenue <span>| Today</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($topsale as $sa) : ?>
                                            <h6><?= $sa->total; ?></h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="display: none;" id="totalmonth">
                                <h5 class="card-title">Revenue <span>| This Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($topsalemonth as $sam) : ?>
                                            <h6><?= $sam->total; ?></h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" style="display: none;" id="totalyear">
                                <h5 class="card-title">Revenue <span>| This Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($topsaleyear as $say) : ?>
                                            <h6><?= $say->total; ?></h6>
                                            <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">


                                    <li><a class="dropdown-item" href="#" id="todaycust">Today</a></li>
                                    <li><a class="dropdown-item" href="#" id="monthcust">This Month</a></li>
                                    <li><a class="dropdown-item" href="#" id="yearcust">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body" id="custtoday">
                                <h5 class="card-title">Customers <span>| Today</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($topsale as $sa) : ?>
                                            <h6><?= $sa->cust; ?></h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body" style="display: none;" id="custmonth">
                                <h5 class="card-title">Customers <span>| This Month</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($topsalemonth as $sam) : ?>
                                            <h6><?= $sam->cust; ?></h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body" style="display: none;" id="custyear">
                                <h5 class="card-title">Customers <span>| This Year</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <?php foreach ($topsaleyear as $say) : ?>
                                            <h6><?= $say->cust; ?></h6>
                                            <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <!-- <div class="col-12">
                        <div class="card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Reports <span>/This Year</span></h5>-->

                    <!-- Line Chart -->

                    <!-- <div id="reportsChart"></div> -->

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            <?php foreach ($chardiagram as $cd) : ?>
                                var $sale = "<?= $cd->jumlah; ?>";
                                // var $rev = "<?= $cd->total; ?>";
                                var $cust = "<?= $cd->cust; ?>";
                            <?php endforeach; ?>
                            new ApexCharts(document.querySelector("#reportsChart"), {
                                series: [{
                                        name: 'Sales',
                                        data: [$sale, $sale],
                                    },
                                    // {
                                    //     name: 'Revenue',
                                    //     data: [$rev]
                                    // }, 
                                    {
                                        name: 'Customers',
                                        data: [$cust, $cust]
                                    }
                                ],
                                chart: {
                                    height: 350,
                                    type: 'area',
                                    toolbar: {
                                        show: false
                                    },
                                },
                                markers: {
                                    size: 4
                                },
                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                fill: {
                                    type: "gradient",
                                    gradient: {
                                        shadeIntensity: 1,
                                        opacityFrom: 0.3,
                                        opacityTo: 0.4,
                                        stops: [0, 90, 100]
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                stroke: {
                                    curve: 'smooth',
                                    width: 2
                                },
                                xaxis: {
                                    type: 'date',
                                    categories: ["JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI", "JULI", "AGUSTUS", "SEPTEMBER", "OKTOBER", "NOVEMBER", "DESEMBER"]
                                },
                                tooltip: {
                                    x: {
                                        format: 'MM'
                                    },
                                }
                            }).render();
                        });
                    </script>
                    <!-- End Line Chart -->

                    <!-- </div>

                        </div>
                    </div> -->
                    <!-- End Reports -->

                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales">

                            <!-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> -->

                            <div class="card-body">
                                <h5 class="card-title">Recent Sales </h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pesanan as $o) : ?>
                                            <tr>
                                                <td>ORD<?= $o->id; ?></td>
                                                <td><?= $o->pelanggan; ?></td>
                                                <td><?= $o->produk; ?></td>
                                                <td><?= $o->harga; ?></td>
                                                <td><?php if ($o->status == 'pending') {
                                                        $status = 'bg-warning';
                                                    } else if ($o->status == 'rejected') {
                                                        $status = 'bg-danger';
                                                    } else {
                                                        $status = 'bg-success';
                                                    } ?>
                                                    <span class="badge <?= $status; ?>"><?= $o->status; ?></span>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling">

                            <!-- <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div> -->

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Selling</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($toppesanan as $to) : ?>
                                            <tr>
                                                <td><img src="/imgproduk/<?= $to->gambar; ?>" width="50"></td>
                                                <td><?= $to->produk; ?></td>
                                                <td><?= $to->harga; ?></td>
                                                <td><?= $to->jumlah; ?></td>
                                                <td><?= $to->harga *  $to->jumlah; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">

                <!-- Recent Activity -->
                <div class="card">


                    <div class="card-body">
                        <h5 class="card-title">Recent Services</h5>
                        <a href="<?= base_url('/Tabel_Servis'); ?>">
                            <div class="activity">
                                <?php foreach ($recent as $rc) : ?>
                                    <div class="activity-item d-flex">
                                        <div class="activite-label"><?= $rc->date_in; ?></div>
                                        <?php if ($rc->keterangan == 'pending') {
                                            $keterangan = 'text-warning';
                                        } else if ($rc->keterangan == 'rejected') {
                                            $keterangan = 'text-danger';
                                        } else if ($rc->keterangan == 'success') {
                                            $keterangan = 'text-success';
                                        } else {
                                            $keterangan = 'text-primary';
                                        } ?>

                                        <i class='bi bi-circle-fill activity-badge <?= $keterangan; ?> align-self-start'></i>

                                        <div class="activity-content">
                                            <span class="fw-bold text-dark"><?= $rc->pemilik; ?></span><span style="color: black;"> Services </span>
                                            <span class="fw-bold text-dark"><?= $rc->barang; ?></span> <span style="color: black;"> Kerusakan </span>
                                            <span class="fw-bold text-dark"><?= $rc->kerusakan; ?></span>
                                        </div>

                                    </div><!-- End activity item-->

                                <?php endforeach; ?>
                        </a>
                        <br>
                        <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>No Services &nbsp;
                        <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>Rejected &nbsp;
                        <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>Pending &nbsp;
                        <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>Success
                    </div>

                </div>
            </div><!-- End Recent Activity -->

            <!-- Revenue Card -->
            <div class="col-xxl-12 col-lg-6">
                <div class="card info-card revenue-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item" href="#" id="todayservisrev">Today</a></li>
                            <li><a class="dropdown-item" href="#" id="monthservisrev">This Month</a></li>
                            <li><a class="dropdown-item" href="#" id="yearservisrev">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body" id="biayatoday">
                        <h5 class="card-title">Revenue Services<span>| Today</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div class="ps-3">
                                <?php foreach ($recenttoday as $rt) : ?>
                                    <h6><?= $rt->biaya; ?></h6>
                                    <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;" id="biayamonth">
                        <h5 class="card-title">Revenue Services<span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div class="ps-3">
                                <?php foreach ($recentmonth as $rtm) : ?>
                                    <h6><?= $rtm->biaya; ?></h6>
                                    <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;" id="biayayear">
                        <h5 class="card-title">Revenue Services<span>| This Year</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <div class="ps-3">
                                <?php foreach ($recentyear as $rty) : ?>
                                    <h6><?= $rty->biaya; ?></h6>
                                    <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Revenue Card -->


            <!-- Customers Card -->
            <div class="col-xxl-12 col-xl-12">

                <div class="card info-card customers-card">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item" href="#" id="todayserviscust">Today</a></li>
                            <li><a class="dropdown-item" href="#" id="monthserviscust">This Month</a></li>
                            <li><a class="dropdown-item" href="#" id="yearserviscust">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body" id="customertoday">
                        <h5 class="card-title">New Customers For Services <span>| Today</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <?php foreach ($recenttoday as $rt) : ?>
                                    <h6><?= $rt->customer; ?></h6>
                                    <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;" id="customermonth">
                        <h5 class="card-title">New Customers For Services <span>| This Month</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <?php foreach ($recentmonth as $rtm) : ?>
                                    <h6><?= $rtm->customer; ?></h6>
                                    <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="display: none;" id="customeryear">
                        <h5 class="card-title">New Customers For Services <span>| This Year</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <?php foreach ($recentyear as $rty) : ?>
                                    <h6><?= $rty->customer; ?></h6>
                                    <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> -->
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- End Customers Card -->
            <!-- Top Selling -->
            <div class="col-12">
                <div class="card top-selling">



                    <div class="card-body pb-0">
                        <h5 class="card-title">Top Customer</h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col" width="20%"></th>

                                    <th scope="col">Customer</th>
                                    <th scope="col">Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($topcust as $rt1) : ?>
                                    <tr>
                                        <!-- icon berbeda -->
                                        <!-- <td style="text-align:center"><?php if ($rt1->keterangan == 'pending') {
                                                                                $keterangan = 'bi-wrench text-warning';
                                                                            } else if ($rt1->keterangan == 'rejected') {
                                                                                $keterangan = 'bi-wrench text-warning';
                                                                            } else if ($rt1->keterangan == '') {
                                                                                $keterangan = 'bi-wrench text-warning';
                                                                            } else {
                                                                                $keterangan = 'bi-wrench text-success';
                                                                            } ?>
                                            <span class="bi <?= $keterangan; ?> fa-lg"></span>
                                        </td> -->

                                        <!-- tutup icon -->
                                        <td style="text-align: center;"> <img src="/img/user.jpg" class="costum-file-label" width="40%" style="position:relative;"></td>
                                        <td><?= $rt1->pemilik; ?></td>
                                        <td><?= $rt1->biaya; ?></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Top Selling -->


        </div><!-- End Right side columns -->


        <script>
            $(document).ready(function() {
                $("#month").click(function() {
                    $("#jumlahtoday").hide();
                    $("#jumlahyear").hide();
                    $("#jumlahmonth").show();
                })
                $("#year").click(function() {
                    $("#jumlahtoday").hide();
                    $("#jumlahyear").show();
                    $("#jumlahmonth").hide();
                })
                $("#today").click(function() {
                    $("#jumlahtoday").show();
                    $("#jumlahyear").hide();
                    $("#jumlahmonth").hide();
                })
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#monthrev").click(function() {
                    $("#totaltoday").hide();
                    $("#totalyear").hide();
                    $("#totalmonth").show();
                })
                $("#yearrev").click(function() {
                    $("#totaltoday").hide();
                    $("#totalyear").show();
                    $("#totalmonth").hide();
                })
                $("#todayrev").click(function() {
                    $("#totaltoday").show();
                    $("#totalyear").hide();
                    $("#totalmonth").hide();
                })
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#monthcust").click(function() {
                    $("#custtoday").hide();
                    $("#custyear").hide();
                    $("#custmonth").show();
                })
                $("#yearcust").click(function() {
                    $("#custtoday").hide();
                    $("#custyear").show();
                    $("#custmonth").hide();
                })
                $("#todaycust").click(function() {
                    $("#custtoday").show();
                    $("#custyear").hide();
                    $("#custmonth").hide();
                })
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#monthservisrev").click(function() {
                    $("#biayatoday").hide();
                    $("#biayayear").hide();
                    $("#biayamonth").show();
                })
                $("#yearservisrev").click(function() {
                    $("#biayatoday").hide();
                    $("#biayayear").show();
                    $("#biayamonth").hide();
                })
                $("#todayservisrev").click(function() {
                    $("#biayatoday").show();
                    $("#biayayear").hide();
                    $("#biayamonth").hide();
                })
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#monthserviscust").click(function() {
                    $("#customertoday").hide();
                    $("#customeryear").hide();
                    $("#customermonth").show();
                })
                $("#yearserviscust").click(function() {
                    $("#customertoday").hide();
                    $("#customeryear").show();
                    $("#customermonth").hide();
                })
                $("#todayserviscust").click(function() {
                    $("#customertoday").show();
                    $("#customeryear").hide();
                    $("#customermonth").hide();
                })
            });
        </script>
    </section>



</main><!-- End #main -->

<?= $this->endSection(); ?>