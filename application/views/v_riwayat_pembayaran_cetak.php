            <!-- START PAGE CONTENT-->
            <?php
            $tanggal = (date('d-m-Y'))."_".date('H-i-s');
            header("Content-type: application/vnd-ms-excel");
            header("Content-Disposition: attachment; filename=Riwayat_Pembayaran_".$tanggal.".xls");
            ?>
                        <table>
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">No. Kamar</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Tanggal Pembayaran</th>
                                    <th class="text-center">Jumlah Harus Dibayar</th>
                                    <th class="text-center">Nominal Pembayaran</th>
                                    <th class="text-center">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($pembayaran as $pembayaran){ ?>
                                <tr>
                                    <td class="text-center"><?php echo "a"; cetak($no++); ?></td>
                                    <td class="text-center"><?php echo $pembayaran->no_kamar ?></td>
                                    <td><?php echo $pembayaran->nama ?></td>
                                    <td class="text-center"><?php echo $pembayaran->tgl_bayar ?></td>
                                    <td class="text-center"><?php echo 'Rp'.number_format($pembayaran->biaya, 0, ',', '.') ?></td>
                                    <td class="text-center"><?php echo 'Rp'.number_format($pembayaran->bayar, 0, ',', '.') ?></td>
                                    <td><?php echo $pembayaran->ket ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

            <!-- END PAGE CONTENT-->