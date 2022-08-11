<?= $this->include('partials/main') ?>

<head>

    <?php echo view('partials/title-meta', array('title' => 'Data Log')); ?>

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

                    <?php echo view('partials/page-title', array('pagetitle' => 'Dashboards', 'title' => 'Data Log')); ?>

                    <!-- ===================== Chart ====================== -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header d-flex">
                                <div class="flex-grow-1 ms-3">
                                    <h4 class="card-title mb-0">Data Log Chart</h4>
                                    <a id="save-btn" class="btn btn-success" style="float: right;">Save as PNG</a>
                                </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart" class="chartjs-chart"></canvas>
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <!-- Solar Power -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-database-2-fill display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="card-title mb-0">Data Log Table</span></h2>
                                                <a href="<?= base_url('/export_csv') ?>" class="btn btn-success" style="float: right;">Export Data Last 24 Hour</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id='x' class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 8%;" class="text-center">ID</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Date Time</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Bus (V)</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">VTS (V)</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">MW/VSAT (V)</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">VTS (A)</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">MW/VSAT (A)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($log as $datalog) { ?>
                                                        <tr>
                                                            <td class="text-center"> <?php echo $datalog->id ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->dtime ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->bus_vol ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->bts_vol ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->vsat_vol ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->bts_cur ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->vsat_cur ?>&nbsp; </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                                    </div><!-- end card body -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <?= $this->include('partials/footer') ?>
                    <!-- end main content-->

                </div>
            </div>
        </div>
    </div>
    <!-- END layout-wrapper -->
    <?= $this->include('partials/vendor-scripts') ?>
    <?= $this->include('chart/Chart-data-log') ?>

</body>

</html>