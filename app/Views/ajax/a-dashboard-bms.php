                                    <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 12%;">Parameter</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack1</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack2</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack3</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack4</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack5</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack6</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack7</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack8</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack9</th>
                                                        <th scope="col" style="width: 8%;" class="text-center">Pack10</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $bms1) { ?>
                                                        <tr>
                                                            <td><?php echo $bms1->name ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack1 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack2 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack3 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack4 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack5 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack6 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack7 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack8 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack9 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                            <td class="text-center"> <?php echo $bms1->pack10 ?>&nbsp; <?= $bms1->unit; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div><!-- end table responsive -->
