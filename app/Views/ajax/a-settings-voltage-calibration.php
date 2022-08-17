<div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Voltage Measurement Calibration</h4>
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
                                            <div class="col-lg-1 d-flex" style="padding-bottom:1%">
                                                <input type="number" class="form-control" value="<?php echo $config_load[0]->scale ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-6 d-flex" style="padding-bottom:1%">
                                                <input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="busvol_scale" placeholder="Set Scale Factor">
                                                <button type="submit" style="margin-left:20px ;" id="sa-success" class="d-flex btn btn-primary" > Set </button>
                                            </form>
                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_zerobusvol') ?>">
                                                <button type="submit" style="margin-left:20px ;" id="sa-success" class="d-flex btn btn-success" > Zero </button>
                                            </form>
                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_spanbusvol') ?>">
                                                <button type="submit" style="margin-left:20px ;" id="sa-success" class=" d-flex btn btn-warning" > Span </button>
                                            </form>
                                            </div>
                                        </div>
                                    
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
                                            <div class="col-lg-1 d-flex" style="padding-bottom:1%">
                                                <input type="number" class="form-control" value="<?php echo $config_load[1]->scale ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-6 d-flex" style="padding-bottom:1%">
                                                <input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="busvol_scale" placeholder="Set Scale Factor">
                                                <button type="submit" style="margin-left:20px ;" id="sa-success" class="d-flex btn btn-primary" > Set </button>
                                            </form>
                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_zerobtscur') ?>">
                                                <button type="submit" style="margin-left:20px ;" id="sa-success" class="d-flex btn btn-success" > Zero </button>
                                            </form>
                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_spanbtscur') ?>">
                                                <button type="submit" style="margin-left:20px ;" id="sa-success" class=" d-flex btn btn-warning" > Span </button>
                                            </form>
                                            </div>
                                        </div>
                                        
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
                                            <div class="col-lg-1 d-flex" style="padding-bottom:1%">
                                                <input type="number" class="form-control" value="<?php echo $config_load[2]->scale ?>" id="nameInput" placeholder="" readonly>
                                            </div>
                                            <div class="col-lg-6 d-flex" style="padding-bottom:1%">
                                                <input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="busvol_scale" placeholder="Set Scale Factor">
                                                <button type="submit" style="margin-left:20px ;" id="sa-success" class="d-flex btn btn-primary" > Set </button>
                                            </form>
                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_zerovsatcur') ?>">
                                                <button type="submit" style="margin-left:20px ;" id="sa-success" class="d-flex btn btn-success" > Zero </button>
                                            </form>
                                            <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/get_data_spanvsatcur') ?>">
                                                <button type="submit" style="margin-left:20px ;" id="sa-success" class=" d-flex btn btn-warning" > Span </button>
                                            </form>
                                            </div>
                                        </div>
                                        </div>
                                </div><!-- end cardbody -->