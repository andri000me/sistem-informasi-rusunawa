<body>
    <div class="bg-login"></div>
    <div class="content register-parent">
        <form id="register-form" action="<?php echo base_url('aksi-tambah-user') ?>" method="post" novalidate="novalidate">
            <div class="register-title">
                <img src="<?php echo base_url('assets/img/undip/logo-light-text2.png') ?>" alt="Universitas Diponegoro" style="width: 175px; vertical-align: middle">
                <h2 class="register-title1">Tambah User Admin</h2>
            </div>
            <div class="social-auth-hr">
                <span>Membuat akun Admin</span>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="nama" placeholder="Nama Admin">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username" autocomplete="off">
            </div>
            <div class="form-group">
                <input class="form-control" id="password" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="konfirmasi_password" placeholder="Konfirmasi Password">
            </div>
            <?php if ($pesan == 'gagal_tambah_user') echo '<div class="alert alert-danger">Username sudah digunakan. Coba yang lain.</div>' ?>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <button class="btn btn-outline-primary btn-block" type="button" onclick="window.history.back()"><strong>Kembali</strong></button>
                    </div>
                </div>
                <div class="col-4">
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit"><strong>Buat Akun</strong></button>
                    </div>
                </div>
            </div>
        </form>
    </div>