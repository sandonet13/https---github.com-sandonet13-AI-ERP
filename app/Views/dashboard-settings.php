<?= $this->include('partials/main') ?>
<link href="/assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

<head>

    <?php echo view('partials/title-meta', array('title' => 'System Settings')); ?>


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

            <div class="page-content" id="settings">
                <div class="container-fluid">

                    <?php echo view('partials/page-title', array('pagetitle' => 'Dashboards', 'title' => 'System Settings')); ?>

                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Site Location & Ip Address</h4>
                                </div><!-- end card header -->
                            <div class="card-body">
                                <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update') ?>">
                                    <?php foreach ($site_info as $site_info_data) { ?>
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">Site ID</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="nameInput" placeholder="" type="" name="site_id" value="<?php echo $site_info_data->site_id; ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">Site Name</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="nameInput" placeholder=""type="" name="name" value="<?php echo $site_info_data->name;  ?>" >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">Address</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" rows="3" id="comment" name="address"><?php echo $site_info_data->address ?> </textarea>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <?php foreach ($network as $network_data) { ?>
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">IP Address</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="nameInput" placeholder=""  type="" name="ipaddress" value="<?php echo $ip_real ?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">Net mask</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="nameInput" placeholder=""  type="" name="netmask" value="<?php echo $netmask ?>" >
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">Gateway</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="nameInput" placeholder=""  type="" name="gateway" value="<?php echo $gateway ?>">
                                            </div>
                                        </div>
                                        <div class=" d-flex text-end" style="float:right ;">
                                            <button type="submit" id="sa-success" class=" d-flex btn btn-primary" style="margin-right:10px ;"> Save&nbsp; <i class="ri-save-line"></i> </button>
                                            <button type="reset" class=" d-flex btn btn-warning" style="margin-right:10px ;"> Refresh&nbsp; <i class="ri-refresh-line"></i></button>
                                            <button type="button" class="btn btn-danger " data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Reboot&nbsp; <i class="ri-shut-down-line"></i></button>
                                            <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body text-center p-5">
                                                            <!-- <lord-icon src="https://cdn.lordicon.com/hrqwmuhr.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:120px;height:120px"></lord-icon> -->
                                                            <div class="mt-4">
                                                                <h3 class="mb-3">Reboot Device</h3>
                                                                <p class="text-muted mb-4"> Are you sure want to reboot this device ? you need to wait few minutes until the system is running up.</p>
                                                                <div class="hstack gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                    <a href="/reboot" class="btn btn-danger">Confirm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>
                                        <?php } ?>
                                    </form>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xxl-4">
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex ">
                                    <h4 class="card-title mb-0 flex-grow-1">Set date</h4>
                                </div><!-- end card header -->
                                <div class="card-body ">
                                <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/settanggal') ?>">
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">Date</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="date" class="form-control" id="nameInput" name="date" placeholder="Select Date" data-provider="flatpickr" data-date-format="d M, Y">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-3">
                                                <label for="nameInput" class="form-label">Time</label>
                                            </div>
                                            <div class="col-lg-9">
                                                <input type="time" class="form-control" id="nameInput" name="time" placeholder="Select Hours" data-provider="timepickr" data-time-hrs="true" id="timepicker-24hrs">
                                            </div>
                                        </div>
                                        <div class=" d-flex text-end" style="float:right ;">
                                            <button type="submit" id="sa-success" class=" d-flex btn btn-primary" style="margin-right:10px ;"> Save&nbsp; <i class="ri-save-line"></i> </button>
                                            <button type="reset" id="sa-success" class=" d-flex btn btn-warning"> Refresh&nbsp; <i class="ri-refresh-line"></i></button>
                                        </div>
                                    </form>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        
                        <div class="col-xxl-8" id="calibration_refresh">
                            <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Measurement Calibration</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_busvol_scale') ?>">
                                        <div class="row mb-3">
                                            <div class="col-lg-2">
                                                <label for="nameInput" class="form-label">BUS Voltage </label>
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" class="form-control" value="<?php echo $load[0]->value ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-1 d-flex" style="padding-bottom:1%">
                                                <input type="text" class="form-control" value="<?php echo $load[0]->unit ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" class="form-control" value="<?php echo $config_load[0]->scale ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-5 d-flex">
                                                <input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="busvol_scale" placeholder="Set Scale Factor">
                                                <button type="submit" id="sa-success" class=" d-flex btn btn-primary" style="margin-left:20px ;"> Set&nbsp; <i class="ri-check-line"></i> </button>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_btscur_scale') ?>">
                                        <div class="row mb-3">
                                            <div class="col-lg-2">
                                                <label for="nameInput" class="form-label">BTS Current </label>
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" class="form-control" value="<?php echo $load[1]->value ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-1 d-flex" style="padding-bottom:1%">
                                                <input type="text" class="form-control" value="<?php echo $load[1]->unit ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" class="form-control" value="<?php echo $config_load[1]->scale ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-5 d-flex" style="padding-bottom:1%">
                                                <input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="btscur_scale" placeholder="Set Scale Factor">
                                                <button type="submit" id="sa-success" class=" d-flex btn btn-primary" style="margin-left:20px ;"> Set&nbsp; <i class="ri-check-line"></i> </button>
                                            </div>
                                        </div>
                                        </form>
                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_vsatcur_scale') ?>">
                                        <div class="row mb-3">
                                            <div class="col-lg-2">
                                                <label for="nameInput" class="form-label">MW/VSAT Current </label>
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" class="form-control" value="<?php echo $load[2]->value ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-1 d-flex" style="padding-bottom:1%">
                                                <input type="text" class="form-control" value="<?php echo $load[2]->unit ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" class="form-control" value="<?php echo $config_load[2]->scale ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-5 d-flex" style="padding-bottom:1%">
                                                <input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="vsatcur_scale" placeholder="Set Scale Factor">
                                                <button type="submit" id="sa-success" class=" d-flex btn btn-primary" style="margin-left:20px ;"> Set&nbsp; <i class="ri-check-line"></i> </button>
                                            </div>
                                        </div>
                                        </form>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        
                        <div class="col-xxl-8" id="io">
                            <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Input Output Settings</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_fan') ?>">
                                        <div class="row mb-3">
                                            <div class="col-lg-2">
                                                <label for="nameInput" class="form-label"><?php echo $config_di[0]->parameter ?> </label>
                                            </div>
                                            <div class="col-lg-4 d-flex" >
                                            <select class="form-control" name="fan_state">
                                                      <!-- <option value="tes</option> -->
                                                      <option value="<?php echo $config_di[0]->state_fb ?>"><?php echo $config_di[0]->state_fb ?></option>
                                                      <?php
                                                        if ($config_di[0]->state_fb == 'Enable'){ echo '<option value="Disable">Disable</option>';}
                                                        else{echo '<option value="Enable">Enable</option>';}
                                                        ?>
                                            </select>
                                            </div>
                                            <div class="col-lg-4 d-flex" >
                                            <select class="form-control" name="fan_triger">
                                                      <option value="<?php echo $config_di[0]->triger_fb ?>"><?php echo $config_di[0]->triger_fb ?></option>
                                                      <?php
                                                        if ($config_di[0]->triger_fb == 'Open'){ echo '<option value="Close">Close</option>';}
                                                        else{echo '<option value="Open">Open</option>';}
                                                        ?>
                                                  </select>
                                            </div>
                                            <div class="col-lg-1 d-flex">
                                                <button type="submit" id="sa-success" class=" d-flex btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button>
                                            </div>
                                        </div>
                                </form>
                                <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_door') ?>">
                                        <div class="row mb-3">
                                            <div class="col-lg-2">
                                                <label for="nameInput" class="form-label"><?php echo $config_di[1]->parameter ?> </label>
                                            </div>
                                            <div class="col-lg-4 d-flex" >
                                            <select class="form-control" name="door_state">
                                                      <!-- <option value="tes</option> -->
                                                      <option value="<?php echo $config_di[1]->state_fb ?>"><?php echo $config_di[1]->state_fb ?></option>
                                                      <?php
                                                        if ($config_di[1]->state_fb == 'Enable'){ echo '<option value="Disable">Disable</option>';}
                                                        else{echo '<option value="Enable">Enable</option>';}
                                                        ?>
                                            </select>
                                            </div>
                                            <div class="col-lg-4 d-flex">
                                            <select class="form-control" name="door_triger">
                                                      <option value="<?php echo $config_di[1]->triger_fb ?>"><?php echo $config_di[1]->triger_fb ?></option>
                                                      <?php
                                                        if ($config_di[1]->triger_fb == 'Open')
                                                        { 
                                                            echo '<option value="Close">Close</option>';
                                                        }
                                                        else{
                                                            echo '<option value="Open">Open</option>';
                                                        }
                                                        ?>
                                                  </select>
                                            </div>
                                            <div class="col-lg-1 d-flex">
                                                <button type="submit" id="sa-success" class=" d-flex btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button>
                                            </div>
                                        </div>
                                </form>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        
                        <div class="col-xxl-8" id="lvd_refresh">
                            <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">LVD Setpoint Settings</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_lvd_vsat') ?>">
                                        <div class="row mb-3">
                                            <div class="col-lg-2">
                                                <label for="nameInput" class="form-label"><?php echo $config_lvd[0]->parameter ?> </label>
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" name="lvd_vsat_disconnect" class="form-control" value="<?php echo $config_lvd[0]->disconnect_fb ?>" id="nameInput" placeholder="">
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" name="lvd_vsat_reconnect" class="form-control" value="<?php echo $config_lvd[0]->reconnect_fb ?>" id="nameInput" placeholder="">
                                            </div>
                                            <div class="col-lg-1 d-flex" style="padding-bottom:1%">
                                                <input type="text" class="form-control" value="<?php echo $config_lvd[0]->unit ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-5 d-flex" style="padding-bottom:1%">
                                            <select class="form-control" name="lvd_vsat_state">
                                                <option value="<?php echo $config_lvd[0]->state_fb ?>"><?php echo $config_lvd[0]->state_fb ?></option>
                                                <?php if($config_lvd[0]->state_fb == 'Enable'){echo '<option value="Disable">Disable</option>';}else{echo '<option value="Enable">Enable</option>';} ?>
                                            </select>
                                                <button type="submit" id="sa-success" class=" d-flex btn btn-primary" style="margin-left:20px ;"> Set&nbsp; <i class="ri-check-line"></i> </button>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_lvd_bts') ?>">
                                        <div class="row mb-3">
                                            <div class="col-lg-2">
                                                <label for="nameInput" class="form-label"><?php echo $config_lvd[1]->parameter ?> </label>
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" name="lvd_bts_disconnect" class="form-control" value="<?php echo $config_lvd[1]->disconnect_fb ?>" id="nameInput" placeholder="">
                                            </div>
                                            <div class="col-lg-2 d-flex" style="padding-bottom:1%">
                                                <input type="number" name="lvd_bts_reconnect" class="form-control" value="<?php echo $config_lvd[1]->reconnect_fb ?>" id="nameInput" placeholder="">
                                            </div>
                                            <div class="col-lg-1 d-flex" style="padding-bottom:1%">
                                                <input type="text" class="form-control" value="<?php echo $config_lvd[1]->unit ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-5 d-flex" style="padding-bottom:1%">
                                            <select class="form-control" name="lvd_bts_state">
                                                <option value="<?php echo $config_lvd[1]->state_fb ?>"><?php echo $config_lvd[1]->state_fb ?></option>
                                                <?php if($config_lvd[1]->state_fb == 'Enable'){echo '<option value="Disable">Disable</option>';}else{echo '<option value="Enable">Enable</option>';} ?>
                                            </select>
                                                <button type="submit" id="sa-success" class=" d-flex btn btn-primary" style="margin-left:20px ;"> Set&nbsp; <i class="ri-check-line"></i> </button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->


                    </div><!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->include('partials/footer') ?>
            <script src="/assets/js/jquery-3.6.0.min.js"></script>
            <?php echo view('partials/refresh-settings'); ?>
            <?php echo view('partials/refresh-settings-io'); ?>
            <?php echo view('partials/refresh-settings-calibration'); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->




    <?= $this->include('partials/vendor-scripts') ?>
                                         
    <!-- apexcharts -->
    <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- projects js -->
    <script src="/assets/js/pages/dashboard-projects.init.js"></script>
    
    <!-- Sweet Alerts js -->
    <script src="/assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- Sweet alert init js-->
    <script src="/assets/js/pages/sweetalerts.init.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
</body>

</html>