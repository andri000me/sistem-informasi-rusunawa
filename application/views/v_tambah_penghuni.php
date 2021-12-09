            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Tambah Penghuni</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="<?php echo base_url('aksi-tambah-penghuni') ?>" method="post">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Kamar</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no_kamar" placeholder="No. Kamar" value="<?php echo $no_kamar ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga Kamar per Bulan</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="harga_kamar" placeholder="Harga Kamar" value="<?php echo $harga_kamar->harga ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Isi Kamar</label>
                                <div class="col-sm-3" style="padding-top: 5px">
                                    <label class="ui-radio ui-radio-inline ui-radio-primary">
                                        <input type="radio" name="isi_kamar" value="2" required <?php if (strpos($status_kamar, 'terisi1') !== false) echo 'checked' ?>>
                                        <span class="input-span"></span>Berdua
                                    </label>
                                </div>
                                <div class="col-sm-6" style="padding-top: 5px">
                                    <label class="ui-radio ui-radio-inline ui-radio-primary">
                                        <input type="radio" name="isi_kamar" value="1" <?php if (strpos($status_kamar, 'terisi1') !== false) echo 'disabled' ?>>
                                        <span class="input-span"></span>Sendiri
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Penghuni" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nim" placeholder="NIM Penghuni" maxlength="50" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fakultas</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2_fakultas" name="id_fakultas" id="fakultas" required>
                                        <option></option>
                                        <?php foreach ($fakultas as $fakultas){ ?>
                                        <option value="<?php echo $fakultas->id_fakultas ?>"><?php echo $fakultas->nama_fakultas ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Prodi</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2_prodi" name="id_prodi" id="prodi" required>
                                        <option disabled>Silakan Pilih Fakultas Terlebih Dahulu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir Penghuni" maxlength="100" oninput="this.value = this.value.replace(/[^a-z A-Z ']/g, '');">
                                </div>
                            </div>
                            <div class="form-group row" id="tgl_lahir">
                                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9 input-group date">
                                    <input class="form-control" type="text" placeholder="Pilih Tanggal Lahir" name="tgl_lahir" id="form_tgl_lahir" autocomplete="off">
                                    <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2_agama" name="agama" id="agama" required>
                                        <option></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Kristen Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="agama_lainnya" style="display: none">
                                <div class="col-sm-9 ml-sm-auto">
                                    <input class="form-control" type="text" name="agama_lainnya" placeholder="Agama Penghuni" maxlength="50" oninput="this.value = this.value.replace(/[^a-z A-Z]/g, '');">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Asal</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="alamat" placeholder="Alamat Asal Penghuni" maxlength="200" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Telp/HP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no" placeholder="No. Telp/HP Penghuni" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 +]/g, '');" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Orang Tua</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nama_ortu" placeholder="Nama Orang Tua Penghuni" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pekerjaan Orang Tua</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="pekerjaan_ortu" placeholder="Pekerjaan Orang Tua Penghuni" maxlength="200" oninput="this.value = this.value.replace(/[^a-z A-Z ' .]/g, '');">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="alamat_ortu" placeholder="Alamat Orang Tua Penghuni" maxlength="200">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Telp/HP Orang Tua</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no_ortu" placeholder="No Telp/HP Orang Tua Penghuni" maxlength="30" oninput="this.value = this.value.replace(/[^0-9 +]/g, '');">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-3" style="padding-top: 5px">
                                    <label class="ui-radio ui-radio-inline ui-radio-primary">
                                        <input type="radio" name="kategori" value="Non-Bidikmisi" required>
                                        <span class="input-span"></span>Non-Bidikmisi
                                    </label>
                                </div>
                                <div class="col-sm-6" style="padding-top: 5px">
                                    <label class="ui-radio ui-radio-inline ui-radio-primary">
                                        <input type="radio" name="kategori" value="Bidikmisi">
                                        <span class="input-span"></span>Bidikmisi
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row" id="tgl_huni">
                                <label class="col-sm-3 col-form-label">Tanggal Huni</label>
                                <div class="col-sm-9 input-daterange input-group" id="datepicker">
                                    <input class="input-sm form-control" type="text" name="tgl_masuk" id="tgl_masuk" placeholder="Pilih Tanggal Masuk" autocomplete="off" required>
                                    <span class="input-group-addon p-l-10 p-r-10">s.d.</span>
                                    <input class="input-sm form-control" type="text" name="tgl_keluar" id="tgl_keluar" placeholder="Pilih Tanggal Keluar" value="<?php echo '31'.'-'.'07'.'-'.date('Y'); ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Masa Huni</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2_masa_huni" name="masa_huni" id="masa_huni" required>
                                        <option></option>
                                        <option value="1">1 Bulan</option>
                                        <option value="2">2 Bulan</option>
                                        <option value="3">3 Bulan</option>
                                        <option value="4">4 Bulan</option>
                                        <option value="5">5 Bulan</option>
                                        <option value="6">6 Bulan</option>
                                        <option value="7">7 Bulan</option>
                                        <option value="8">8 Bulan</option>
                                        <option value="9">9 Bulan</option>
                                        <option value="10">10 Bulan</option>
                                        <option value="11">11 Bulan</option>
                                        <option value="12">12 Bulan (1 Tahun)</option>
                                        <option value="24">24 Bulan (2 Tahun)</option>
                                        <option value="36">36 Bulan (3 Tahun)</option>
                                        <option value="48">48 Bulan (4 Tahun)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga Sewa Kamar</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="biaya" id="biaya" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 ml-sm-auto">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <button class="btn btn-danger" type="button" onclick="window.history.back();">Batal</button>
                                    <button class="btn btn-outline-default" type="reset" value="Reset">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->