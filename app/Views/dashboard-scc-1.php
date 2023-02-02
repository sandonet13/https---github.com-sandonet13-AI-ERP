<?= $this->include('partials/main') ?>


<head>

    <?php echo view('partials/title-meta', array('title' => 'SCC 1')); ?>

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

                    <?php echo view('partials/page-title', array('pagetitle' => 'Dashboards', 'title' => 'Solar Charger Controller')); ?>
                    <div id="div-scc1" class="row">
                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-battery-charge-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="card-title mb-0">Solar Charger Controller 1</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">VOLTAGE IN</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_vin"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">VOLTAGE OUT</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_vout"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">CURRENT IN</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_iin"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">CURRENT OUT</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_iout"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">CHARGING STATE</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_state"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">AMPERE HOUR</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_ah"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">KWH</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_kwh"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">MAX VOC</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_max_voc"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">AH TOTAL</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_ah_total"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">KWH TOTAL</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="scc1_kwh_total"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->


                    <div id="div-scc2" class="row">
                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-battery-charge-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="card-title mb-0">Solar Charger Controller 2</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">VOLTAGE IN</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_vin"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">VOLTAGE OUT</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_vout"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">CURRENT IN</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_iin"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">CURRENT OUT</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_iout"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">CHARGING STATE</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_state"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">AMPERE HOUR</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_ah"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">KWH</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_kwh"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">MAX VOC</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_max_voc"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">AH TOTAL</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_ah_total"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                              <div class="col">
                                                  <div class="mt-3 mt-md-0 py-4 px-3">
                                                      <h5 class="text-muted text-uppercase fs-13">KWH TOTAL</h5>
                                                      <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 ms-3">
                                                          <h2 class="mb-0" id="scc2_kwh_total"></h2>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <!-- ===================== Chart ====================== -->
                    <!-- <div class="row">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Chart SCC 1</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart1" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div>
                         </div> -->
                        <!-- <div class="row"> -->
                            <!-- <div class="col-xl-12"> -->
                                <!-- <div class="card"> -->
                                    <!-- <div class="card-header"> -->
                                        <!-- <h4 class="card-title mb-0">Chart SCC 2</h4> -->
                                    <!-- </div> -->
                                    <!-- <div class="card-body"> -->
                                        <!-- <canvas id="myChart2" class="chartjs-chart"></canvas> -->
                                <!-- </div> -->
                                <!-- </div> -->
                            <!-- </div> <! end col -->
                        <!-- </div> -->
                        <!-- container-fluid -->
                    <!-- </div> -->

                    <?= $this->include('partials/footer') ?>

                </div>
                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->



            <?= $this->include('partials/vendor-scripts') ?>
            <?php //echo view('partials/refresh-scc-1'); ?>
            <?php //echo view('partials/refresh-scc-2'); ?>
            <?php echo view('partials/scc_payload'); ?>





            <!-- apexcharts -->
            <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

            <!-- Dashboard init -->
            <script src="/assets/js/pages/dashboard-crm.init.js"></script>

            <!-- App js -->
            <script src="/assets/js/app.js"></script>
            <script src="/assets/js/jquery-3.6.0.min.js"></script>

            <!-- Chart JS -->
            <script src="/assets/libs/chart.js/chart.min.js"></script>
            <!-- chartjs init -->
            <script src="/assets/js/pages/chartjs.init.js"></script>
            <script src="/assets/js/app.js"></script>
</body>
</html>
