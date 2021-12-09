            <!-- START PAGE CONTENT -->
            <div class="fade-in-up">
                <div class="row">
                    <div class="col-lg-12" style="padding: 0 0 15px 0;">
                            <!--Carousel Wrapper-->
                            <div id="slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-caption">
                                        <h3 class="h3-responsive big-brand1">SELAMAT DATANG</h3>
                                        <p class="big-brand2">Administrator Rusunawa Undip</p>
                                    </div>
                                    <div class="carousel-item active">
                                        <div class="view">
                                            <img class="d-block" src="<?php echo base_url('assets/img/rusunawa/1.jpg')  ?>"
                                            alt="First slide" size="40x40">
                                            <div class="mask rgba-black-light"></div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="view">
                                            <img class="d-block" src="<?php echo base_url('assets/img/rusunawa/2.jpg')  ?>"
                                            alt="First slide" size="40x40">
                                            <div class="mask rgba-black-light"></div>
                                        </div>
                                    </div>
                                    <!-- <div class="carousel-item">
                                        <div class="view">
                                            <img class="d-block" src="<?php echo base_url('assets/img/rusunawa/3.jpg')  ?>"
                                            alt="First slide" size="40x40">
                                            <div class="mask rgba-black-light"></div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="view">
                                            <img class="d-block" src="<?php echo base_url('assets/img/rusunawa/4.jpg')  ?>"
                                            alt="First slide" size="40x40">
                                            <div class="mask rgba-black-light"></div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="view">
                                            <img class="d-block" src="<?php echo base_url('assets/img/rusunawa/5.jpg')  ?>"
                                            alt="First slide" size="40x40">
                                            <div class="mask rgba-black-light"></div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="view">
                                            <img class="d-block" src="<?php echo base_url('assets/img/rusunawa/6.jpg')  ?>"
                                            alt="First slide" size="40x40">
                                            <div class="mask rgba-black-light"></div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="view">
                                            <img class="d-block" src="<?php echo base_url('assets/img/rusunawa/7.jpg')  ?>"
                                            alt="First slide" size="40x40">
                                            <div class="mask rgba-black-light"></div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="view">
                                            <img class="d-block" src="<?php echo base_url('assets/img/rusunawa/8.jpg')  ?>"
                                            alt="First slide" size="40x40">
                                            <div class="mask rgba-black-light"></div>
                                        </div>
                                    </div> -->
                                </div>
                                <!--/.Slides-->
                                <a class="carousel-control-next" href="#slide-carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--/.Carousel Wrapper-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8" style="padding: 0 0 0 0;">
                        <div class="col-lg-4 col-md-4 col-sum">
                            <div class="ibox bg-primary color-white widget-stat" style="background-color: #3498db;">
                                <div class="ibox-body sum-kamar">
                                    <h4 class="m-b-5 font-strong">Gedung A</h4>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 1 Orang</label>: <?php echo (84 - $a['terisi2']) ?> Kamar</div><i class="widget-stat-icon icon-gedung"><img src="<?php echo base_url("assets/img/sum-gedung/A.png"); ?>"/></i>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 2 Orang</label>: <?php echo (84 - $a['terisi2'] - $a['terisi1']) ?> Kamar</div>
                                    <div class="m-b-5"><label class="sum-gedung">Total Kamar </label>: 84 Kamar</div>
                                    <div class="m-b-5"><label class="sum-gedung">Total Penghuni </label>: <?php echo ($a['terisi1']+(2*($a['terisi2']))+$a['sendiri'])?> Penghuni</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sum">
                            <div class="ibox bg-primary color-white widget-stat" style="background-color: #3498db;">
                                <div class="ibox-body sum-kamar">
                                    <h4 class="m-b-5 font-strong">Gedung B</h4>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 1 Orang</label>: <?php echo (97 - $b['terisi2']) ?> Kamar</div><i class="widget-stat-icon icon-gedung"><img src="<?php echo base_url("assets/img/sum-gedung/B.png"); ?>"/></i>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 2 Orang</label>: <?php echo (97 - $b['terisi2'] - $b['terisi1']) ?> Kamar</div>
                                    <div class="m-b-5"><label class="sum-gedung">Total Kamar </label>: 97 Kamar</div>
                                    <div class="m-b-5"><label class="sum-gedung">Total Penghuni </label>: <?php echo ($b['terisi1']+(2*($b['terisi2']))+$b['sendiri'])?> Penghuni</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sum">
                            <div class="ibox bg-primary color-white widget-stat" style="background-color: #3498db;">
                                <div class="ibox-body sum-kamar">
                                    <h4 class="m-b-5 font-strong">Gedung C</h4>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 1 Orang</label>: <?php echo (96 - $c['terisi2']) ?> Kamar</div><i class="widget-stat-icon icon-gedung"><img src="<?php echo base_url("assets/img/sum-gedung/C.png"); ?>"/></i>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 2 Orang</label>: <?php echo (96 - $c['terisi2'] - $c['terisi1']) ?> Kamar</div>
                                    <div class="m-b-5"><label class="sum-gedung">Total Kamar </label>: 96 Kamar</div>
                                    <div class="m-b-5"><label class="sum-gedung">Total Penghuni </label>: <?php echo ($c['terisi1']+(2*($c['terisi2']))+$c['sendiri'])?> Penghuni</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sum">
                            <div class="ibox bg-primary color-white widget-stat" style="background-color: #3498db;">
                                <div class="ibox-body sum-kamar">
                                    <h4 class="m-b-5 font-strong">Gedung D</h4>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 1 Orang</label>: <?php echo (103 - $d['terisi2']) ?> Kamar</div><i class="widget-stat-icon icon-gedung"><img src="<?php echo base_url("assets/img/sum-gedung/D.png"); ?>"/></i>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 2 Orang</label>: <?php echo (103 - $d['terisi2'] - $d['terisi1']) ?> Kamar</div>
                                    <div class="m-b-5"><label class="sum-gedung">Total Kamar </label>: 103 Kamar</div>
                                    <div class="m-b-5"><label class="sum-gedung">Total Penghuni </label>: <?php echo ($d['terisi1']+(2*($d['terisi2']))+$d['sendiri'])?> Penghuni</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sum">
                            <div class="ibox bg-primary color-white widget-stat" style="background-color: #3498db;">
                                <div class="ibox-body sum-kamar">
                                    <h4 class="m-b-5 font-strong">Gedung E</h4>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 1 Orang</label>: <?php echo (114 - $e['terisi2']) ?> Kamar</div><i class="widget-stat-icon icon-gedung"><img src="<?php echo base_url("assets/img/sum-gedung/E.png"); ?>"/></i>
                                    <div class="m-b-5"><label class="sum-gedung">Bisa diisi 2 Orang</label>: <?php echo (114 - $e['terisi2'] - $e['terisi1']) ?> Kamar</div>
                                    <!--suatu saat dibutuhkan <div class="m-b-5"><label class="sum-gedung">Sendiri </label>: <?php echo $e['sendiri'] ?> Kamar</div> -->
                                    <div class="m-b-5"><label class="sum-gedung">Total Kamar </label>: 114 Kamar</div>
                                    <div class="m-b-5"><label class="sum-gedung">Total Penghuni </label>: <?php echo ($e['terisi1']+(2*($e['terisi2']))+$e['sendiri'])?> Penghuni</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Total Data Keuangan</div>
                            </div>
                            <div class="ibox-body">
                                <ul class="media-list media-list-divider m-0">
                                    <li class="media">
                                        <!-- <a class="media-img" href="javascript:;">
                                            <img class="img-circle" src="./assets/img/users/u1.jpg" width="40" />
                                        </a> -->
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x icon-bg1"></i>
                                            <i class="fa fa-dollar fa-stack-1x fa-inverse"></i>
                                        </span> 
                                        <div class="media-body">
                                            <div class="media-heading">Pemasukan Seharusnya</div>
                                            <div class="font-16"><?php echo 'Rp'.number_format($total->biaya, 0, ',', '.') ?></div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="media-list media-list-divider m-0">
                                    <li class="media">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x icon-bg2"></i>
                                            <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                                        </span> 
                                        <div class="media-body">
                                            <div class="media-heading">Pemasukan Sekarang</div>
                                            <div class="font-16"> <a href="<?php echo base_url('riwayat-pembayaran');?>"> <?php echo 'Rp'.number_format($total->bayar, 0, ',', '.') ?> </a></div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="media-list media-list-divider m-0">
                                    <li class="media">
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x icon-bg3"></i>
                                            <i class="fa fa-credit-card fa-stack-1x fa-inverse"></i>
                                        </span> 
                                        <div class="media-body">
                                            <div class="media-heading">Piutang</div>
                                            <div class="font-16"><a href="<?php echo base_url('laporan-keuangan')?>"><?php echo 'Rp'.number_format($total->piutang, 0, ',', '.') ?></a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->