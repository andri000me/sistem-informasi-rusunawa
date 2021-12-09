<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

    public function index(){
        $data['judul_halaman'] = 'Halaman Tidak Ditemukan';
        $this->load->view('_partials/v_head', $data);
        $this->load->view('errors/404.php');
        $this->load->view('_partials/v_preloader');
        $this->load->view('_partials/v_js');
    }
}
