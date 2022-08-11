<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'Dashboard')); ?>

    <link href="/assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <?= $this->include('partials/head-css') ?>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?php echo view('partials/page-title', array('pagetitle' => 'Dashboards', 'title' => 'Dashboard')); ?>


                    <div class="row">
                        <!-- ================== Measurement ====================== -->
                        <div class="col-xxl-3">
                            <div class="card card-height-100">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Measurement</h4>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-primary btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-uppercase">Btc<i class="mdi mdi-chevron-down align-middle ms-1"></i></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">BTC</a>
                                                <a class="dropdown-item" href="#">USD</a>
                                                <a class="dropdown-item" href="#">Euro</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end cardheader -->
                                <div class="card-body">
                                    <div id="portfolio_donut_charts1" data-colors='["--vz-primary", "--vz-info", "--vz-warning", "--vz-success"]' class="apex-charts" dir="ltr"></div>

                                    <ul class="list-group list-group-flush border-dashed mb-0 mt-3 pt-2">
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/btc.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Bitcoin</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-primary me-1"></i>BTC </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">BTC 0.00584875</h6>
                                                    <p class="text-success fs-13 mb-0">$19,405.12</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/eth.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Ethereum</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-info me-1"></i>ETH </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">ETH 2.25842108</h6>
                                                    <p class="text-danger fs-13 mb-0">$40552.18</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/ltc.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Litecoin</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-warning me-1"></i>LTC </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">LTC 10.58963217</h6>
                                                    <p class="text-success fs-13 mb-0">$15824.58</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0 pb-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/dash.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Dash</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-success me-1"></i>DASH </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">DASH 204.28565885</h6>
                                                    <p class="text-success fs-13 mb-0">$30635.84</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                    </ul><!-- end -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <!-- ============================== End Measurement =============================== -->

                        <!-- ================== Solar Charger Controller ====================== -->
                        <div class="col-xxl-3">
                            <div class="card card-height-100">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Solar Charger Controller</h4>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-primary btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-uppercase">Btc<i class="mdi mdi-chevron-down align-middle ms-1"></i></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">BTC</a>
                                                <a class="dropdown-item" href="#">USD</a>
                                                <a class="dropdown-item" href="#">Euro</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end cardheader -->
                                <div class="card-body">
                                    <div id="portfolio_donut_charts2" data-colors='["--vz-primary", "--vz-info", "--vz-warning", "--vz-success"]' class="apex-charts" dir="ltr"></div>

                                    <ul class="list-group list-group-flush border-dashed mb-0 mt-3 pt-2">
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/btc.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Bitcoin</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-primary me-1"></i>BTC </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">BTC 0.00584875</h6>
                                                    <p class="text-success fs-13 mb-0">$19,405.12</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/eth.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Ethereum</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-info me-1"></i>ETH </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">ETH 2.25842108</h6>
                                                    <p class="text-danger fs-13 mb-0">$40552.18</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/ltc.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Litecoin</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-warning me-1"></i>LTC </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">LTC 10.58963217</h6>
                                                    <p class="text-success fs-13 mb-0">$15824.58</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0 pb-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/dash.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Dash</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-success me-1"></i>DASH </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">DASH 204.28565885</h6>
                                                    <p class="text-success fs-13 mb-0">$30635.84</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                    </ul><!-- end -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <!-- ============================== End Solar Charger Controller =============================== -->

                        <!-- ================== I/O ====================== -->
                        <div class="col-xxl-3">
                            <div class="card card-height-100">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">I/O</h4>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-primary btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-uppercase">Btc<i class="mdi mdi-chevron-down align-middle ms-1"></i></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">BTC</a>
                                                <a class="dropdown-item" href="#">USD</a>
                                                <a class="dropdown-item" href="#">Euro</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end cardheader -->
                                <div class="card-body">
                                    <div id="portfolio_donut_charts3" data-colors='["--vz-primary", "--vz-info", "--vz-warning", "--vz-success"]' class="apex-charts" dir="ltr"></div>

                                    <ul class="list-group list-group-flush border-dashed mb-0 mt-3 pt-2">
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/btc.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Bitcoin</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-primary me-1"></i>BTC </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">BTC 0.00584875</h6>
                                                    <p class="text-success fs-13 mb-0">$19,405.12</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/eth.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Ethereum</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-info me-1"></i>ETH </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">ETH 2.25842108</h6>
                                                    <p class="text-danger fs-13 mb-0">$40552.18</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/ltc.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Litecoin</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-warning me-1"></i>LTC </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">LTC 10.58963217</h6>
                                                    <p class="text-success fs-13 mb-0">$15824.58</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0 pb-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/dash.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Dash</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-success me-1"></i>DASH </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">DASH 204.28565885</h6>
                                                    <p class="text-success fs-13 mb-0">$30635.84</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                    </ul><!-- end -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <!-- ============================== End I/O =============================== -->

                        <!-- ================== Battery Monitoring ====================== -->
                        <div class="col-xxl-3">
                            <div class="card card-height-100">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Battery Monitoring</h4>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn btn-soft-primary btn-sm" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="text-uppercase">Btc<i class="mdi mdi-chevron-down align-middle ms-1"></i></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">BTC</a>
                                                <a class="dropdown-item" href="#">USD</a>
                                                <a class="dropdown-item" href="#">Euro</a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end cardheader -->
                                <div class="card-body">
                                    <div id="portfolio_donut_charts4" data-colors='["--vz-primary", "--vz-info", "--vz-warning", "--vz-success"]' class="apex-charts" dir="ltr"></div>

                                    <ul class="list-group list-group-flush border-dashed mb-0 mt-3 pt-2">
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/btc.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Bitcoin</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-primary me-1"></i>BTC </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">BTC 0.00584875</h6>
                                                    <p class="text-success fs-13 mb-0">$19,405.12</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/eth.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Ethereum</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-info me-1"></i>ETH </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">ETH 2.25842108</h6>
                                                    <p class="text-danger fs-13 mb-0">$40552.18</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/ltc.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Litecoin</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-warning me-1"></i>LTC </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">LTC 10.58963217</h6>
                                                    <p class="text-success fs-13 mb-0">$15824.58</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                        <li class="list-group-item px-0 pb-0">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 avatar-xs">
                                                    <span class="avatar-title bg-light p-1 rounded-circle">
                                                        <img src="/assets/images/svg/crypto-icons/dash.svg" class="img-fluid" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h6 class="mb-1">Dash</h6>
                                                    <p class="fs-13 mb-0 text-muted"><i class="mdi mdi-circle fs-10 align-middle text-success me-1"></i>DASH </p>
                                                </div>
                                                <div class="flex-shrink-0 text-end">
                                                    <h6 class="mb-1">DASH 204.28565885</h6>
                                                    <p class="text-success fs-13 mb-0">$30635.84</p>
                                                </div>
                                            </div>
                                        </li><!-- end -->
                                    </ul><!-- end -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <!-- ============================== End Battery Monitoring =============================== -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <?= $this->include('partials/footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <?= $this->include('partials/customizer') ?>

        <?= $this->include('partials/vendor-scripts') ?>

        <!-- apexcharts -->
        <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Swiper Js -->
        <script src="/assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- CRM js -->
        <script src="/assets/js/pages/dashboard-crypto.init.js"></script>

        <!-- App js -->
        <script src="/assets/js/app.js"></script>
</body>

</html>