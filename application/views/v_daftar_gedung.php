            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"><?php echo $judul_halaman ?></div>
                        <a
                            class="btn btn-success btn-baru" href="<?php echo base_url('tambah-gedung'); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tambah Gedung Baru">
                                <i class="fa fa-plus"></i>
                                Baru
                        </a>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="tabel-responsif" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">Kode Gedung</th>
                                    <th class="text-center">Nama Gedung</th>
                                    <th class="text-center">Jumlah Kamar</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($gedung as $gedung){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $gedung->gedung ?></td>
                                    <td class="text-center"><?php echo $gedung->nama_gedung ?></td>
                                    <td class="text-center"><?php echo $gedung->jml_kamar ?></td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-info active edit-gedung" id="<?php echo $gedung->gedung ?>" data-original-title="Ubah Gedung" href="<?php echo base_url('edit-gedung/').$gedung->gedung ?>" >
                                            <span class="fa fa-pencil"></span>
                                        </a>
                                        <a class="btn btn-sm btn-danger active hapus-gedung" id="<?php echo $gedung->gedung ?>"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus Gedung">
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