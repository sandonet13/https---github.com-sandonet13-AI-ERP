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
                        <div class="col-xl-5 col-md-6 ">
                            <!-- card -->
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-bold -60 text-truncate mb-0"><?php echo $di[0]->name ?> </p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5 class=" fs-14 mb-0">
                                            <?php if($di[0]->state_fb == 'Enable'){ ?><i class="mdi mdi-alarm text-success"><small class="mdi mdi-check"></i></small><?php } ?><?php if($di[0]->state_fb == 'Disable'){ ?><i class="mdi mdi-alarm text-danger"><small class="mdi mdi-close"></i></small> <?php } ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                        <h4 class="fs-22 fw-bold ff-secondary mb-4">Status <?php if($di[0]->value == 0){ ?><small class="text-decoration text-success">Close <i class="mdi mdi-check"></i></small><?php } ?><?php if($di[0]->value == 1){ ?><small class="text-decoration text-danger">Open <i class="mdi mdi-close"></i></small> <?php } ?></h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
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
                                                    <?php if($di[1]->state_fb == 'Enable'){ ?><i class="mdi mdi-alarm text-success"><small class="mdi mdi-check"></i></small><?php } ?><?php if($di[1]->state_fb == 'Disable'){ ?><i class="mdi mdi-alarm text-danger"><small class="mdi mdi-close"></i></small> <?php } ?>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-4">
                                        <div>
                                        <h4 class="fs-22 fw-bold ff-secondary mb-4">Status <?php if($di[1]->value == 0){ ?><small class="text-decoration text-success">Close <i class="mdi mdi-check"></i></small><?php } ?><?php if($di[1]->value == 1){ ?><small class="text-decoration text-danger">Open <i class="mdi mdi-close"></i></small> <?php } ?></h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
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
                                        <h4 class="fs-22 fw-bold ff-secondary mb-4">Status <?php if($lvd[0]->value == 0){ ?><small class="text-decoration text-success">Connect <i class="mdi mdi-check"></i></small><?php } ?><?php if($lvd[0]->value == 1){ ?><small class="text-decoration text-danger">Disconnect <i class="mdi mdi-close"></i></small> <?php } ?></h4>
                                        <a href="" class="text-decoration text-white">&nbsp;</a>
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
                                                            <td class="text-center"> <?php echo $lvd[0]->disconnect . '&nbsp;' . $lvd[0]->unit ?></td>
                                                            <td class="text-center"> <?php echo $lvd[0]->reconnect . '&nbsp;' . $lvd[0]->unit ?></td>

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
                                        <h4 class="fs-22 fw-bold ff-secondary mb-4">Status <?php if($lvd[1]->value == 0){ ?><small class="text-decoration text-success">Connect <i class="mdi mdi-check"></i></small><?php } ?><?php if($lvd[1]->value == 1){ ?><small class="text-decoration text-danger">Disconnect <i class="mdi mdi-close"></i></small> <?php } ?><?php if($lvd[1]->state_fb == 'Disable'){ ?><small class="text-decoration">Disable <i class="mdi mdi-close"></i></small> <?php } ?></h4>
                                            <a href="" class="text-decoration text-white">&nbsp;</a>
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
                                                            <td class="text-center"> <?php echo $lvd[1]->disconnect . '&nbsp;' . $lvd[1]->unit ?></td>
                                                            <td class="text-center"> <?php echo $lvd[1]->reconnect . '&nbsp;' . $lvd[1]->unit ?></td>

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
            <?php echo view('partials/refresh-scc-io'); ?>
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