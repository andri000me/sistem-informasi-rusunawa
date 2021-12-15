            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"><?php echo $judul_halaman ?></div>
                        <a
                            class="btn btn-success btn-baru" href="<?php echo base_url('tambah-tipe'); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tambah Tipe Baru">
                                <i class="fa fa-plus"></i>
                                Baru
                        </a>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="tabel-responsif" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">Tipe Kamar</th>
                                    <th class="text-center">Harga Sewa (Sendiri)</th>
                                    <th class="text-center">Harga Sewa (Berdua)</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($tipe as $tipe){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $tipe->tipe_kamar ?></td>
                                    <td class="text-center">Rp<?php echo number_format($tipe->harga, 0, ',', '.') ?></td>
                                    <td class="text-center">Rp<?php echo number_format($tipe->harga/2, 0, ',', '.') ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-info active edit-tipe" id="<?php echo $tipe->id_tipe ?>" data-original-title="Ubah" href="<?php echo base_url('edit-tipe/').$tipe->id_tipe ?>" >
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                        <a class="btn btn-sm btn-danger active hapus-tipe" id="<?php echo $tipe->id_tipe ?>"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus Tipe">
                                            <span class="fa fa-trash"></span>
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