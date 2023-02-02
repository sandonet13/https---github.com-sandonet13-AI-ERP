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
                                            </div>
                                            <div class="flex-grow-10 ms-3">
                                            <form id="form" action="<?php echo site_url('datalog') ?>" method="post">
                                                <!--<div class="form-group"><label for="">Data Log To :</label> </div>-->
                                                <div class="form-group" id="sandbox-container"  >
                                                    <input type="date" class="form-control" placeholder="From" name="from" data-provider="flatpickr" data-date-format="Y-m-d" value="<?php if (isset($_POST['from'])) echo $_POST['from'];?>">
                                                    <input type="date" class="form-control cuy" placeholder="To" name="to" data-provider="flatpickr" data-date-format="Y-m-d" value="<?php if (isset($_POST['to'])) echo $_POST['to'];?>">


                                                <!-- <button class="btn btn-sm btn-info hide" type="submit">Show</button> -->
                                                <button class="btn btn-sm btn-info hide" type="submit">Shows</button>
                                                <input type="submit" name="show" value="Show" class="btn btn-sm btn-info cuy" />
                                                <!-- <button class="btn btn-sm " type="reset" id="btn-reset" value="Reset"><i class="fa fa-refresh"></i></button> -->
                                                <?php if(!empty($info)){echo $info;}else{echo '';}; ?>
                                                </div>
                                        </form>
                                        </div>
                                        <div>
                                            <form id="form" action="<?php echo site_url('excel') ?>" method="post">
                                                <!--<div class="form-group"><label for="">Data Log To :</label> </div>-->
                                                <div class="form-group " id="sandbox-container"  >
                                                    <input type="date" class="form-control" placeholder="Start" name="start" data-provider="flatpickr" data-date-format="Y-m-d" value="<?php if (isset($_POST['start'])) echo $_POST['start'];?>">
                                                    <input type="date" class="form-control cuy" placeholder="End" name="end" data-provider="flatpickr" data-date-format="Y-m-d" value="<?php if (isset($_POST['end'])) echo $_POST['end'];?>">


                                                <!-- <button class="btn btn-sm btn-info hide" type="submit">Show</button> -->
                                                <button class="btn btn-sm btn-info hide" type="submit">Download</button>
                                                <input type="submit" name="show" value="Download" class="btn btn-sm btn-info cuy" />
                                                <!-- <button class="btn btn-sm " type="reset" id="btn-reset" value="Reset"><i class="fa fa-refresh"></i></button> -->
                                                <?php if(!empty($info)){echo $info;}else{echo '';}; ?>
                                                </div>
                                        </form>
                                        </div>
                                        </div>
                                    </div>
                                    <div id='x' class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="users-list">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 3%;" class="text-center">No</th>
                                                        <th scope="col" style="width: 10%;" class="text-center">Date Time</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">Bus (V)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">BTS (V)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">VSAT V (V)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">BTS (A)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">VSAT (A)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">CC1 Vin (V)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">CC1 Vout (V)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">CC1 Iin (A)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">CC1 Iout (A)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">CC2 Vin (V)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">CC2 Vout (V)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">CC2 Iin (A)</th>
                                                        <th scope="col" style="width: 6%;" class="text-center">CC2 Iout (A)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $no=1; foreach ($data_range as $datalog) { ?>
                                                        <tr>
                                                            <td class="text-center"> <?php echo $no ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->dtime ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->bus_vol ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->bts_vol ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->vsat_vol ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->bts_cur ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->vsat_cur ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->cc1_vin ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->cc1_vout ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->cc1_cin ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->cc1_cout ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->cc2_vin ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->cc2_vout ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->cc2_cin ?>&nbsp; </td>
                                                            <td class="text-center"> <?php echo $datalog->cc2_cout ?>&nbsp; </td>
                                                        </tr>
                                                        <?php  $no++; ?>
                                                    <?php } ?>

                                                </tbody>
                                            </table>
                                            <!-- end table -->
                                        </div>
                                        <!-- end table responsive -->
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
    <script>
        $(document).ready( function () {
        $('#users-list').DataTable();
    } );
    </script>

</body>

</html>
