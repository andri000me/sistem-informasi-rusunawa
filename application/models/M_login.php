<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    function cek_login($username, $password){
        return $this->db->get_where('admin', array('username' => $username, 'password' => sha1($password)));
    }
}
