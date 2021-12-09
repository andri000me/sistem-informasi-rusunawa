            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Laporan Piutang<?php //echo $halaman ?></div>
                        <button class="btn btn-success btn-xls" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cetak Laporan Keuangan"> XLS
                          <i class="fa fa-print"></i>
                        </button>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="tabel-penghuni" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">No. Kamar</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">NIM</th>
                                    <th class="text-center">No. HP</th>
                                    <th class="text-center">Nama Ortu</th>
                                    <th class="text-center">No. HP Ortu</th>
                                    <th class="text-center">Jumlah Piutang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($penghuni as $penghuni){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $penghuni->no_kamar ?></td>
                                    <td class="text-center"><?php echo $penghuni->nama ?></td>
                                    <td class="text-center"><?php echo $penghuni->nim ?></td>
                                    <td class="text-center"><?php echo $penghuni->no ?></td>
                                    <td class="text-center"><?php echo $penghuni->nama_ortu ?></td>
                                    <td class="text-center"><?php echo $penghuni->no_ortu ?></td>
                                    <td class="text-center"><?php echo $penghuni->no_ortu ?></td>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
