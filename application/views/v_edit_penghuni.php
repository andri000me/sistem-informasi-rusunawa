            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Penghuni</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <div class="btn-edit-penghuni">
                            <div class="btn-group" data-toggle="buttons">
                                <button class="btn btn-outline-info btn-trans"><i class="fa fa-check active-visible"></i> Transaksi
                                    <input type="radio" name="pilihan" value="transaksi">
                                </button>
                                <button class="btn btn-outline-info btn-pindah"><i class="fa fa-check active-visible"></i> Pindah Kamar
                                    <input type="radio" name="pilihan" value="pk">
                                </button>
                                <button class="btn btn-outline-info btn-edit"><i class="fa fa-check active-visible"></i> Data Diri Penghuni
                                    <input type="radio" name="pilihan" value="typo">
                                </button>
                            </div>
                        </div>
                        <form class="form-horizontal" action="<?php echo base_url('aksi-edit-penghuni') ?>" method="post">
                                <input type="hidden" name="pilihan1" id="pilihan1" value="typo">
                                <input type="hidden" name="id" value="<?php echo $penghuni->id ?>">
                                <input type="hidden" id="piutang_lama" value="<?php echo $penghuni->piutang?>">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">No. Kamar</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="no_kamar_lama"  placeholder="No. Kamar" value="<?php echo $penghuni->no_kamar ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Isi Kamar</label>
                                    <div class="col-sm-3" style="padding-top: 5px">
                                        <label class="ui-radio ui-radio-inline ui-radio-primary">
                                            <input type="radio" name="isi_kamar" value="2" <?php if ($penghuni->isi_kamar == '2') echo 'checked' ?>>
                                            <span class="input-span"></span>Berdua
                                        </label>
                                    </div>
                                    <div class="col-sm-6" style="padding-top: 5px">
                                        <label class="ui-radio ui-radio-inline ui-radio-primary">
                                            <input type="radio" name="isi_kamar" value="1" <?php if ($penghuni->isi_kamar == '1') echo 'checked'; if ($status_kamar == 'terisi2') echo 'disabled' ?>>
                                            <span class="input-span"></span>Sendiri
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Lengkap Penghuni" value="<?php echo $penghuni->nama ?>" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIM</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="nim" id="nim" placeholder="NIM Penghuni" value="<?php echo $penghuni->nim ?>" maxlength="50" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                    </div>
                                </div>
                                <div class="form-group row transaksi">
                                    <label class="col-sm-3 col-form-label">Piutang</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_transaksi" type="text" value="<?php echo 'Rp'.number_format($penghuni->piutang, 0, ',', '.') ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row transaksi">
                                    <label class="col-sm-3 col-form-label">Jumlah Pembayaran</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_transaksi" type="number" name="bayar" placeholder="Masukkan Jumlah Pembayaran" id="bayar_baru" max="1000000000" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="form-group row transaksi" id="tgl_bayar">
                                    <label class="col-sm-3 col-form-label">Tanggal Transaksi</label>
                                    <div class="col-sm-9 input-group date">
                                        <input class="form-control form_transaksi" type="text" name="tgl_bayar" id="form_tgl_bayar" placeholder="Pilih Tanggal Transaksi" value="<?php echo date('d-m-Y') ?>" autocomplete="off">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="form-group row transaksi">
                                    <label class="col-sm-3 col-form-label">Sisa Piutang</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_transaksi" type="text" id="piutang_baru" readonly>
                                    </div>
                                </div>
                                <div class="form-group row transaksi">
                                    <label class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_transaksi" type="text" name="ket" placeholder="Keterangan Pembayaran">
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Status Huni</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name='status' value="<?php echo $penghuni->status ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Fakultas</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2_fakultas form_edit" name="id_fakultas" id="fakultas">
                                            <option></option>
                                            <?php foreach ($fakultas as $fakultas){ ?>
                                            <option value="<?php echo $fakultas->id_fakultas ?>" <?php if ($fakultas->id_fakultas == $penghuni->id_fakultas) echo 'selected' ?>><?php echo $fakultas->nama_fakultas ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Prodi</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2_prodi form_edit" name="id_prodi" id="prodi">
                                            <option></option>
                                            <?php foreach ($prodi as $prodi){ ?>
                                            <option value="<?php echo $prodi->id_prodi ?>" <?php if ($prodi->id_prodi == $penghuni->id_prodi) echo 'selected' ?>><?php echo $prodi->nama_prodi ?></option>
                                            <?php } ?>
                                            <option value="9999" <?php if ($penghuni->id_prodi == '9999') echo 'selected' ?>>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_edit" type="text" name="tempat_lahir" placeholder="Tempat Lahir Penghuni" value="<?php echo $penghuni->tempat_lahir ?>" maxlength="100" oninput="this.value = this.value.replace(/[^a-z A-Z ']/g, '');" required>
                                    </div>
                                </div>
                                <div class="form-group row typo" id="tgl_lahir">
                                    <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9 input-group date">
                                        <input class="form-control form_edit" type="text" name="tgl_lahir" id="form_tgl_lahir" placeholder="Pilih Tanggal Lahir" value="<?php echo $penghuni->tgl_lahir ?>" autocomplete="off">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2_agama form_edit" name="agama" id="agama">
                                            <option></option>
                                            <option value="Islam" <?php if ($penghuni->agama == 'Islam') echo 'selected' ?>>Islam</option>
                                            <option value="Protestan" <?php if ($penghuni->agama == 'Protestan') echo 'selected' ?>>Kristen Protestan</option>
                                            <option value="Katolik" <?php if ($penghuni->agama == 'Katolik') echo 'selected' ?>>Katolik</option>
                                            <option value="Hindu" <?php if ($penghuni->agama == 'Hindu') echo 'selected' ?>>Hindu</option>
                                            <option value="Buddha" <?php if ($penghuni->agama == 'Buddha') echo 'selected' ?>>Buddha</option>
                                            <option value="Konghucu" <?php if ($penghuni->agama == 'Konghucu') echo 'selected' ?>>Konghucu</option>
                                            <option value="other" <?php if ($penghuni->agama != 'Islam' and $penghuni->agama != 'Protestan' and $penghuni->agama != 'Katolik' and $penghuni->agama != 'Hindu' and $penghuni->agama != 'Buddha' and $penghuni->agama != 'Konghucu') echo 'selected' ?>>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row" id="agama_lainnya" <?php if ($penghuni->agama == 'Islam' or $penghuni->agama == 'Protestan' or $penghuni->agama == 'Katolik' or $penghuni->agama == 'Hindu' or $penghuni->agama == 'Buddha' or $penghuni->agama == 'Konghucu') echo 'style="display: none"' ?>>
                                    <div class="col-sm-9 ml-sm-auto">
                                        <input class="form-control" type="text" name="agama_lainnya" placeholder="Agama Penghuni" value="<?php echo $penghuni->agama ?>" maxlength="50" oninput="this.value = this.value.replace(/[^a-z A-Z]/g, '');">
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Alamat Asal</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_edit" type="text" name="alamat" placeholder="Alamat Asal Penghuni" value="<?php echo $penghuni->alamat ?>" maxlength="200">
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">No. Telp/HP</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_edit" type="text" name="no" placeholder="No. Telp/HP Penghuni" value="<?php echo $penghuni->no ?>" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 +]/g, '');">
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Nama Orang Tua</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_edit" type="text" name="nama_ortu" placeholder="Nama Orang Tua Penghuni" value="<?php echo $penghuni->nama_ortu ?>" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');">
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Pekerjaan Orang Tua</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_edit" type="text" name="pekerjaan_ortu" placeholder="Pekerjaan Orang Tua Penghuni" value="<?php echo $penghuni->pekerjaan_ortu ?>" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');">
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_edit" type="text" name="alamat_ortu" placeholder="Alamat Orang Tua Penghuni" value="<?php echo $penghuni->alamat_ortu ?>" maxlength="200">
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">No. Telp/HP Orang Tua</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_edit" type="text" name="no_ortu" placeholder="No Telp/HP Orang Tua Penghuni" value="<?php echo $penghuni->no_ortu ?>" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 +]/g, '');">
                                    </div>
                                </div>
                                <div class="form-group row typo" id="tgl_huni">
                                    <label class="col-sm-3 col-form-label">Masa Huni</label>
                                    <div class="col-sm-9 input-daterange input-group" id="datepicker">
                                        <input class="input-sm form-control form_edit" type="text" name="tgl_masuk" id="tgl_masuk" placeholder="Pilih Tanggal Masuk" value="<?php echo $penghuni->tgl_masuk ?>" autocomplete="off">
                                        <span class="input-group-addon p-l-10 p-r-10">s.d.</span>
                                        <input class="input-sm form-control form_edit" type="text" name="tgl_keluar" id="tgl_keluar" placeholder="Pilih Tanggal Keluar" value="<?php echo $penghuni->tgl_keluar ?>">
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Kategori</label>
                                    <div class="col-sm-3" style="padding-top: 5px">
                                        <label class="ui-radio ui-radio-inline ui-radio-primary">
                                            <input type="radio" name="kategori" value="Non-Bidikmisi" <?php if ($penghuni->kategori == 'Non-Bidikmisi') echo 'checked' ?>>
                                            <span class="input-span"></span>Non-Bidikmisi
                                        </label>
                                    </div>
                                    <div class="col-sm-6" style="padding-top: 5px">
                                        <label class="ui-radio ui-radio-inline ui-radio-primary">
                                            <input type="radio" name="kategori" value="Bidikmisi" <?php if ($penghuni->kategori == 'Bidikmisi') echo 'checked' ?>>
                                            <span class="input-span"></span>Bidikmisi
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row typo">
                                    <label class="col-sm-3 col-form-label">Harga Sewa Kamar</label>
                                    <div class="col-sm-9">
                                        <input class="form-control form_edit" type="text" name="biaya" value="<?php echo $penghuni->biaya ?>">
                                    </div>
                                </div>
                                <div class="form-group row pk">
                                    <label class="col-sm-3 col-form-label">No. Kamar Baru</label>
                                    <div class="col-sm-9">
                                        <select class="form-control select2_kamar form_pindah" name="no_kamar_baru" id="no_kamar" required>
                                            <option></option>
                                            <?php foreach ($kamar as $kamar){ ?>
                                            <option value="<?php echo $kamar->no_kamar ?>" <?php if ($kamar->no_kamar == $penghuni->no_kamar) echo 'disabled' ?>>
                                                <?php
                                                echo $kamar->no_kamar;
                                                switch ($kamar->status){
                                                    case 'terisi1':
                                                        echo ' (Terisi 1 Penghuni)';
                                                    break;
                                                    case 'kosong':
                                                        echo ' (Belum Berpenghuni)';
                                                    break;
                                                }
                                                ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9 ml-sm-auto">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-danger" type="button" onclick="window.history.back()">Batal</button>
                                        <button class="btn btn-outline-default" type="reset" value="Reset">Reset</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
