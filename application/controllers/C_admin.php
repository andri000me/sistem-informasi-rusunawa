<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') != 'login'){
            redirect (base_url('login'));
        }
        date_default_timezone_set("Asia/Bangkok");
        $this->load->model('m_data');
    }

    function send_email(){
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'konfirmasi.rusunawa@gmail.com';
        $mail->Password   = 'semaranghebat';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        
        $mail->setFrom('konfirmasi.rusunawa@gmail.com', 'Rusunawa Undip');
        $mail->addReplyTo('konfirmasi.rusunawa@gmail.com', 'Rusunawa Undip');
        
        // Add a recipient
        $mail->addAddress('akhmadarief7k@gmail.com');
        
        // Add cc or bcc 
        // $mail->addCC('cc@gmail.com');
        // $mail->addBCC('bcc@gmail.com');
        
        // Email subject
        $mail->Subject = 'Konfirmasi Pendaftaran Akun';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent =
            "<h1>Berikut adalah tautan konfirmasi untuk pendaftaran akun Rusunawa Undip.</h1>
            <p>rusunawa.undip.id/konfirmasi/782367893468</p>";
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }

    function dasbor(){
        $data['judul_halaman'] = 'Dasbor';
        $data['total'] = $this->m_data->total_data_keuangan()->row();
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');

        $data['a'] = $this->m_data->jumlah_penghuni_gedung('A');
        $data['b'] = $this->m_data->jumlah_penghuni_gedung('B');
        $data['c'] = $this->m_data->jumlah_penghuni_gedung('C');
        $data['d'] = $this->m_data->jumlah_penghuni_gedung('D');
        $data['e'] = $this->m_data->jumlah_penghuni_gedung('E');

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('v_dasbor'); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js', $data);
    }

    function daftar_user(){
        if ($this->session->userdata('username') != 'admin') show_404();

        $data['judul_halaman'] = 'Daftar User';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');
        $data['user'] = $this->m_data->data_user(array('username !=' => 'admin'))->result();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_daftar_user', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js', $data);
    }

    function pilih_kamar(){
        $data['judul_halaman'] = 'Pilih Kamar';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_pilih_kamar'); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js', $data);
    }

    function daftar_gedung(){
        $data['judul_halaman'] = 'Daftar Gedung';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');
        $data['gedung'] = $this->m_data->data_gedung(array('1' => '1'))->result();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_daftar_gedung', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js', $data);
    }

    function daftar_kamar(){
        $data['judul_halaman'] = 'Daftar Kamar';
        $data['username'] = $this->session->userdata('username');
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['kamar'] = $this->m_data->data_kamar(array('1' => '1'))->result();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_daftar_kamar', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function tambah_kamar(){
        $data['judul_halaman'] = 'Tambah Kamar Baru';
        $data['username'] = $this->session->userdata('username');
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['gedung'] = $this->m_data->data_gedung(array('1' => '1'))->result();
        $data['tipe'] = $this->m_data->data_tipe_kamar(array('1' => '1'))->result();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_tambah_kamar', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function edit_kamar($no_kamar){

        $data['kamar'] = $this->m_data->data_kamar(array('no_kamar' => $no_kamar))->row();

        if (!$data['kamar']) show_404();

        $data['judul_halaman'] = 'Edit Kamar';
        $data['username'] = $this->session->userdata('username');
        $data['gedung'] = $this->m_data->data_gedung(array('1' => '1'))->result();
        $data['tipe'] = $this->m_data->data_tipe_kamar(array('1' => '1'))->result();
        // $data['data_lantai'] = $this->m_data->data_harga_kamar_by_lantai($lantai)->row();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_edit_kamar', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function tambah_gedung(){
        $data['judul_halaman'] = 'Tambah Gedung Baru';
        $data['username'] = $this->session->userdata('username');
        $data['pesan'] = $this->session->flashdata('pesan');

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_tambah_gedung', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function edit_gedung($gedung){

        $data['gedung'] = $this->m_data->data_gedung(array('gedung.gedung' => $gedung))->row();

        if (!$data['gedung']) show_404();

        $data['judul_halaman'] = 'Edit Gedung';
        $data['username'] = $this->session->userdata('username');
        $data['pesan'] = $this->session->flashdata('pesan');

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_edit_gedung', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function daftar_kamar_cetak(){
        $data['kamar'] = $this->m_data->data_kamar()->result();
        $this->load->view('v_daftar_kamar_cetak', $data);
    }

    function daftar_tipe(){
        $data['judul_halaman'] = 'Daftar Tipe Kamar';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');
        $data['tipe'] = $this->m_data->data_tipe_kamar(array('1' => '1'))->result();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_daftar_tipe', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js', $data);
    }

    function tambah_tipe(){
        $data['judul_halaman'] = 'Tambah Tipe Kamar Baru';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_tambah_tipe', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js', $data);
    }

    function edit_tipe($id_tipe){

        $data['tipe'] = $this->m_data->data_tipe_kamar(array('id_tipe' => $id_tipe))->row();

        if (!$data['tipe']) show_404();

        $data['judul_halaman'] = 'Edit Tipe Kamar';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_edit_tipe', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js', $data);
    }

    function daftar_harga(){
        $data['judul_halaman'] = 'Daftar Harga Kamar';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');
        $data['daftar_harga'] = $this->m_data->data_harga_kamar(array('1' => '1'))->result();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_daftar_harga', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js', $data);
    }

    function edit_harga_kamar($lantai){

        $data_harga_kamar = $this->m_data->data_harga_kamar(array('lantai' => $lantai))->row();

        if (!$data_harga_kamar){
            show_404();
        }

        $data['judul_halaman'] = 'Edit Harga Kamar';
        $data['username'] = $this->session->userdata('username');
        $data['data_lantai'] = $this->m_data->data_harga_kamar_by_lantai($lantai)->row();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_edit_harga_kamar', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function daftar_penghuni(){
        $data['judul_halaman'] = 'Daftar Penghuni';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');
        $data['penghuni'] = $this->m_data->detail_penghuni(array('status' => 'Penghuni'))->result();
        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_daftar_penghuni', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function daftar_penghuni_cetak(){
        $data['judul_halaman'] = 'Daftar Penghuni';
        $data['penghuni'] = $this->m_data->detail_penghuni(array('status' => 'Penghuni'))->result();
        $this->load->view('v_daftar_penghuni_cetak', $data);
    }

    function daftar_ekspenghuni(){
        $data['judul_halaman'] = 'Daftar Eks-Penghuni';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');
        $data['penghuni'] = $this->m_data->detail_penghuni(array('status' => 'Eks-Penghuni'))->result();
        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_daftar_penghuni', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function daftar_ekspenghuni_cetak(){
        $data['judul_halaman'] = 'Daftar Eks-Penghuni';
        $data['penghuni'] = $this->m_data->detail_penghuni(array('status' => 'Eks-Penghuni'))->result();
        $this->load->view('v_daftar_penghuni_cetak', $data);
    }

    function riwayat_pembayaran(){
        $data['judul_halaman'] = 'Riwayat Pembayaran';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');
        $data['pembayaran'] = $this->m_data->detail_pembayaran(array('1' => '1'))->result();
        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_riwayat_pembayaran', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js', $data);
    }

    function riwayat_pembayaran_cetak(){
        $data['judul_halaman'] = 'Riwayat Pembayaran';
        $data['username'] = $this->session->userdata('username');
        $data['pembayaran'] = $this->m_data->detail_pembayaran(array('1' => '1'))->result();
        $this->load->view('v_riwayat_pembayaran_cetak', $data); //page content
    }

    function laporan_keuangan(){
        $data['judul_halaman'] = 'Laporan Keuangan';
        $data['username'] = $this->session->userdata('username');
        $data['keuangan'] = $this->m_data->detail_penghuni(array('1' => '1'))->result();
        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_laporan_keuangan', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function laporan_keuangan_cetak(){
        $data['keuangan'] = $this->m_data->detail_penghuni(array('1' => '1'))->result();
        //$data['keuangan'] = $this->m_data->data_keuangan_per_penghuni()->result();
        $this->load->view('v_laporan_keuangan_cetak', $data);
    }

    function laporan_piutang(){
        $data['judul_halaman'] = 'Laporan Piutang';
        $data['username'] = $this->session->userdata('username');
        $data['penghuni'] = $this->m_data->detail_penghuni(array('1' => '1'))->result();
        $data['keuangan1'] = $this->m_data->detail_penghuni(array('1' => '1'))->result();
        //$data['keuangan1'] = $this->m_data->data_keuangan_per_penghuni()->result();
        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_laporan_piutang', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function tambah_penghuni($no_kamar = null){

        if (!isset($no_kamar)) redirect (base_url('pilih-kamar'));

        $cek_kamar = $this->m_data->cek_kamar($no_kamar)->row();

        if (!$cek_kamar) show_404();

        else if ($cek_kamar->status == 'terisi2' or $cek_kamar->status == 'sendiri'){
            $this->session->set_flashdata('pesan', 'toastr.warning("Kamar '.$no_kamar.' sudah terisi penuh, silakan pilih kamar lain")');
            redirect (base_url('pilih-kamar'));
        }

        $data['judul_halaman'] = 'Tambah Penghuni';
        $data['username'] = $this->session->userdata('username');
        $data['harga_kamar'] = $this->m_data->data_harga_kamar_by_lantai($cek_kamar->lantai)->row();
        $data['no_kamar'] = $no_kamar;
        $data['status_kamar'] = $cek_kamar->status;
        $data['fakultas'] = $this->m_data->data_fakultas()->result();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_tambah_penghuni', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function edit_penghuni($id = null){

        if (!isset($id)) redirect (base_url('daftar-penghuni'));

        $data['penghuni'] = $this->m_data->detail_penghuni(array('id' => $id))->row();

        if (!$data['penghuni']) show_404();

        $data['status_kamar'] = ($this->m_data->cek_kamar($data['penghuni']->no_kamar)->row())->status;
        $id_fakultas = $data['penghuni']->id_fakultas;

        $data['judul_halaman'] = 'Edit Penghuni';
        $data['username'] = $this->session->userdata('username');
        $data['kamar'] = $this->m_data->data_kamar_tersedia()->result();
        $data['prodi'] = $this->m_data->data_prodi_by_id_fakultas($id_fakultas)->result();
        $data['fakultas'] = $this->m_data->data_fakultas()->result();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_edit_penghuni', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function edit_pembayaran($id_pembayaran = null){

        if (!isset($id_pembayaran)) redirect('riwayat_pembayaran');

        $data['judul_halaman'] = 'Edit Pembayaran';
        $data['username'] = $this->session->userdata('username');
        $data['pembayaran'] = $this->m_data->detail_pembayaran(array('id_pembayaran' => $id_pembayaran))->row();

        if (!$data['pembayaran']) show_404();

        $this->load->view('_partials/v_head', $data);
        $this->load->view('_partials/v_header');
        $this->load->view('_partials/v_sidebar', $data);
        $this->load->view('_partials/v_breadcrump', $data);
        $this->load->view('v_edit_pembayaran', $data); //page content
        $this->load->view('_partials/v_footer');
        // $this->load->view('_partials/v_theme-config');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }

    function ubah_pass(){
        $data['judul_halaman'] = 'Ubah Password';
        $data['pesan'] = $this->session->flashdata('pesan');
        $data['username'] = $this->session->userdata('username');

        $this->load->view('_partials/v_head_form', $data);
        $this->load->view('v_ubah_pass');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js_form');
    }

    function tambah_user(){
        if ($this->session->userdata('username') != 'admin') show_404();

        $data['judul_halaman'] = 'Tambah User';
        $data['pesan'] = $this->session->flashdata('pesan');

        $this->load->view('_partials/v_head_form', $data);
        $this->load->view('v_tambah_user');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js_form');
    }
}
