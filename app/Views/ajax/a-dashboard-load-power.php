                        <div class="col-xl-12">
                            <div class="card crm-widget">
                                <div class="card-body p-0">
                                  <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-base-station-line display-6 text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="card-title mb-0">BTS Power</span></h2>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="row row-cols-xxl-5 row-cols-md-3 row-cols-1 g-0">
                                        <?php foreach ($load as $load_data) { ?>
                                            <div class="col">
                                                <div class="mt-3 mt-md-0 py-4 px-3">
                                                    <h5 class="text-muted text-uppercase fs-13"><?php echo $load_data->name; ?></h5>
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0"><?php echo $load_data->value; ?>&nbsp;<?php echo $load_data->unit; ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end col -->
                                        <?php } ?>
                                    </div><!-- end row -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->