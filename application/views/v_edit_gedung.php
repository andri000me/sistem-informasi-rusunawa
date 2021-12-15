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
                        <form class="form-horizontal" action="<?= base_url('aksi-edit-gedung') ?>" method="post">
                            <input type="hidden" name="gedung" value="<?= $gedung->gedung ?>">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Gedung</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="gedung_baru" value="<?= $gedung->gedung ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Gedung</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nama_gedung" value="<?= $gedung->nama_gedung ?>" required>
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
