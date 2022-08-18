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