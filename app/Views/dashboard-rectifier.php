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

                    <!-- Site Info -->
                    <div class="row">
                    <div class="col-xxl-6">
                        <div class="card card-height-50">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Site Location</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <?php foreach ($site_info as $site_info_data) { ?>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Site ID</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder="" type="" name="site_id" value="<?php echo $site_info_data->site_id; ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Site Name</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder=""type="" name="name" value="<?php echo $site_info_data->name;  ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Address</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder=""type="" name="name" value="<?php echo $site_info_data->address ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    <?php foreach ($network as $network_data) { ?>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">IP Address</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder=""  type="" name="ipaddress" value="<?php echo $ip_real ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Net mask</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder=""  type="" name="netmask" value="<?php echo $netmask ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Gateway</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder=""  type="" name="gateway" value="<?php echo $gateway ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <?php } ?>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xxl-6">
                        <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Device Info</h4>
                            </div><!-- end card header -->
                            <div class="card-body">
                                <?php foreach ($site_info as $site_info_data) { ?>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Model</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder="" type="" name="site_id" value="<?php echo $site_info_data->model; ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">part Number</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder=""type="" name="name" value="<?php echo $site_info_data->pn;  ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Serial Number</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder=""type="" name="name" value="<?php echo $site_info_data->sn ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Software Version</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder=""type="" name="name" value="<?php echo $site_info_data->software ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-1">
                                        <div class="col-lg-3">
                                            <label for="nameInput" class="form-label">Hardware Version</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="nameInput" placeholder=""type="" name="name" value="<?php echo $site_info_data->hardware ?>"class="form-control" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <?php } ?>
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                  </div><!-- end col -->

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
                                          <h2 class="card-title mb-0">BTS & VSAT Power</span></h2>
                                      </div>
                                  </div>
                                </div>
                                <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                          <div class="col">
                                              <div class="mt-3 mt-md-0 py-4 px-3">
                                                  <h5 class="text-muted text-uppercase fs-13">Bus Voltage</h5>
                                                  <div class="d-flex align-items-center">
                                                      <div class="flex-grow-1 ms-3">
                                                      <h2 class="mb-0" id="bus_vol"></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                          <div class="col">
                                              <div class="mt-3 mt-md-0 py-4 px-3">
                                                  <h5 class="text-muted text-uppercase fs-13">BTS Voltage</h5>
                                                  <div class="d-flex align-items-center">
                                                      <div class="flex-grow-1 ms-3">
                                                      <h2 class="mb-0" id="bts_vol"></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                          <div class="col">
                                              <div class="mt-3 mt-md-0 py-4 px-3">
                                                  <h5 class="text-muted text-uppercase fs-13">VSAT VOLTAGE</h5>
                                                  <div class="d-flex align-items-center">
                                                      <div class="flex-grow-1 ms-3">
                                                      <h2 class="mb-0" id="vsat_vol"></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                          <div class="col">
                                              <div class="mt-3 mt-md-0 py-4 px-3">
                                                  <h5 class="text-muted text-uppercase fs-13">BTS CURRENT</h5>
                                                  <div class="d-flex align-items-center">
                                                      <div class="flex-grow-1 ms-3">
                                                      <h2 class="mb-0" id="bts_cur"></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                          <div class="col">
                                              <div class="mt-3 mt-md-0 py-4 px-3">
                                                  <h5 class="text-muted text-uppercase fs-13">VSAT CURRENT</h5>
                                                  <div class="d-flex align-items-center">
                                                      <div class="flex-grow-1 ms-3">
                                                      <h2 class="mb-0" id="vsat_cur"></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                          <div class="col">
                                              <div class="mt-3 mt-md-0 py-4 px-3">
                                                  <h5 class="text-muted text-uppercase fs-13">BTS Power</h5>
                                                  <div class="d-flex align-items-center">
                                                      <div class="flex-grow-1 ms-3">
                                                      <h2 class="mb-0" id="bts_pow"></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                          <div class="col">
                                              <div class="mt-3 mt-md-0 py-4 px-3">
                                                  <h5 class="text-muted text-uppercase fs-13">VSAT Power</h5>
                                                  <div class="d-flex align-items-center">
                                                      <div class="flex-grow-1 ms-3">
                                                      <h2 class="mb-0" id="vsat_pow"></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                          <div class="col">
                                              <div class="mt-3 mt-md-0 py-4 px-3">
                                                  <h5 class="text-muted text-uppercase fs-13">Load Total Power</h5>
                                                  <div class="d-flex align-items-center">
                                                      <div class="flex-grow-1 ms-3">
                                                      <h2 class="mb-0" id="tot_pow"></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                          <div class="col">
                                              <div class="mt-3 mt-md-0 py-4 px-3">
                                                  <h5 class="text-muted text-uppercase fs-13">Temperature</h5>
                                                  <div class="d-flex align-items-center">
                                                      <div class="flex-grow-1 ms-3">
                                                      <h2 class="mb-0" id="temp"></h2>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                  </div><!-- end row -->
                              </div><!-- end card body -->
                          </div><!-- end card -->
                      </div><!-- end col -->
                  </div><!-- end row -->

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
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">PV1 Power</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="pv_1"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">PV2 Power</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="pv_2"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13">PV TOTAL Power</h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0" id="pv_total"></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->



                        <!-- <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Chart Load</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart3" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div> <!- end col -->
                        <!-- </div> -->
                        <!-- <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Chart PV</h4>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart1" class="chartjs-chart"></canvas>
                                </div>
                                </div>
                            </div> <!- end col -->
                        <!-- </div> -->
                    <!-- Load Power -->


                  <!-- End Page-content -->
                    <?= $this->include('partials/footer') ?>
                    <?= $this->include('chart/Chart-data-recti') ?>

                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->



            <?= $this->include('partials/vendor-scripts') ?>
            <?php echo view('partials/measurement_payload'); ?>
            <?php //echo view('partials/refresh-scc-pv-power'); ?>
            <?php //echo view('partials/refresh-scc-batt-power'); ?>
            <?php // view('partials/refresh-scc-load-power'); ?>





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
