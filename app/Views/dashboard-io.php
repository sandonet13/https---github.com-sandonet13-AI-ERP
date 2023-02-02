<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'Input Output')); ?>

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

            <div class="page-content"  id="io">
                <div class="container-fluid">

                    <?php echo view('partials/page-title', array('pagetitle' => 'Dashboards', 'title' => 'Input Output')); ?>

                    <div class="row">
                    <div class="col-xl-5 col-md-6">
                        <!-- card -->
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-bold -60 text-truncate mb-0"> <?php echo $di[0]->name ?> </p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class=" fs-14 mb-0">
                                              <i id="di_fan_ena_class"></i><i id="di_fan_ena"></i><i id="di_fan_alm_class"></i>
                                              <!-- <i class="mdi mdi-alarm text-success"><small class="mdi mdi-check"></i></small> -->
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                      <h4 class="fs-22 fw-bold ff-secondary mb-4">Status
                                          <i id="di_fan_ena_class_1"></i><i id="di_fan_ena_1"></i><i id="di_fan_state"></i>
                                      </h4>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-dark rounded fs-3">
                                            <i class="mdi mdi-fan"></i>
                                        </span>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                <div class="col-xl-5 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 overflow-hidden">
                                    <p class="text-uppercase fw-bold -60 text-truncate mb-0"> <?php echo $di[1]->name ?> </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <h5 class=" fs-14 mb-0">
                                          <i id="di_door_ena_class"></i><i id="di_door_ena"></i><i id="di_door_alm_class"></i>
                                          <!-- <i class="mdi mdi-alarm text-success"><small class="mdi mdi-check"></i></small> -->
                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                  <h4 class="fs-22 fw-bold ff-secondary mb-4">Status
                                      <i id="di_door_ena_class_1"></i><i id="di_door_ena_1"></i><i id="di_door_state"></i>
                                  </h4>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                    <span class="avatar-title bg-soft-dark rounded fs-3">
                                        <i class="mdi mdi-door"></i>
                                    </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div> <!-- end row-->

                    <div class="row">
                        <div class="col-xl-5 col-md-6 ">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0"><?php echo $lvd[0]->parameter ?> </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0">
                                                <!-- <i class="mdi mdi-alarm text-success"><small class="mdi mdi-check"></small></i> -->
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                          <h4 class="fs-22 fw-bold ff-secondary mb-4">Status
                                                <i id="di_vsat_alm_class"></i><i id="di_vsat_alm"></i><i id="di_vsat_alm_class_1"></i>
                                          </h4>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-dark rounded fs-3">
                                                <i class="ri-radar-line"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                                <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 12%;">Disconnect</th>
                                                        <th scope="col" style="width: 12%;">Reconnect</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td class="text-center" id="lvd_vsat_disconnect"></td>
                                                            <td class="text-center" id="lvd_vsat_reconnect"> </td>
                                                        </tr>
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-5 col-md-6">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0"> <?php echo $lvd[1]->parameter ?> </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0">
                                                <!-- <i class="mdi mdi-alarm text-success"><small class="mdi mdi-check"></small></i> -->
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                      <div>
                                        <h4 class="fs-22 fw-bold ff-secondary mb-4">Status
                                              <i id="di_bts_alm_class"></i><i id="di_bts_alm"></i><i id="di_bts_alm_class_1"></i>
                                        </h4>
                                      </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-soft-dark rounded fs-3">
                                                <i class="ri-base-station-line"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                                <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 12%;">Disconnect</th>
                                                        <th scope="col" style="width: 12%;">Reconnect</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                          <td class="text-center" id="lvd_bts_disconnect"></td>
                                                          <td class="text-center" id="lvd_bts_reconnect"> </td>
                                                        </tr>
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->include('partials/footer') ?>
            <?php //echo view('partials/refresh-scc-io'); ?>
            <?php echo view('partials/dido_alm_payload'); ?>
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
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
</body>

</html>
