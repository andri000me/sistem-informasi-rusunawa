            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Laporan Keuangan<?php //echo $halaman ?></div>
                            <a class="btn btn-success btn-xls" href="<?php echo base_url('laporan-keuangan-cetak') ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cetak Daftar Piutang"> XLS
                                <i class="fa fa-print"></i>
                            </a>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="tabel-responsif" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">No. Kamar</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Masa Huni</th>
                                    <th class="text-center">Jumlah Harus Dibayar</th>
                                    <th class="text-center">Jumlah Telah Dibayar</th>
                                    <th class="text-center">Piutang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($keuangan as $keuangan){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $keuangan->no_kamar ?></td>
                                    <td><?php echo $keuangan->nama ?></td>
                                    <td class="text-center"><?php echo date('M Y', strtotime($keuangan->tgl_masuk)).' - '.date('M Y', strtotime($keuangan->tgl_keluar)) ?></td>
                                    <td class="text-center"><?php echo 'Rp'.number_format($keuangan->biaya, 0, ',', '.') ?></td>
                                    <td class="text-center"><?php echo 'Rp'.number_format($keuangan->bayar, 0, ',', '.') ?></td>
                                    <td class="text-center"><?php echo $keuangan->piutang == 0 ? '<span class="badge badge-info">Sudah Lunas</span>' : 'Rp'.number_format($keuangan->piutang, 0, ',', '.') ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
