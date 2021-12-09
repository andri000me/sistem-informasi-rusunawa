<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Daftar Eks-Penghuni<?php //echo $halaman ?></div>
            <a class="btn btn-success btn-xls" href="<?php echo base_url('daftar-penghuni-cetak'); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cetak Daftar Penghuni"> XLS
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
                        <th class="text-center">No. HP</th>
                        <th class="text-center">Alamat Asal</th>
                        <th class="text-center">Nama Ortu</th>
                        <th class="text-center">No. HP Ortu</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($penghuni as $penghuni){ ?>
                    <tr>
                        <td class="text-center"><?php echo $no++ ?></td>
                        <td class="text-center"><?php echo $penghuni->no_kamar ?></td>
                        <td><?php echo $penghuni->nama ?></td>
                        <td><?php echo $penghuni->no ?></td>
                        <td><?php echo $penghuni->alamat ?></td>
                        <td><?php echo $penghuni->nama_ortu ?></td>
                        <td><?php echo $penghuni->no_ortu ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-success active detail-penghuni" id="<?php echo $penghuni->id ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Data Lengkap">
                                <span class="fa fa-info-circle"></span>
                            </a>
                            <a class="btn btn-sm btn-success active riwayat-bayar" id="<?php echo $penghuni->id ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Data Pembayaran" style="width:10px;">
                                <span class="fa fa-dollar"></span>
                            </a>
                            <a class="btn btn-sm btn-info active edit-huni" href="<?php echo base_url('edit-penghuni/'.$penghuni->id) ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah Data">
                                <span class="fa fa-pencil"></span>
                            </a>
                            <a class="btn btn-sm btn-danger active hapus-penghuni" id="<?php echo $penghuni->id ?>"  data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus Data">
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
