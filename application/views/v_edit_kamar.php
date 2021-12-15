            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"><?= $judul_halaman ?></div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="<?= base_url('aksi-edit-kamar') ?>" method="post">
                            <input type="hidden" name="no_kamar" value="<?= $kamar->no_kamar ?>">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Gedung</label>
                                <div class="col-sm-9">
                                    <select class="form-control form_edit select2_gedung" name="gedung">
                                        <?php foreach ($gedung as $gedung){ ?>
                                        <option></option>
                                        <option value="<?= $gedung->gedung ?>" <?php if ($gedung->gedung == $kamar->gedung) echo 'selected' ?>><?= $gedung->nama_gedung ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tipe Kamar</label>
                                <div class="col-sm-9">
                                    <select class="form-control form_edit select2_tipe" name="id_tipe">
                                        <?php foreach ($tipe as $tipe){ ?>
                                        <option></option>
                                        <option value="<?= $tipe->id_tipe ?>" <?php if ($tipe->tipe_kamar == $kamar->tipe_kamar) echo 'selected' ?>><?= $tipe->tipe_kamar.' – Harga <b>Rp'.number_format($tipe->harga, 0, ',', '.') ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Kamar</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no_kamar_baru" value="<?= $kamar->no_kamar ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 ml-sm-auto">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <button class="btn btn-danger" type="button" onclick="window.history.back()">Batal</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
