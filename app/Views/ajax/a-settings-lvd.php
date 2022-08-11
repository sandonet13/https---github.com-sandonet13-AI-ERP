                         <!-- <div class="card card-height-100"> -->
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
                            <!-- </div> -->