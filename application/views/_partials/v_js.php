    <!-- CORE PLUGINS-->
    <script src="<?php echo base_url('assets/vendors/jquery/dist/jquery.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/popper.js/dist/umd/popper.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/dist/js/bootstrap.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/metisMenu/dist/metisMenu.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js') ?>" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?php echo base_url('assets/js/app.min.js') ?>" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="<?php echo base_url('assets/vendors/DataTables/datatables.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/DataTables/ColReorderWithResize.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/sweetalert2/sweetalert2.all.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/jquery.maskedinput/dist/jquery.maskedinput.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/select2/dist/js/select2.full.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/moment/moment.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/moment/datetime-moment.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendors/toastr/toastr.js') ?>" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabel-responsif').DataTable({
                pageLength: 25,
                'sDom': 'R<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>><"row"<"col-sm-12"rt>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>'
            });
        });
    </script>
    <script type="text/javascript">
        //semua halaman
        $(document).ready(function(){
            $('#logout-alert').click(function(){
                Swal.fire({
                    title: 'Keluar dari Sistem',
                    text: 'Apakah Anda yakin ingin keluar dari sistem?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#dd3333',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Keluar',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.value) {
                        //form.submit();
                        window.location.href = '<?php echo base_url("logout") ?>';
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabel-user').DataTable({
                pageLength: 25,
                'sDom': 'R<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>><"row"<"col-sm-12"rt>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
            });
            $(".hapus-user").click(function(){
                var username = $(this).attr('id');
                var namaTerpilih = $(this).closest("tr");
                var namaUser = namaTerpilih.find("td:eq(1)").html();
                Swal.fire({
                    title: 'Hapus Data User',
                    text: 'Apakah Anda yakin ingin menghapus user ' + namaUser + '?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dd3333',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.value) {
                        window.location.href = '<?php echo base_url("aksi-hapus-user/") ?>' + username;
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".hapus-pembayaran").click(function(){
                var id_pembayaran = $(this).attr('id');
                var invoiceTerpilih = $(this).closest("tr");
                var namaPenghuni = invoiceTerpilih.find("td:eq(2)").html();
                var invoiceTanggal = invoiceTerpilih.find("td:eq(3)").html();
                Swal.fire({
                    title: 'Hapus Data Pembayaran',
                    text: 'Apakah Anda yakin ingin hapus pembayaran ' + namaPenghuni + ' pada ' + invoiceTanggal + ' ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dd3333',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.value) {
                        window.location.href = '<?php echo base_url("aksi-hapus-pembayaran/") ?>' + id_pembayaran;
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        //daftar penghuni
        $(document).ready(function(){
            $.fn.dataTable.moment('D-M-YYYY');
            $('#tabel-penghuni').DataTable({
                pageLength: 25,
                'sDom': 'R<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>><"row"<"col-sm-12"rt>><"row"<"col-sm-12 col-md-5"i><"col-sm-12 col-md-7"p>>',
            });
            $(".hapus-penghuni").click(function(){
                var id_penghuni = $(this).attr('id');
                var namaTerpilih = $(this).closest("tr");
                var namaPenghuni = namaTerpilih.find("td:eq(2)").html();
                Swal.fire({
                    title: 'Hapus Data Penghuni',
                    text: 'Apakah Anda yakin ingin menghapus data penghuni ' + namaPenghuni + '?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dd3333',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.value) {
                        //form.submit();
                        window.location.href = '<?php echo base_url("aksi-hapus-penghuni/") ?>' + id_penghuni;
                    }
                });
            });
        });
        $(document).on("click", ".detail-penghuni", function(){
            var id_penghuni = $(this).attr("id");
            $.ajax({
                url: "<?php echo base_url('get-detail-penghuni') ?>",
                method: "POST",
                data: {id_penghuni: id_penghuni},
                dataType: "json",
                cache: false,
                success: function(data){
                    Swal.fire({
                        width: 700,
                        html: `<div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="30%"><label>No. Kamar</label></td>
                                            <td width="70%">`+ data.no_kamar +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Nama</label></td>
                                            <td width="70%">`+ data.nama +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>NIM</label></td>
                                            <td width="70%">`+ data.nim +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Prodi</label></td>
                                            <td width="70%">`+ data.nama_prodi +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Prodi</label></td>
                                            <td width="70%">`+ data.nama_fakultas +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Tempat Lahir</label></td>
                                            <td width="70%">`+ data.tempat_lahir +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Tanggal Lahir</label></td>
                                            <td width="70%">`+ data.tgl_lahir +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Agama</label></td>
                                            <td width="70%">`+ data.agama +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Alamat Asal</label></td>
                                            <td width="70%">`+ data.alamat +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>No. Telp/HP</label></td>
                                            <td width="70%">`+ data.no +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Nama Orang Tua</label></td>
                                            <td width="70%">`+ data.nama_ortu +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Pekerjaan Orang Tua</label></td>
                                            <td width="70%">`+ data.pekerjaan_ortu +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Alamat Orang Tua</label></td>
                                            <td width="70%">`+ data.alamat_ortu +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>No. Telp/HP Orang Tua</label></td>
                                            <td width="70%">`+ data.no_ortu +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Kategori</label></td>
                                            <td width="70%">`+ data.kategori +`</td>
                                        </tr>
                                        <tr>
                                            <td width="30%"><label>Tanggal Huni</label></td>
                                            <td width="70%">`+ data.tgl_masuk +` s/d `+ data.tgl_keluar +`</td>
                                        </tr>
                                    </table>
                                </div>`
                    });
                }
            });
        });
        $(document).on("click", ".riwayat-bayar", function(){
            var id_penghuni = $(this).attr("id");
            $.ajax({
                url: "<?php echo base_url('get-detail-penghuni') ?>",
                method: "POST",
                data: {id_penghuni: id_penghuni},
                dataType: "json",
                cache: false,
                success: function(data){
                    Swal.fire({
                        width: 1200,
                        html: `<div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="10%"><label>Masa Huni</label></td>
                                            <td width="10%"><label>Total Biaya</label></td>
                                            <td width="5%"><label>Agu</label></td>
                                            <td width="5%"><label>Sep</label></td>
                                            <td width="5%"><label>Okt</label></td>
                                            <td width="5%"><label>Nov</label></td>
                                            <td width="5%"><label>Des</label></td>
                                            <td width="5%"><label>Jan</label></td>
                                            <td width="5%"><label>Feb</label></td>
                                            <td width="5%"><label>Mar</label></td>
                                            <td width="5%"><label>Apr</label></td>
                                            <td width="5%"><label>Mei</label></td>
                                            <td width="5%"><label>Jun</label></td>
                                            <td width="5%"><label>Jul</label></td>
                                            <td width="10%"><label>Total Bayar</label></td>
                                            <td width="10%"><label>Piutang</label></td>
                                        </tr>
                                    </table>
                                </div>`
                    });
                }
            });
        });
    </script>
    <script type="text/javascript">
        //tambah/edit penghuni
        function formatRupiah(angka, prefix){
			var number_string = angka.toString().replace(/[^,\d]/g, ''),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp' + rupiah : '');
		}
        $(document).ready(function(){
            // Select 2
            $(".select2_kamar").select2({
                placeholder: "Pilih Kamar Baru",
                allowClear: true
            });
            $(".select2_fakultas").select2({
                placeholder: "Pilih Fakultas",
                allowClear: true
            });
            $(".select2_prodi").select2({
                placeholder: "Pilih Prodi",
                allowClear: true
            });
            $(".select2_agama").select2({
                placeholder: "Pilih Agama",
                allowClear: true
            });
            $(".select2_masa_huni").select2({
                placeholder: "Pilih Lama Huni Berdasarkan Tanggal Masuk dan Keluar",
                allowClear: true
            });
            // Get Prodi
            $("#fakultas").change(function(){
                var id_fakultas = $("#fakultas").val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('get-prodi') ?>",
                    data: {id_fakultas: id_fakultas},
                    cache: false,
                    success: function(msg){
                    $("#prodi").html(msg);
                    }
                });
            });
            // Form Masks
            $("#form_tgl_lahir").mask("99-99-9999", {
                placeholder: "dd-mm-yyyy"
            });
            $("#form_tgl_bayar").mask("99-99-9999", {
                placeholder: "dd-mm-yyyy"
            });
            $("#tgl_masuk").mask("99-99-9999", {
                placeholder: "dd-mm-yyyy"
            });
            $("#tgl_keluar").mask("99-99-9999", {
                placeholder: "dd-mm-yyyy"
            });
            // Bootstrap datepicker
            $("#tgl_lahir .input-group.date").datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd-mm-yyyy"
            });
            $("#tgl_bayar .input-group.date").datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd-mm-yyyy"
            });
            $("#tgl_huni .input-daterange").datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd-mm-yyyy"
            });
            // Agama lainnya
            $("#agama").change(function(){
                if ($("#agama").val() == "other"){
                    $("#agama_lainnya").show();
                }
                else {
                    $("#agama_lainnya").hide();
                }
            });
            //harga kamar
            $("#masa_huni").change(function(){
                var harga = parseInt($("#harga_kamar").val());
                var lama = parseInt($(this).val());
                var status = $('input[name="isi_kamar"]:checked').val();
                if(status == '1'){
                    total = harga*lama;
                }
                else if (status == '2'){
                    total = (harga*lama)/2;
                }
                else if (status == null){
                    total = "Pilih Isi Kamar";
                }
                else{
                    total = "error";
                }
                $("#biaya").val(total);
            });
            $('input[type=radio][name=isi_kamar]').change(function() {
                var harga = parseInt($("#harga_kamar").val());
                var lama = parseInt($("#masa_huni").val());
                var status = $('input[name="isi_kamar"]:checked').val();
                if(status == '1'){
                    total = harga*lama;
                }
                else if (status == '2'){
                    total = (harga*lama)/2;
                }
                else{
                    total = "error1";
                }
                $("#biaya").val(total);
            });
            $("#bayar").on("keyup", function(){
                var biaya =parseInt($("#biaya").val());
                var bayar =parseInt($(this).val());
                piutang = biaya-bayar;
                $("#piutang").val(piutang);
            });
            $("#bayar_baru").on("keyup", function(){
                var biaya =parseInt($("#piutang_lama").val());
                var bayar =parseInt($(this).val());
                piutang = biaya-bayar;
                sisa = Math.abs(piutang);
                piutang_baru = formatRupiah(piutang, 'Rp');
                sisa_format = formatRupiah(sisa, 'Rp');
                if (piutang > '0'){
                    $("#piutang_baru").val(piutang_baru);
                }
                else if (piutang == '0' || piutang == null){                    
                    $("#piutang_baru").val("Sudah Lunas");
                }
                else if (piutang < '0'){                
                    $("#piutang_baru").val("Kelebihan Pembayaran "+sisa_format);
                }
                else {
                    $("#piutang_baru").val("Masukkan Data!");
                }
            });
        });
        $(document).ready(function(){
            $(".btn-trans").click(function(){
                $("#pilihan1").val("transaksi");
                $(".typo").hide();
                $(".transaksi").show();
                $(".pk").hide();
                $("#agama_lainnya").hide();
                $("#nama").prop('readonly', true);
                $("#nim").prop('readonly', true);
                $(".form_edit").prop({'required': false, 'disabled': true});
                $(".form_transaksi").prop({'required': true, 'disabled': false});
                $(".form_pindah").prop({'required': false, 'disabled': true});
            }).trigger("click");
            $(".btn-pindah").click(function(){
                $("#pilihan1").val("pk");
                $(".typo").hide();
                $(".transaksi").hide();
                $(".pk").show();
                $("#agama_lainnya").hide();
                $("#nama").prop('readonly', true);
                $("#nim").prop('readonly', true);
                $(".form_edit").prop({'required': false, 'disabled': true});
                $(".form_transaksi").prop({'required': false, 'disabled': true});
                $(".form_pindah").prop({'required': true, 'disabled': false});
            });
            $(".btn-edit").click(function(){
                $("#pilihan1").val("typo");
                $(".typo").show();
                $(".transaksi").hide();
                $(".pk").hide();
                if ($("#agama").val() == "other"){
                    $("#agama_lainnya").show();
                }
                else {
                    $("#agama_lainnya").hide();
                }
                $("#nama").prop('readonly', false);
                $("#nim").prop('readonly', false);
                //$(".form_edit").prop({'required': true, 'disabled': false});
                $(".form_edit").prop({'disabled': false});
                $(".form_transaksi").prop({'required': false, 'disabled': true});
                $(".form_pindah").prop({'required': false, 'disabled': true});
            });
        });

        
    </script>
    <script type="text/javascript">
        //pilih kamar
        $(document).ready(function(){
            $("#gedung_A").change(function(){
                var lantai = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('get-kamar') ?>",
                    method: "POST",
                    data: {lantai: lantai},
                    dataType: "json",
                    cache: false,
                    success: function(data){
                        var html = '';
                        for (i=0; i<data.length; i++){
                            var status_piutang = '';
                            if (data[i].piutang != 0){
                                var status_piutang = 'piutang';
                            }
                            html += '<div class="kamar '+ data[i].status +' '+ status_piutang +'" id="'+ data[i].no_kamar +'">'+ data[i].no_kamar +'</div>';
                        }
                        $("#lantai_A").html(html);
                    }
                });
            }).trigger("change");
            $("#gedung_B").change(function(){
                var lantai = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('get-kamar') ?>",
                    method: "POST",
                    data: {lantai: lantai},
                    dataType: "json",
                    cache: false,
                    success: function(data){
                        var html = '';
                        for (i=0; i<data.length; i++){
                            var status_piutang = '';
                            if (data[i].piutang != 0){
                                var status_piutang = 'piutang';
                            }
                            html += '<div class="kamar '+ data[i].status +' '+ status_piutang +'" id="'+ data[i].no_kamar +'">'+ data[i].no_kamar +'</div>';
                        }
                        $("#lantai_B").html(html);
                    }
                });
            }).trigger("change");
            $("#gedung_C").change(function(){
                var lantai = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('get-kamar') ?>",
                    method: "POST",
                    data: {lantai: lantai},
                    dataType: "json",
                    cache: false,
                    success: function(data){
                        var html = '';
                        for (i=0; i<data.length; i++){
                            var status_piutang = '';
                            if (data[i].piutang != 0){
                                var status_piutang = 'piutang';
                            }
                            html += '<div class="kamar '+ data[i].status +' '+ status_piutang +'" id="'+ data[i].no_kamar +'">'+ data[i].no_kamar +'</div>';
                        }
                        $("#lantai_C").html(html);
                    }
                });
            }).trigger("change");
            $("#gedung_D").change(function(){
                var lantai = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('get-kamar') ?>",
                    method: "POST",
                    data: {lantai: lantai},
                    dataType: "json",
                    cache: false,
                    success: function(data){
                        var html = '';
                        for (i=0; i<data.length; i++){
                            var status_piutang = '';
                            if (data[i].piutang != 0){
                                var status_piutang = 'piutang';
                            }
                            html += '<div class="kamar '+ data[i].status +' '+ status_piutang +'" id="'+ data[i].no_kamar +'">'+ data[i].no_kamar +'</div>';
                        }
                        $("#lantai_D").html(html);
                    }
                });
            }).trigger("change");
            $("#gedung_E").change(function(){
                var lantai = $(this).val();
                $.ajax({
                    url: "<?php echo base_url('get-kamar') ?>",
                    method: "POST",
                    data: {lantai: lantai},
                    dataType: "json",
                    cache: false,
                    success: function(data){
                        var html = '';
                        for (i=0; i<data.length; i++){
                            var status_piutang = '';
                            if (data[i].piutang != 0){
                                var status_piutang = 'piutang';
                            }
                            html += '<div class="kamar '+ data[i].status +' '+ status_piutang +'" id="'+ data[i].no_kamar +'">'+ data[i].no_kamar +'</div>';
                        }
                        $("#lantai_E").html(html);
                    }
                });
            }).trigger("change");
            //tampil data penghuni di denah kamar
            $(document).on("click", ".kamar", function(){
                $(".kamar").removeClass("terpilih");
                $(this).addClass("terpilih");
                $("#penghuni1").show();
                // $("#nama").val("Memuat ...");
                // $("#nim").val("Memuat ...");
                // $("#no").val("Memuat ...");
                // $("#prodi").val("Memuat ...");
                // $("#piutang").val("Memuat ...");
                // $("#nama2").val("Memuat ...");
                // $("#nim2").val("Memuat ...");
                // $("#no2").val("Memuat ...");
                // $("#prodi2").val("Memuat ...");
                // $("#piutang2").val("Memuat ...");
                $("#tambah_penghuni").removeAttr("style").hide();
                $("#edit_penghuni").removeAttr("style").hide();
                $(".eks_penghuni").removeAttr("style").hide();
                $(".perpanjang").removeAttr("style").hide();
                $("#tambah_penghuni2").removeAttr("style").hide();
                $("#edit_penghuni2").removeAttr("style").hide();
                $(".eks_penghuni2").removeAttr("style").hide();
                $(".perpanjang2").removeAttr("style").hide();
                var no_kamar = $(this).attr("id");
                $.ajax({
                    url: "<?php echo base_url('get-detail-kamar') ?>",
                    method: "POST",
                    data: {no_kamar: no_kamar},
                    dataType: "json",
                    cache: false,
                    success: function(data){
                        if (!data[0]){
                            $("#penghuni2").removeAttr("style").hide();
                            $("#tambah_penghuni").show();
                            $("#tambah_penghuni").attr("href", "<?php echo base_url('tambah-penghuni/') ?>" + no_kamar);
                            //$("#edit_penghuni").removeAttr("href");
                            $("#edit_penghuni").removeAttr("style").hide();
                            $(".perpanjang").removeAttr("style").hide();
                            $(".eks_penghuni").removeAttr("style").hide();
                            $("#no_kamar").val(no_kamar);
                            $("#nama").val("Belum ada penghuni");
                            $("#no").val("Belum ada penghuni");
                            $("#prodi").val("Belum ada penghuni");
                            $("#fakultas").val("Belum ada penghuni");
                            $("#tgl_masuk").val("");
                            $("#tgl_keluar").val("");
                            $("#biaya").val("Belum ada penghuni");
                            $("#bayar").val("Belum ada penghuni");
                            $("#piutang").val("Belum ada penghuni");
                        }
                        else {
                            if (data[0].isi_kamar == "1") {
                                $("#penghuni2").removeAttr("style").hide(); // tidak tampil
                            }
                            else {
                                $("#penghuni2").show();
                            }
                            //$("#tambah_penghuni").removeAttr("href");
                            $("#tambah_penghuni").removeAttr("style").hide();
                            $("#edit_penghuni").show();
                            $(".perpanjang").show();
                            $(".eks_penghuni").show();
                            $("#edit_penghuni").attr("href", "<?php echo base_url('edit-penghuni/') ?>" + data[0].id);
                            $(".perpanjang").attr("id", data[0].id);
                            $(".eks_penghuni").attr("id", data[0].id);
                            $("#no_kamar").val(data[0].no_kamar);
                            $("#nama").val(data[0].nama);
                            $("#no").val(data[0].no);
                            $("#prodi").val(data[0].nama_prodi);
                            $("#fakultas").val(data[0].nama_fakultas);
                            $("#tgl_masuk").val(data[0].tgl_masuk);
                            $("#tgl_keluar").val(data[0].tgl_keluar);
                            $("#biaya").val('Rp' + data[0].biaya.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
                            $("#bayar").val(((data[0].bayar) == null) ? 'Rp0' : 'Rp' + data[0].bayar.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
                            $("#piutang").val('Rp' + data[0].piutang.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
                        }
                        if (!data[1]){
                            $("#tambah_penghuni2").show();
                            $("#tambah_penghuni2").attr("href", "<?php echo base_url('tambah-penghuni/') ?>" + no_kamar);
                            //$("#edit_penghuni2").removeAttr("href");
                            $("#edit_penghuni2").removeAttr("style").hide();
                            $(".perpanjang2").removeAttr("style").hide();
                            $(".eks_penghuni2").removeAttr("style").hide();
                            $("#no_kamar2").val(no_kamar);
                            $("#nama2").val("Belum ada penghuni");
                            $("#no2").val("Belum ada penghuni");
                            $("#prodi2").val("Belum ada penghuni");
                            $("#fakultas2").val("Belum ada penghuni");
                            $("#tgl_masuk2").val("");
                            $("#tgl_keluar2").val("");
                            $("#biaya2").val("Belum ada penghuni");
                            $("#bayar2").val("Belum ada penghuni");
                            $("#piutang2").val("Belum ada penghuni");
                        }
                        else {
                            //$("#tambah_penghuni2").removeAttr("href");
                            $("#tambah_penghuni2").removeAttr("style").hide();
                            $("#edit_penghuni2").show();
                            $(".perpanjang2").show();
                            $(".eks_penghuni2").show();
                            $("#edit_penghuni2").attr("href", "<?php echo base_url('edit-penghuni/') ?>" + data[1].id);
                            $(".perpanjang2").attr("id", data[1].id);
                            $(".eks_penghuni2").attr("id", data[1].id);
                            $("#no_kamar2").val(data[1].no_kamar);
                            $("#nama2").val(data[1].nama);
                            $("#no2").val(data[1].no);
                            $("#prodi2").val(data[1].nama_prodi);
                            $("#fakultas2").val(data[1].nama_fakultas);
                            $("#tgl_masuk2").val(data[1].tgl_masuk);
                            $("#tgl_keluar2").val(data[1].tgl_keluar);
                            $("#biaya2").val('Rp' + data[1].biaya.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
                            $("#bayar2").val(((data[1].bayar) == null) ? 'Rp0' : 'Rp' + data[1].bayar.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
                            $("#piutang2").val('Rp' + data[1].piutang.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1."));
                        }
                    }
                });
            });
            $(".perpanjang").click(function(){
                var id = $(this).attr("id");
                var nama = $("#nama").val();
                Swal.fire({
                    title: "Perpanjang Penghuni",
                    text: "Apakah Anda yakin ingin memperpanjang 1 tahun masa huni untuk penghuni " + nama + "?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#dd3333",
                    confirmButtonText: "Ya, Perpanjang",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.value) {
                        window.location.href = "<?php echo base_url('perpanjang/') ?>" + id;
                    }
                });
            });
            $(".eks_penghuni").click(function(){
                var id = $(this).attr("id");
                var nama = $("#nama").val();
                Swal.fire({
                    title: "Selesai Menghuni",
                    text: "Apakah Anda yakin ingin menyelesaikan masa huni untuk penghuni " + nama + "?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dd3333",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, Selesaikan",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.value) {
                        window.location.href = "<?php echo base_url('eks-penghuni/') ?>" + id;
                    }
                });
            });
            $(".perpanjang2").click(function(){
                var id = $(this).attr("id");
                var nama = $("#nama2").val();
                Swal.fire({
                    title: "Perpanjang Penghuni",
                    text: "Apakah Anda yakin ingin memperpanjang 1 tahun masa huni untuk penghuni " + nama + "?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#dd3333",
                    confirmButtonText: "Ya, Perpanjang",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.value) {
                        window.location.href = "<?php echo base_url('perpanjang/') ?>" + id;
                    }
                });
            });
            $(".eks_penghuni2").click(function(){
                var id = $(this).attr("id");
                var nama = $("#nama2").val();
                Swal.fire({
                    title: "Selesai Menghuni",
                    text: "Apakah Anda yakin ingin menyelesaikan masa huni untuk penghuni " + nama + "?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#dd3333",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, Selesaikan",
                    cancelButtonText: "Batal",
                }).then((result) => {
                    if (result.value) {
                        window.location.href = "<?php echo base_url('eks-penghuni/') ?>" + id;
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $('.carousel').carousel({
            interval: 4000
        });
    </script>
    <script type="text/javascript">
        window.onload = function(){
            <?php if (isset($pesan)) echo $pesan ?>
        }
    </script>
</body>
</html>
