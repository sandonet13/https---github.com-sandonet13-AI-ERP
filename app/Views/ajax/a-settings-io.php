
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Input Output Settings</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_fan') ?>">
                                        <div class="row mb-3">
                                            <div class="col-lg-2">
                                                <label for="nameInput" class="form-label"><?php echo $config_di[0]->parameter ?> </label>
                                            </div>
                                            <div class="col-lg-4 d-flex">
                                            <select class="form-control" name="fan_state">
                                                      <!-- <option value="tes</option> -->
                                                      <option value="<?php echo $config_di[0]->state_fb ?>"><?php echo $config_di[0]->state_fb ?></option>
                                                      <?php
                                                        if ($config_di[0]->state_fb == 'Enable'){ echo '<option value="Disable">Disable</option>';}
                                                        else{echo '<option value="Enable">Enable</option>';}
                                                        ?>
                                            </select>
                                            </div>
                                            <div class="col-lg-4 d-flex">
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
                                            <div class="col-lg-4 d-flex">
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