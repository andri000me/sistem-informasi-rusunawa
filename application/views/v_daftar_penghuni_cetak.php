            <!-- START PAGE CONTENT-->
            <?php
            $tanggal = (date('d-m-Y'))."_".date('H-i-s');
            header("Content-type: application/vnd-ms-excel");
            
            if ($judul_halaman=="Daftar Penghuni"){
                header("Content-Disposition: attachment; filename=Daftar_Penghuni_".$tanggal.".xls");
            }
            else if ($judul_halaman=="Daftar Eks-Penghuni"){
                header("Content-Disposition: attachment; filename=Daftar_Eks_Penghuni_".$tanggal.".xls");
            }
            else{
                $cetak = "#";
                //woii lari kemana lah ini kode T_T
            }
            ?>
            
            <table>
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 24.5px">No.</th>
                                    <th class="text-center">No. Kamar</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">No. HP</th>
                                    <th class="text-center">Prodi</th>
                                    <th class="text-center">Masa Huni</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($penghuni as $penghuni){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $penghuni->no_kamar ?></td>
                                    <td><?php echo $penghuni->nama ?></td>
                                    <td class="text-center"><?php echo $penghuni->no ?></td>
                                    <td><?php echo $penghuni->nama_prodi ?></td>
                                    <td class="text-center"><?php echo date('M Y', strtotime($penghuni->tgl_masuk)).' - '.date('M Y', strtotime($penghuni->tgl_keluar)) ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            <!-- END PAGE CONTENT-->