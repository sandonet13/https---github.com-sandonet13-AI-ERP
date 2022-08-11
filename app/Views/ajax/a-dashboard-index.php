<div class="page-content">
    <div class="container-fluid">
        <?php echo view('partials/page-title', array('pagetitle' => 'Dashboards', 'title' => 'Dashboard')); ?>
        <div id="scc" class="row">
            <!-- ================== Measurement ====================== -->
            <div class="col-xxl-3 ">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Power</h4>
                    </div><!-- end card header -->
                    <div class="card-body"><br>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="fw-semibold text-muted mb-0">PV Power</p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span>0</span>Watt</h2>
                            </div>
                            <div>
                                <span class="">
                                    <img src="/assets/images/svg/crypto-icons/rddspm_solar.svg" width="90px" height="90px">
                                </span>
                            </div>
                        </div> <br><!-- end col -->
                        <div class="mt-3">
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:200px ;">PV Power</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <?php foreach ($ds1 as $data) : ?>
                                        <div class="flex-grow-1">
                                            <span class="text-muted fw-semibold fs-13 text-end"><?= $data->value; ?> <i></i></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:190px ;">Load Power</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">230 <i>Watt</i></span>
                                    </div>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:170px ;">Battery Power</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">15870hrs</span>
                                    </div>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:190px ;">Test</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">15870hrs</span>
                                    </div>
                                </div>
                            </div><br><!-- end -->
                            <a href="" class="text-decoration-underline text-end">See details</a>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <!-- ============================== End Measurement =============================== -->

            <!-- ================== Solar Charger Controller ====================== -->
            <div class="col-xxl-3 ">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Solar Charger Controller</h4>
                    </div><!-- end card header -->

                    <div class="card-body"><br>
                        <div class="d-flex justify-content-between">
                            <div>
                                <?php foreach ($ds1 as $data) : ?>
                                    <p class="fw-semibold text-muted mb-0">PV Power</p>
                                    <h2 class="mt-4 ff-secondary fw-semibold"><span><?= $data->value; ?></span> <?= $data->unit; ?></h2>
                                <?php endforeach; ?>
                            </div>
                            <div>
                                <span class="">
                                    <img src="/assets/images/svg/crypto-icons/rddspm_solar.svg" width="90px" height="90px">
                                </span>
                            </div>
                        </div> <br><!-- end col -->

                        <div class="mt-3">
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:200px ;">Voltage IN </span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <?php foreach ($ds1 as $data) : ?>
                                        <div class="flex-grow-1">
                                            <span class="text-muted fw-semibold fs-13 text-end"><?= $data->value; ?> &nbsp; <?= $data->unit; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:190px ;">Voltage OUT </span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <?php foreach ($ds2 as $data) : ?>
                                        <div class="flex-grow-1">
                                            <span class="text-muted fw-semibold fs-13 text-end"><?= $data->value; ?> &nbsp; <?= $data->unit; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:170px ;">Current IN</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <?php foreach ($ds3 as $data) : ?>
                                        <div class="flex-grow-1">
                                            <span class="text-muted fw-semibold fs-13 text-end"><?= $data->value; ?> &nbsp; <?= $data->unit; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:190px ;">Current OUT</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <?php foreach ($ds4 as $data) : ?>
                                        <div class="flex-grow-1">
                                            <span class="text-muted fw-semibold fs-13 text-end"><?= $data->value; ?> &nbsp; <?= $data->unit; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div><br><!-- end -->
                            <a href="/dashboard-scc-1" class="text-decoration-underline text-end">See details</a>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <!-- ============================== End Solar Charger Controller =============================== -->

            <!-- ================== I/O ====================== -->
            <div class="col-xxl-3 ">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Input Output</h4>
                    </div><!-- end card header -->

                    <div class="card-body"><br>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="fw-semibold text-muted mb-0">PV Power</p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span>0</span>&nbsp;Watt</h2>
                            </div>
                            <div>
                                <span class="">
                                    <img src="/assets/images/svg/crypto-icons/rddspm_solar.svg" width="90px" height="90px">
                                </span>
                            </div>
                        </div> <br><!-- end col -->

                        <div class="mt-3">
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:200px ;">PV Power</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">200 <i>Watt</i></span>
                                    </div>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:190px ;">Load Power</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">230 <i>Watt</i></span>
                                    </div>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:170px ;">Battery Power</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">15870hrs</span>
                                    </div>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:190px ;">Test</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">15870hrs</span>
                                    </div>
                                </div>
                            </div><br><!-- end -->
                            <a href="" class="text-decoration-underline text-end">See details</a>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <!-- ============================== End I/O =============================== -->

            <!-- ================== Battery Monitoring ====================== -->
            <div class="col-xxl-3 ">
                <div class="card card-height-100">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Battery Monitoring</h4>
                    </div><!-- end card header -->

                    <div class="card-body"><br>
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="fw-semibold text-muted mb-0">PV Power</p>
                                <h2 class="mt-4 ff-secondary fw-semibold"><span>0</span>&nbsp;Watt</h2>
                            </div>
                            <div>
                                <span class="">
                                    <img src="/assets/images/svg/crypto-icons/rddspm_solar.svg" width="90px" height="90px">
                                </span>
                            </div>
                        </div> <br><!-- end col -->

                        <div class="mt-3">
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:200px ;">PV Power</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">200 <i>Watt</i></span>
                                    </div>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:190px ;">Load Power</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">230 <i>Watt</i></span>
                                    </div>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:170px ;">Battery Power</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">15870hrs</span>
                                    </div>
                                </div>
                            </div><!-- end -->
                            <div class="d-flex justify-content-between border-bottom border-bottom-dashed py-2">
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class=" fw-semibold fs-13" style="margin-right:190px ;">Test</span>
                                    </div>
                                </div>
                                <div class="d-flex mt-2">
                                    <div class="flex-grow-1">
                                        <span class="text-muted fw-semibold fs-13 text-end">15870hrs</span>
                                    </div>
                                </div>
                            </div><br><!-- end -->
                            <a href="" class="text-decoration-underline text-end">See details</a>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <!-- ============================== End Battery Monitoring =============================== -->
        </div>
        <!-- container-fluid -->
    </div>
</div>