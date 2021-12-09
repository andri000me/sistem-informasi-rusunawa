            <!-- START PAGE CONTENT-->
            <?php
            date_default_timezone_set("Asia/Bangkok");
            $tanggal = (date('d-m-Y'))."_".date('H-i-s');
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Daftar_Kamar_".$tanggal.".xls");
            ?>
                        <table>
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">Gedung</th>
                                    <th class="text-center">Lantai</th>
                                    <th class="text-center">No. Kamar</th>
                                    <th class="text-center">Status Kamar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($kamar as $kamar){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center">Gedung <?php echo $kamar->gedung ?></td>
                                    <td class="text-center">Lantai <?php echo $kamar->lantai ?></td>
                                    <td class="text-center"><?php echo $kamar->no_kamar ?></td>
                                    <td class="text-center">
                                        <?php
                                        if ($kamar->status == 'sendiri') echo '<span class="badge badge-success">Terisi 1 Penghuni Sendiri</span>';
                                        else if ($kamar->status == 'terisi2') echo '<span class="badge badge-danger">Terisi 2 Penghuni</span>';
                                        else if ($kamar->status == 'terisi1') echo '<span class="badge badge-warning">Terisi 1 Penghuni</span>';
                                        else echo '<span class="badge badge-default">Belum Berpenghuni</span>';
                                        ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                   
            <!-- END PAGE CONTENT-->