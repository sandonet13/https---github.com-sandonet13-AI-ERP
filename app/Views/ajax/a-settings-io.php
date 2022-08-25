                 <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">I/O Settings</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">

                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 8%;" class="text-left">Channel</th>
                                                        <th scope="col" style="width: 8%;" class="text-left">Alarm</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Input State</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_fan') ?>">
                                                            <td class="text-left"> <?php echo $config_di[0]->parameter ?> </td>
                                                            <td class="text-center">
                                                                <select class="form-control" name="fan_state">
                                                                        <option value="tes</option>
                                                                        <option value="<?php echo $config_di[0]->state_fb ?>"><?php echo $config_di[0]->state_fb ?></option>
                                                                        <?php
                                                                            if ($config_di[0]->state_fb == 'Enable'){ echo '<option value="Disable">Disable</option>';}
                                                                            else{echo '<option value="Enable">Enable</option>';}
                                                                            ?>
                                                                 </select>
                                                            </td>
                                                            <td class="text-center">
                                                                <select class="form-control" name="fan_triger">
                                                                    <option value="<?php echo $config_di[0]->triger_fb ?>"><?php echo $config_di[0]->triger_fb ?></option>
                                                                    <?php
                                                                        if ($config_di[0]->triger_fb == 'Open'){ echo '<option value="Close">Close</option>';}
                                                                        else{echo '<option value="Open">Open</option>';}
                                                                        ?>
                                                                </select>
                                                            </td>
                                                            <td class="text-center"><button type="submit" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_door') ?>">
                                                            <td class="text-left"> <?php echo $config_di[1]->parameter ?> </td>
                                                            <td class="text-center">
                                                                <select class="form-control" name="door_state">
                                                                        <option value="tes</option>
                                                                        <option value="<?php echo $config_di[1]->state_fb ?>"><?php echo $config_di[1]->state_fb ?></option>
                                                                        <?php
                                                                            if ($config_di[1]->state_fb == 'Enable'){ echo '<option value="Disable">Disable</option>';}
                                                                            else{echo '<option value="Enable">Enable</option>';}
                                                                            ?>
                                                                </select>
                                                            </td>
                                                            <td class="text-center">
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
                                                            </td>
                                                            <td class="text-center"><button type="submit" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>

                                                </tbody><!-- end tbody -->
                                                
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                    </div></div>