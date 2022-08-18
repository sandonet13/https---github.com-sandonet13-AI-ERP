<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'Power Measurement')); ?>

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

                    <?php echo view('partials/page-title', array('pagetitle' => 'Dashboards', 'title' => 'Power Measurement')); ?>

                    <!-- Solar Power -->
                    <div id="pv_power" class="row">
                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                  <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-sun-line display-6 text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="card-title mb-0">PV Power</span></h2>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                        <?php foreach ($power as $power_data) { ?>
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13"><?php echo $power_data->name; ?></h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><?php echo $power_data->value; ?>&nbsp;<?php echo $power_data->unit; ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        <?php } ?>
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <!-- Battery Power -->
                    <div id="batt_power" class="row">
                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                  <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-battery-line display-6 text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="card-title mb-0">Battery Power</span></h2>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                        <?php foreach ($batt as $batt_data) { ?>
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13"><?php echo $batt_data->name; ?></h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><?php echo $batt_data->value; ?>&nbsp;<?php echo $batt_data->unit; ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        <?php } ?>
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <!-- Load Power -->
                    <div id="load_power" class="row">
                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                  <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-base-station-line display-6 text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="card-title mb-0">BTS Power</span></h2>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                        <?php foreach ($load as $load_data) { ?>
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13"><?php echo $load_data->name; ?></h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><?php echo $load_data->value; ?>&nbsp;<?php echo $load_data->unit; ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        <?php } ?>
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->


                    <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Chart PV</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart1" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Chart Battery</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart2" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Chart Load</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart3" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div> <!-- end col -->
                        </div>

                    <!-- Load Power -->
                

                  <!-- End Page-content -->
                    <?= $this->include('partials/footer') ?>
                    <?= $this->include('chart/Chart-data-recti') ?>

                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->



            <?= $this->include('partials/vendor-scripts') ?>
            <?php echo view('partials/refresh-scc-pv-power'); ?>   
            <?php echo view('partials/refresh-scc-batt-power'); ?>
            <?php echo view('partials/refresh-scc-load-power'); ?> 
        

 

                           
            <!-- apexcharts -->

            <!-- linecharts init -->
            <!-- <script src="/assets/js/pages/apexcharts-line.init.js"></script> -->

            <!-- Dashboard init -->
            <script src="/assets/js/pages/dashboard-crm.init.js"></script>

            <!-- App js -->
            <!-- <script src="/assets/js/app.js"></script> -->
            <script src="/assets/js/jquery-3.6.0.min.js"></script>

            <!-- Chart JS -->
            <script src="/assets/libs/chart.js/chart.min.js"></script>

            <!-- chartjs init -->
            <script src="/assets/js/pages/chartjs.init.js"></script>
            <script src="/assets/js/app.js"></script>
</body>

</html>
