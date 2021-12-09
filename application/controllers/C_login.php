<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    function login(){
        $data['judul_halaman'] = 'Login';
        $data['pesan'] = $this->session->flashdata('pesan');

        if ($data['pesan'] == 'berhasil_logout' or $data['pesan'] == 'berhasil_ubah_pass'){
            $this->session->sess_destroy();
        }
        else if ($this->session->userdata('status') == 'login'){
            redirect (base_url('dasbor'));
        }

        $this->load->view('_partials/v_head_form', $data);
        $this->load->view('v_login');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js_form');
    }

    function aksi_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->m_login->cek_login($username, $password);
        if ($admin->num_rows() > 0){
            $admin = $admin->row();
            $data_session = array(
                'nama' => $admin->nama,
                'username' => $admin->username,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            $this->session->set_flashdata('pesan', 'toastr.success("Selamat datang, Anda masuk sebagai '.$username.'")');
            redirect (base_url('dasbor'));
        }
        else {
            $this->session->set_flashdata('pesan', 'gagal_login');
            redirect (base_url('login'));
        }
    }

    function logout(){
        $this->session->set_flashdata('pesan', 'berhasil_logout');
        redirect (base_url('login'));
    }
}
