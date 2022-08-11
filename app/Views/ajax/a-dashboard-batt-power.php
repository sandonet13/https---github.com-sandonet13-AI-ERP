                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                  <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-battery-line display-6 text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="card-title mb-0">Battery Power</span></h2>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                        <?php foreach ($batt as $batt_data) { ?>
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13"><?php echo $batt_data->name; ?></h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><?php echo $batt_data->value; ?>&nbsp;<?php echo $batt_data->unit; ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        <?php } ?>
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->