            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Edit Harga Kamar</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" action="<?php echo base_url('aksi-edit-harga-kamar') ?>" method="post">
                                
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Gedung</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="gedung" value="<?php echo $data_lantai->gedung ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Lantai</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="lantai" value="<?php echo $data_lantai->lantai ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Harga Per Bulan</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" name="harga" value="<?php echo $data_lantai->harga ?>" max=10000000>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-9 ml-sm-auto">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <button class="btn btn-danger" type="button" onclick="window.history.back()">Batal</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
