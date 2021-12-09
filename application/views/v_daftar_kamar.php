            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Daftar Kamar<?php //echo $halaman ?></div>
                        <a
                          class="btn btn-success btn-xls" href="<?php echo base_url('daftar-kamar-cetak'); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cetak Daftar Kamar"> XLS
                              <i class="fa fa-print"></i>
                        </a>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="tabel-responsif" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">Gedung</th>
                                    <th class="text-center">Lantai</th>
                                    <th class="text-center">No. Kamar</th>
                                    <th class="text-center">Status Kamar</th>
                                    <th class="text-center">Piutang</th>
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
                                        switch ($kamar->status){
                                            case 'sendiri':
                                                echo '<span class="badge badge-success">Terisi 1 Penghuni Sendiri</span>';
                                            break;
                                            case 'terisi2':
                                                echo '<span class="badge badge-danger">Terisi 2 Penghuni</span>';
                                            break;
                                            case 'terisi1':
                                                echo '<span class="badge badge-warning">Terisi 1 Penghuni</span>';
                                            break;
                                            case 'kosong':
                                                echo '<span class="badge badge-default">Belum Berpenghuni</span>';
                                            break;
                                        }
                                        ?>
                                    </td>
                                    <td class="text-center">
                                        <?php
                                        if ($kamar->piutang == 0 and $kamar->status == 'kosong') echo '-';
                                        else if ($kamar->piutang == 0 and $kamar->status != 'kosong') echo '<span class="badge badge-info">Sudah Lunas</span>';
                                        else echo 'Rp'.number_format($kamar->piutang, 0, ',', '.');
                                        ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
