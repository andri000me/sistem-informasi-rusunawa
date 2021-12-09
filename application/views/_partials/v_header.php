<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="./">
                    <span class="brand">Rusunawa Undip 
                        <span class="brand-tip"></span>
                    </span>
                    <span class="brand-mini">RU</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <img src="<?php echo base_url('assets/img/undip/logo-icon.png') ?>" class="d-none d-sm-inline" width="32" height="32" />
                        <a class="nav-undip navbar-brand d-none d-sm-inline" href="#">Universitas Diponegoro</a>
                    </li>
                </ul>
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="<?php echo base_url('assets/img/admin-avatar.png') ?>" />
                            <span><?php echo $this->session->userdata('nama') ?></span><i class="fa fa-angle-down m-l-5"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" style="min-width: 150px">
                            <a class="dropdown-item" href="<?php echo base_url('ubah-pass') ?>"><i class="fa fa-lock"></i>Ubah Password</a>
                            <a class="dropdown-item" href="<?php echo base_url('tambah-user') ?>" <?php if ($username != 'admin') echo 'style="display: none"' ?>><i class="fa fa-user"></i>Tambah User</a>
                            <a class="dropdown-item" id="logout-alert"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
