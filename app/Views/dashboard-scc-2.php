<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'SCC 2')); ?>

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

                    <?php echo view('partials/page-title', array('pagetitle' => 'Dashboards', 'title' => 'Solar Charger Controller 2')); ?>

                    <div class="row">
                        <div class="col-xl-3 col-md-6 ">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0"> Voltage IN</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="36894">0</span>V</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0"> Voltage OUT </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="36894">0</span>V</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0">Current IN </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="36894">0</span>V</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0"> Current OUT </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="36894">0</span>A</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 ">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0">Chg State </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="36894">0</span>A</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0">AH</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="30"></span>°C</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0">KWh </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="20">0</span>W</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0"> Max Voc </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="36894">0</span>W</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 ">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0"> AH Total </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="36894">0</span>W</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-secondary">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0"> KWh Total </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0"> </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                            <h4 class="fs-22 fw-bold ff-secondary  mb-4"><span class="counter-value" data-target="20">0</span>W</h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-light rounded fs-3">
                                                <i class="mdi mdi-flash"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>

                    <!-- Chart -->
                    <div class="row">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Charts</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="lineChart" class="chartjs-chart" data-colors='[
                                        "#CD6155",
                                        "#F2D7D5",
                                        "#AF7AC5",
                                        "#A569BD",
                                        "#5499C7",
                                        "#5DADE2",
                                        "#48C9B0",
                                        "#45B39D",
                                        "#52BE80",
                                        "#58D68D",
                                        "#F4D03F",
                                        "#F5B041",
                                        "#EB984E",  
                                        "#F0F3F4",
                                        "#CACFD2",
                                        "#AAB7B8",
                                        "#95A5A6",
                                        "#AAB7B8",
                                        "#FBEEE6",
                                        "#5D6D7E",
                                        "#566573"]'>
                                        </canvas>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- container-fluid -->
                    </div>
                    <!-- End Page-content -->

                    <?= $this->include('partials/footer') ?>
                </div>
                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->



            <?= $this->include('partials/vendor-scripts') ?>

            <!-- apexcharts -->
            <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

            <!-- Dashboard init -->
            <script src="/assets/js/pages/dashboard-crm.init.js"></script>

            <!-- App js -->
            <script src="/assets/js/app.js"></script>

            <!-- Chart JS -->
            <script src="/assets/libs/chart.js/chart.min.js"></script>

            <!-- chartjs init -->
            <script src="/assets/js/pages/chartjs.init.js"></script>
</body>

</html>