<?= $this->include('partials/main') ?>

<head>
    <!-- gridjs css -->
    <link rel="stylesheet" href="/assets/libs/gridjs/theme/mermaid.min.css">

    <?php echo view('partials/title-meta', array('title' => 'Battery Monitoring System')); ?>

    <?= $this->include('partials/head-css') ?>

</head>

<body data-layout-width="fluid">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/menu') ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <?php echo view('partials/page-title', array('pagetitle' => 'Dashboards', 'title' => 'Battery Monitoring System')); ?>

                    <!-- Solar Power -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <i class="ri-battery-line display-6 text-muted"></i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h2 class="card-title mb-0">BMS</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                <div id='data' class="card-body">
                                    <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 12%;">Parameter</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack1</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack2</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack3</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack4</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack5</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack6</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack7</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack8</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack9</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack10</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $bms1) { ?>
                                                        <tr>
                                                            <td><?php echo $bms1->name ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack1 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack2 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack3 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack4 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack5 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack6 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack7 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack8 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack9 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack10 ?>&nbsp; <?= $bms1->unit; ?></td>
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
                    <!-- ================================ Table ================================ -->

                    <!-- ================================ End Table ================================ -->

                    <!-- End Page-content -->
                    <?= $this->include('partials/footer') ?>
                </div>
                <!-- end main content-->

            </div>
            <!-- END layout-wrapper -->


            <?= $this->include('partials/vendor-scripts') ?>

            <?php echo view('partials/refresh'); ?>
            <!-- prismjs plugin -->
            <script src="/assets/libs/prismjs/prism.js"></script>

            <!-- gridjs js -->
            <script src="/assets/libs/gridjs/gridjs.umd.js"></script>
            <!-- gridjs init -->
            <script src="/assets/js/pages/gridjs.init.js"></script>

            <!-- Dashboard init -->
            <script src="/assets/js/pages/dashboard-crm.init.js"></script>

            <!-- App js -->
            <script src="/assets/js/app.js"></script>
            <script src="/assets/js/jquery-3.6.0.min.js"></script>
            <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> -->
</body>

</html>