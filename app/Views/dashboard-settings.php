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
                                                <input type="date" class="form-control" id="nameInput" name="date" placeholder="Select Date" data-provider="flatpickr" data-date-format="Y-m-d">
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
                        
                        <div class="col-xxl-8" id="calibration_refresh" <?php if($name == 'maintenance'){echo("hidden");}else{"";}?>>
                            <div class="card card-height-100">
                                <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Measurement Calibration</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                <div class="table-responsive">
                                            <table class="table table-striped">

                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 8%;" class="text-left">Parameter</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Real Value</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Unit</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Scale Factor</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Input Scale Factor</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_busvol_scale') ?>">
                                                            <td class="text-left"> Bus Voltage </td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $load[0]->value ?>" id="busvol_value" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $load[0]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[0]->scale ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="busvol_scale" placeholder="Set Scale Factor"></td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_btscur_scale') ?>">
                                                            <td class="text-left"> BTS Current </td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $load[1]->value ?>" id="btscur_value" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $load[1]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[1]->scale ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="btscur_scale" placeholder="Set Scale Factor"></td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_vsatcur_scale') ?>">
                                                            <td class="text-left"> MW/VSAT Current </td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $load[2]->value ?>" id="mwvsatcur_value" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $load[2]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[2]->scale ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="vsatcur_scale" placeholder="Set Scale Factor"></td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>

                                                </tbody><!-- end tbody -->
                                                
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                                </div><!-- end cardbody -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xxl-12" id="calibration_voltage_refresh" <?php if($name == 'admin'){echo("hidden");}else{"";}?>>
                            <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Voltage Measurement Calibration</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">

                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 8%;" class="text-left">Parameter</th>
                                                        <th scope="col" style="width: 8%;" class="text-left">ADC Integer Value</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Real Value</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Unit</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Scale Factor</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Input Scale Factor</th>
                                                        <th colspan="3" scope="col" style="width: 8%;" class="text-center">Action</th>
                                                        <!-- <th scope="col" style="width: 8%;" class="text-center">Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_busvol_scale') ?>">
                                                            <td class="text-left"> Bus Voltage </td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[0]->min ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $load[0]->value ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $load[0]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[0]->scale ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="busvol_scale" placeholder="Set Scale Factor"></td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp;</button></td>
                                                        </form>
                                                        <td class="text-center">
                                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_zerobusvol') ?>">
                                                                <button type="submit" id="sa-success" class="btn btn-success" > Zero </button>
                                                            </form>
                                                        </td>
                                                        <td class="text-center">
                                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_spanbusvol') ?>">
                                                                <button type="submit" id="sa-success" class="btn btn-warning" > Span </button>
                                                            </form>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_btscur_scale') ?>">
                                                            <td class="text-left"> BTS Current </td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[1]->min ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $load[1]->value ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $load[1]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[1]->scale ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="btscur_scale" placeholder="Set Scale Factor"></td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; </button></td>
                                                        </form>
                                                        <td class="text-center">
                                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_zerobtscur') ?>">
                                                                <button type="submit" id="sa-success" class="btn btn-success" > Zero </button>
                                                            </form>
                                                        </td>
                                                        <td class="text-center">
                                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_spanbtscur') ?>">
                                                                <button type="submit" id="sa-success" class="btn btn-warning" > Span </button>
                                                            </form>
                                                        </td>
                                                        </tr>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_vsatcur_scale') ?>">
                                                            <td class="text-left"> MW/VSAT Current </td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[2]->min ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $load[2]->value ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $load[2]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[2]->scale ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="vsatcur_scale" placeholder="Set Scale Factor"></td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; </button></td>
                                                        </form>
                                                        <td class="text-center">
                                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_zerovsatcur') ?>">
                                                                <button type="submit" id="sa-success" class="btn btn-success" > Zero </button>
                                                            </form>
                                                        </td>
                                                        <td class="text-center">
                                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_spanvsatcur') ?>">
                                                                <button type="submit" id="sa-success" class="btn btn-warning" > Span </button>
                                                            </form>
                                                        </td>
                                                        </tr>

                                                </tbody><!-- end tbody -->
                                                
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
                        
                        <div class="col-xxl-8" id="io">
                            <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">I/O Settings</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">

                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 8%;" class="text-left">Channel</th>
                                                        <th scope="col" style="width: 8%;" class="text-left">Status Alarm</th>
                                                        <th scope="col" style="width: 8%;" class="text-left">Status State</th>
                                                        <th scope="col" style="width: 8%;" class="text-left">Alarm</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Input State</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_fan') ?>">
                                                            <td class="text-left"> <?php echo $config_di[0]->parameter ?> </td>
                                                            <td class="text-left" id="state_fb"></td>
                                                            <td class="text-left" id="triger_fb"></td>
                                                            <td class="text-center">
                                                                <select class="form-control" name="fan_state">
                                                                <option>Select</option>
                                                                        <option class="option">Enable</option>
                                                                        <option class="option">Disable</option>
                                                                 </select>
                                                            </td>
                                                            <td class="text-center">
                                                                <select class="form-control" name="fan_triger">
                                                                <option>Select</option>
                                                                        <option class="option">Open</option>
                                                                        <option class="option">Close</option>
                                                                 </select>
                                                            </td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_door') ?>">
                                                            <td class="text-left"> <?php echo $config_di[1]->parameter ?> </td>
                                                            <td class="text-left" id="door_state_fb"></td>
                                                            <td class="text-left" id="door_triger_fb"></td>
                                                            <td class="text-center">
                                                            <select class="form-control" name="door_state">
                                                                <option>Select</option>
                                                                        <option class="option">Enable</option>
                                                                        <option class="option">Disable</option>
                                                                 </select>
                                                            </td>
                                                            <td class="text-center">
                                                            <select class="form-control" name="door_triger">
                                                                <option>Select</option>
                                                                        <option class="option">Open</option>
                                                                        <option class="option">Close</option>
                                                                 </select>
                                                            </td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>

                                                </tbody><!-- end tbody -->
                                                
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                                        </div>
                            </div><!-- end card -->
                        </div><!-- end col -->
                        
                        <div class="col-xxl-8" id="lvd_refresh">
                            <div class="card card-height-100">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">LVD Setpoint Settings</h4>
                                </div>
                            <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">

                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 8%;" class="text-left">Channel</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Disconnect Voltage Value</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Reconnect Voltage Value</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">LVD Status</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Disconnect Voltage</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Reconnect Voltage</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Unit</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">LVD Enable</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Action</th>
                                                        <!-- <th scope="col" style="width: 8%;" class="text-center">Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_lvd_vsat') ?>">
                                                            <td class="text-left"> <?php echo $config_lvd[0]->parameter ?> </td>
                                                            <td class="text-center"><input id="lvd_vsat_disconnect_value" type="number" name="lvd_vsat_disconnect_value" value="<?php echo $config_lvd[0]->disconnect_fb ?>" class="form-control" placeholder="" readonly></td>
                                                            <td class="text-center"><input id="lvd_vsat_reconnect_value" type="number" name="lvd_vsat_reconnect_value" value="<?php echo $config_lvd[0]->reconnect_fb ?>" class="form-control" placeholder="" readonly></td>
                                                            <td class="text-left" id="lvd_vsat_enable"> <?php echo $config_lvd[0]->state_fb ?> </td>
                                                            <td class="text-center"><input type="number" name="lvd_vsat_disconnect" class="form-control" id="nameInput" placeholder=""></td>
                                                            <td class="text-center"><input type="number" name="lvd_vsat_reconnect" class="form-control" id="nameInput" placeholder=""></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $config_lvd[0]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center">
                                                            <select class="form-control" name="lvd_vsat_state">
                                                                <option>Select</option>
                                                                        <option class="option">Enable</option>
                                                                        <option class="option">Disable</option>
                                                                 </select>
                                                            </td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp;</button></td>
                                                        </form>
                                                        </tr>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_lvd_bts') ?>">
                                                            <td class="text-left"> <?php echo $config_lvd[1]->parameter ?> </td>
                                                            <td class="text-center"><input id="lvd_bts_disconnect_value" type="number" name="lvd_bts_disconnect_value" value="<?php echo $config_lvd[1]->disconnect_fb ?>" class="form-control" placeholder="" readonly></td>
                                                            <td class="text-center"><input id="lvd_bts_reconnect_value" type="number" name="lvd_bts_reconnect_value" value="<?php echo $config_lvd[1]->reconnect_fb ?>" class="form-control" placeholder="" readonly></td>
                                                            <td class="text-left" id="lvd_bts_enable"> <?php echo $config_lvd[1]->state_fb ?> </td>
                                                            <td class="text-center"><input type="number" name="lvd_bts_disconnect" class="form-control" id="nameInput" placeholder=""></td>
                                                            <td class="text-center"><input type="number" name="lvd_bts_reconnect" class="form-control" id="nameInput" placeholder=""></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $config_lvd[1]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center">
                                                            <select class="form-control" name="lvd_bts_state">
                                                                <option>Select</option>
                                                                        <option class="option">Enable</option>
                                                                        <option class="option">Disable</option>
                                                                 </select>
                                                            </td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp;</button></td>
                                                        </form>
                                                        </tr>

                                                </tbody><!-- end tbody -->
                                                
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                                </div>
                            </div><!-- end card -->
                        </div><!-- end col -->


                    </div><!-- end row -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?= $this->include('partials/footer') ?>
            <script src="/assets/js/jquery-3.6.0.min.js"></script>
        
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

