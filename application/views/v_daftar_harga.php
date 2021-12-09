            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Daftar Harga Kamar<?php //echo $halaman ?></div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="tabel-responsif" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">Gedung</th>
                                    <th class="text-center">Lantai</th>
                                    <th class="text-center">Harga per Bulan</th>
                                    <th class="text-center">Harga per Tahun</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($daftar_harga as $daftar_harga){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center">Gedung <?php echo $daftar_harga->gedung ?></td>
                                    <td class="text-center">Lantai <?php echo $daftar_harga->lantai ?></td>
                                    <td class="text-center">Rp<?php echo number_format($daftar_harga->harga, 0, ',', '.') ?></td>
                                    <td class="text-center">Rp<?php echo number_format($daftar_harga->harga*12, 0, ',', '.') ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-info active edit-harga" id="<?php echo $daftar_harga->lantai ?>" data-original-title="Ubah Harga" href="<?php echo base_url('edit-harga-kamar/').$daftar_harga->lantai ?>" >
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->