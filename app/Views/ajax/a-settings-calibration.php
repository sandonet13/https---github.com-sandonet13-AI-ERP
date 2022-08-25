                        <!-- <div class="card card-height-100"> -->
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
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $load[0]->value ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $load[0]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[0]->scale ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="busvol_scale" placeholder="Set Scale Factor"></td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_btscur_scale') ?>">
                                                            <td class="text-left"> BTS Current </td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $load[1]->value ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $load[1]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[1]->scale ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="btscur_scale" placeholder="Set Scale Factor"></td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>
                                                        <tr>
                                                        <form class="bs-example form-horizontal" method="post" action="<?php echo site_url('/update_vsatcur_scale') ?>">
                                                            <td class="text-left"> MW/VSAT Current </td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $load[2]->value ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="text" class="form-control" value="<?php echo $load[2]->unit ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" class="form-control" value="<?php echo $config_load[2]->scale ?>" id="nameInput" placeholder="" readonly></td>
                                                            <td class="text-center"><input type="number" min="0" max="2" step="0.01" class="form-control" id="nameInput" name="vsatcur_scale" placeholder="Set Scale Factor"></td>
                                                            <td class="text-center"><button type="submit" id="sa-success" class="btn btn-primary"> Set&nbsp; <i class="ri-check-line"></i> </button></td>
                                                        </form>
                                                        </tr>

                                                </tbody><!-- end tbody -->
                                                
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
                    </div>
                    <!-- </div> -->