<script>
function requestData() {
$.ajax({
    type: "GET",
    url: '<?php echo site_url() . 'data_io' ?>',
    success: function(data){
        response = $.parseJSON( data );  
        $("#state_fb").text(response[0]['state_fb']);
        $("#triger_fb").text(response[0]['triger_fb']);
        $("#door_state_fb").text(response[1]['state_fb']);
        $("#door_triger_fb").text(response[1]['triger_fb']);
    },
})
$.ajax({
    type: "GET",
    url: '<?php echo site_url() . 'data_lvd' ?>',
    success: function(data){
        response = $.parseJSON( data );  
        $("#lvd_vsat_disconnect_value").val(response[0]['disconnect']);
        $("#lvd_vsat_disconnect_value").val(response[1]['disconnect']);
        $("#lvd_bts_reconnect_value").val(response[0]['reconnect']);
        $("#lvd_bts_reconnect_value").val(response[1]['reconnect']);
        $("#lvd_vsat_enable").text(response[0]['state_fb']);
        $("#lvd_bts_enable").text(response[1]['state_fb']);
    },
})
$.ajax({
    type: "GET",
    url: '<?php echo site_url() . 'data_mc' ?>',
    success: function(data){
        response = $.parseJSON( data );  
        $("#busvol_value").val(response[0]['max']);
        $("#btscur_value").val(response[3]['max']);
        $("#mwvsatcur_value").val(response[4]['max']);
    },
})    
};

requestData();
                                       
setInterval(requestData, (2000));
</script>