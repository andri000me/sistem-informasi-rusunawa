<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_aksi extends CI_Controller {

    function __construct(){
        parent::__construct();
        if ($this->session->userdata('status') != 'login'){
            redirect (base_url('login'));
        }
        $this->load->model('m_data');
    }

    function get_prodi(){
        $id_fakultas =  $this->input->post('id_fakultas');
        $prodi = $this->m_data->data_prodi_by_id_fakultas($id_fakultas);

        echo '<option></option>';
        foreach ($prodi->result() as $prodi){
            echo '<option value="'.$prodi->id_prodi.'">'.$prodi->nama_prodi.'</option>';
        }
        echo '<option value="9999">Lainnya</option>';
    }

    function get_kamar(){
        $lantai = $this->input->post('lantai');
        $kamar = $this->m_data->data_kamar_by_lantai($lantai);
        echo json_encode($kamar->result());
    }

    function get_detail_kamar(){
        $no_kamar = $this->input->post('no_kamar');
        $detail_kamar = $this->m_data->detail_penghuni(array('no_kamar' => $no_kamar, 'status' => 'Penghuni'));
        echo json_encode ($detail_kamar->result());
    }

    function get_detail_penghuni(){
        $id_penghuni = $this->input->post('id_penghuni');
        $penghuni = $this->m_data->detail_penghuni(array('id' => $id_penghuni))->row();
        echo json_encode($penghuni);
    }

    function aksi_edit_harga_kamar(){
        $lantai = $this->input->post('lantai');
        $harga = $this->input->post('harga');

        if ($this->m_data->update_harga($lantai, $harga) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperbarui harga kamar lantai '.$lantai.' menjadi Rp'.number_format($harga, 0, ',', '.').' per bulan")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-harga'));
    }

    function aksi_tambah_kamar(){
        $no_kamar       = $this->input->post('no_kamar');
        $gedung         = $this->input->post('gedung');
        $id_tipe        = $this->input->post('id_tipe');

        $data = array(
            'no_kamar'  => $no_kamar,
            'gedung'    => $gedung,
            'id_tipe'   => $id_tipe
        );

        if ($this->m_data->insert_kamar($data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambah kamar '.$no_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-kamar'));
    }

    function aksi_edit_kamar(){
        $no_kamar       = $this->input->post('no_kamar');
        $no_kamar_baru  = $this->input->post('no_kamar_baru');
        $gedung         = $this->input->post('gedung');
        $id_tipe        = $this->input->post('id_tipe');

        $data = array(
            'no_kamar'  => $no_kamar_baru,
            'gedung'    => $gedung,
            'id_tipe'   => $id_tipe
        );

        if ($this->m_data->update_kamar($no_kamar, $data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperbarui kamar '.$no_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-kamar'));
    }

    function aksi_hapus_kamar($no_kamar = null){
        if ($this->m_data->delete_kamar($no_kamar) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus kamar '.$no_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-kamar'));
    }

    function aksi_tambah_gedung(){
        $gedung         = $this->input->post('gedung');
        $nama_gedung    = $this->input->post('nama_gedung');

        $data = array(
            'gedung'        => $gedung,
            'nama_gedung'   => $nama_gedung
        );

        if ($this->m_data->insert_gedung($data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambah '.$nama_gedung.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-gedung'));
    }

    function aksi_edit_gedung(){
        $gedung         = $this->input->post('gedung');
        $gedung_baru    = $this->input->post('gedung_baru');
        $nama_gedung    = $this->input->post('nama_gedung');

        $data = array(
            'gedung'        => $gedung_baru,
            'nama_gedung'   => $nama_gedung
        );

        if ($this->m_data->update_gedung($gedung, $data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperbarui '.$nama_gedung.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-gedung'));
    }

    function aksi_hapus_gedung($gedung = null){
        if ($this->m_data->delete_gedung($gedung) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus Kode Gedung '.$gedung.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan. Pastikan tidak ada kamar di gedung tersebut.")');
        }
        redirect (base_url('daftar-gedung'));
    }

    function aksi_tambah_tipe(){
        $tipe_kamar     = $this->input->post('tipe_kamar');
        $harga          = $this->input->post('harga');

        $data = array(
            'tipe_kamar'    => $tipe_kamar,
            'harga '        => $harga
        );

        if ($this->m_data->insert_tipe($data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambah tipe kamar '.$tipe_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-tipe'));
    }

    function aksi_edit_tipe(){
        $id_tipe    = $this->input->post('id_tipe');
        $tipe_kamar = $this->input->post('tipe_kamar');
        $harga      = $this->input->post('harga');

        $data = array(
            'tipe_kamar'    => $tipe_kamar,
            'harga'         => $harga
        );

        $tipe = $this->m_data->data_tipe_kamar(array('id_tipe' => $id_tipe))->row();

        if ($this->m_data->update_tipe($id_tipe, $data) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperbarui tipe kamar '.$tipe->tipe_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-tipe'));
    }

    function aksi_hapus_tipe($id_tipe = null){

        $tipe = $this->m_data->data_tipe_kamar(array('id_tipe' => $id_tipe))->row();

        if ($this->m_data->delete_tipe($id_tipe) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus tipe kamar '.$tipe->tipe_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('daftar-tipe'));
    }

    function aksi_tambah_penghuni(){
        $no_kamar       = $this->input->post('no_kamar');
        $isi_kamar      = $this->input->post('isi_kamar');
        $nama           = $this->input->post('nama');
        $nim            = $this->input->post('nim');
        $id_fakultas    = $this->input->post('id_fakultas');
        $id_prodi       = $this->input->post('id_prodi');
        $tempat_lahir   = $this->input->post('tempat_lahir');
        $tgl_lahir      = $this->input->post('tgl_lahir');
        $agama          = ($this->input->post('agama') != 'other') ? $this->input->post('agama') : $this->input->post('agama_lainnya');
        $alamat         = $this->input->post('alamat');
        $no             = $this->input->post('no');
        $nama_ortu      = $this->input->post('nama_ortu');
        $pekerjaan_ortu = $this->input->post('pekerjaan_ortu');
        $alamat_ortu    = $this->input->post('alamat_ortu');
        $no_ortu        = $this->input->post('no_ortu');
        $kategori       = $this->input->post('kategori');
        $tgl_masuk      = $this->input->post('tgl_masuk');
        $tgl_keluar     = $this->input->post('tgl_keluar');
        $masa_huni      = $this->input->post('masa_huni');
        $biaya          = $this->input->post('biaya');

        $data = array(
            'no_kamar'      => $no_kamar,
            'isi_kamar'     => $isi_kamar,
            'nama'          => $nama,
            'nim'           => $nim,
            'id_fakultas'   => $id_fakultas,
            'id_prodi'      => $id_prodi,
            'tempat_lahir'  => $tempat_lahir,
            'tgl_lahir'     => $tgl_lahir,
            'agama'         => $agama,
            'alamat'        => $alamat,
            'no'            => $no,
            'nama_ortu'     => $nama_ortu,
            'pekerjaan_ortu'=> $pekerjaan_ortu,
            'alamat_ortu'   => $alamat_ortu,
            'no_ortu'       => $no_ortu,
            'kategori'      => $kategori,
            'tgl_masuk'     => $tgl_masuk,
            'tgl_keluar'    => $tgl_keluar,
            'biaya'         => $biaya,
            'status'        => 'Penghuni'
        );

        $status_awal_kamar = ($this->m_data->cek_kamar($no_kamar)->row())->status;

        if ($status_awal_kamar == 'sendiri' or $status_awal_kamar == 'terisi2'){
            $this->session->set_flashdata('pesan', 'toastr.warning("Kamar '.$no_kamar.' sudah terisi penuh, silakan pilih kamar lain")');
            redirect (base_url('pilih-kamar'));
        }
        else if ($this->m_data->insert_penghuni($data) == true){

            switch ($status_awal_kamar){
                case 'kosong':
                    $status_kamar = ($isi_kamar == '2') ? 'terisi1' : 'sendiri';
                break;

                case 'terisi1':
                    $status_kamar = 'terisi2';
                break;
            }

            $this->m_data->update_status_kamar($no_kamar, $status_kamar);

            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambah penghuni '.$nama.' pada kamar '.$no_kamar.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('pilih-kamar'));
    }

    function aksi_edit_penghuni(){
        $id             = $this->input->post('id');
        $nama           = $this->input->post('nama');
        $nim            = $this->input->post('nim');
        $pilihan        = $this->input->post('pilihan1');
        $status         = $this->input->post('status');

        switch ($pilihan){
            case "typo":
                $no_kamar       = $this->input->post('no_kamar_lama');
                $isi_kamar      = $this->input->post('isi_kamar');
                $id_fakultas    = $this->input->post('id_fakultas');
                $id_prodi       = $this->input->post('id_prodi');
                $tempat_lahir   = $this->input->post('tempat_lahir');
                $tgl_lahir      = $this->input->post('tgl_lahir');
                $agama          = ($this->input->post('agama') != 'other') ? $this->input->post('agama') : $this->input->post('agama_lainnya');
                $alamat         = $this->input->post('alamat');
                $no             = $this->input->post('no');
                $nama_ortu      = $this->input->post('nama_ortu');
                $pekerjaan_ortu = $this->input->post('pekerjaan_ortu');
                $alamat_ortu    = $this->input->post('alamat_ortu');
                $no_ortu        = $this->input->post('no_ortu');
                $tgl_masuk      = $this->input->post('tgl_masuk');
                $tgl_keluar     = $this->input->post('tgl_keluar');
                $kategori       = $this->input->post('kategori');
                $biaya          = $this->input->post('biaya');

                $data = array(
                    'isi_kamar'     => $isi_kamar,
                    'nama'          => $nama,
                    'nim'           => $nim,
                    'id_fakultas'   => $id_fakultas,
                    'id_prodi'      => $id_prodi,
                    'tempat_lahir'  => $tempat_lahir,
                    'tgl_lahir'     => $tgl_lahir,
                    'agama'         => $agama,
                    'alamat'        => $alamat,
                    'no'            => $no,
                    'nama_ortu'     => $nama_ortu,
                    'pekerjaan_ortu'=> $pekerjaan_ortu,
                    'alamat_ortu'   => $alamat_ortu,
                    'no_ortu'       => $no_ortu,
                    'tgl_masuk'     => $tgl_masuk,
                    'tgl_keluar'    => $tgl_keluar,
                    'kategori'      => $kategori,
                    'biaya'         => $biaya
                );

                if ($this->m_data->update_penghuni($id, $data) == true){
                    
                    if ($status == 'Penghuni'){
                        $status_awal_kamar = ($this->m_data->cek_kamar($no_kamar)->row())->status;

                        if ($isi_kamar == '2' and $status_awal_kamar == 'sendiri'){
                            $status_kamar = 'terisi1';
                        }
                        else if ($isi_kamar == '1' and $status_awal_kamar == 'terisi1'){
                            $status_kamar = 'sendiri';
                        }
                        else {
                            $status_kamar = $status_awal_kamar;
                        }

                        $this->m_data->update_status_kamar($no_kamar, $status_kamar);
                    }

                    $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperbarui data penghuni '.$nama.' pada kamar '.$no_kamar.'")');
                }
                else {
                    $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
                }

                if ($status == 'Penghuni'){
                    redirect (base_url('daftar-penghuni'));
                }
                else {
                    redirect (base_url('daftar-ekspenghuni'));
                }
            break;

            case "transaksi":
                $no_kamar = $this->input->post('no_kamar_lama');
                $tgl_bayar = $this->input->post('tgl_bayar');
                $bayar = $this->input->post('bayar');
                $ket = $this->input->post('ket');
                $data_pembayaran = array(
                    'id_penghuni'   => $id,
                    'tgl_bayar'     => $tgl_bayar,
                    'bayar'         => $bayar,
                    'ket'           => $ket
                );

                if ($this->m_data->insert_pembayaran($data_pembayaran) == true){
                    $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambahkan pembayaran tanggal '.$tgl_bayar.' dari penghuni '.$nama.'")');
                }
                else {
                    $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
                }

                redirect (base_url('riwayat-pembayaran'));
            break;

            case "pk":

                $data_pindah_kamar = array(
                    'no_kamar' => $no_kamar_baru,
                    'isi_kamar' => $isi_kamar
                );

                if ($this->m_data->update_penghuni($id, $data_pindah_kamar) == true){

                    if ($status == 'Penghuni'){
                        $no_kamar_lama = $this->input->post('no_kamar_lama');
                        $no_kamar_baru = $this->input->post('no_kamar_baru');

                        $status_awal_kamar_lama = ($this->m_data->cek_kamar($no_kamar_lama)->row())->status;
                        $status_awal_kamar_baru = ($this->m_data->cek_kamar($no_kamar_baru)->row())->status;

                        switch ($status_awal_kamar_lama){
                            case 'sendiri':
                            case 'terisi1':
                                $status_kamar_lama = 'kosong';
                            break;
        
                            case 'terisi2':
                                $status_kamar_lama = 'terisi1';
                            break;
                        }

                        $penghuni_sekarang = $this->m_data->detail_penghuni(array('id' => $id))->row();
        
                        switch ($status_awal_kamar_baru){
                            case 'kosong':
                                $isi_kamar = $penghuni_sekarang->isi_kamar;
                                $status_kamar_baru = ($penghuni_sekarang->isi_kamar == '2') ? 'terisi1' : 'sendiri';
                            break;

                            case 'terisi1':
                                $isi_kamar = '2';
                                $status_kamar_baru = 'terisi2';
                            break;
                        }

                        $this->m_data->update_status_kamar($no_kamar_lama, $status_kamar_lama);
                        $this->m_data->update_status_kamar($no_kamar_baru, $status_kamar_baru);
                    }

                    $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memindahkan kamar penghuni '.$nama.' dari '.$no_kamar_lama.' ke '.$no_kamar_baru.'")');
                }
                else {
                    $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
                }

                redirect (base_url('pilih-kamar'));
            break;
        }
    }

    function aksi_hapus_penghuni($id = null){

        if (!isset($id)) redirect (base_url('daftar-penghuni'));

        $penghuni = $this->m_data->detail_penghuni(array('id' => $id))->row();

        if (!$penghuni){
            show_404();
        }
        else {
            if ($this->m_data->delete_penghuni($id) == true){
                $no_kamar = $penghuni->no_kamar;

                if ($penghuni->status == 'Penghuni'){
                    $kamar = $this->m_data->cek_kamar($no_kamar)->row();
                    switch ($kamar->status){
                        case 'sendiri':
                        case 'terisi1':
                            $status_kamar = 'kosong';
                        break;
    
                        case 'terisi2':
                            $status_kamar = 'terisi1';
                        break;
                    }
                    $this->m_data->update_status_kamar($no_kamar, $status_kamar);
                    $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus penghuni '.$penghuni->nama.' dari kamar '.$no_kamar.'")');
                }
                else {
                    $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus eks-penghuni '.$penghuni->nama.'")');
                }
            }
            else {
                $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
            }

            if ($penghuni->status == 'Penghuni'){
                redirect (base_url('daftar-penghuni'));
            }
            else{
                redirect (base_url('daftar-ekspenghuni'));
            }
        }
    }

    function perpanjang($id = null){

        if (!isset($id)) redirect (base_url('pilih-kamar'));

        $penghuni = $this->m_data->detail_penghuni(array('id' => $id, 'status' => 'Penghuni'))->row();

        if (!$penghuni){
            show_404();
        }
        else {
            $harga_kamar = (($this->m_data->data_harga_kamar_by_no_kamar($penghuni->no_kamar)->row())->harga)*12/($penghuni->isi_kamar);
            $biaya_lama = $penghuni->biaya;
            $biaya_baru = $biaya_lama + $harga_kamar;

            $tgl_keluar_lama = date('d-m-Y', strtotime($penghuni->tgl_keluar));
            $tgl_keluar_baru = date('d-m-Y', strtotime($tgl_keluar_lama.' + 1 year'));
            $data = array(
                'tgl_keluar' => $tgl_keluar_baru,
                'biaya'      => $biaya_baru
            );
            if ($this->m_data->update_penghuni($id, $data) == true){
                $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperpanjang masa huni '.$penghuni->nama.' pada kamar '.$penghuni->no_kamar.'")');
            }
            else {
                $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
            }
            redirect (base_url('pilih-kamar'));
        }
    }

    function eks_penghuni($id = null){

        if (!isset($id)) redirect (base_url('pilih-kamar'));

        $penghuni = $this->m_data->detail_penghuni(array('id' => $id, 'status' => 'Penghuni'))->row();

        if (!$penghuni){
            show_404();
        }
        else {
            if ($this->m_data->update_penghuni($id, array('status' => 'Eks-Penghuni')) == true){
                $no_kamar = $penghuni->no_kamar;
                $kamar = $this->m_data->cek_kamar($no_kamar)->row();

                switch ($kamar->status){
                    case 'sendiri':
                    case 'terisi1':
                        $status_kamar = 'kosong';
                    break;

                    case 'terisi2':
                        $status_kamar = 'terisi1';
                    break;
                }

                $this->m_data->update_status_kamar($no_kamar, $status_kamar);

                $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menyelesaikan masa huni '.$penghuni->nama.' dari kamar '.$no_kamar.'")');
            }
            else {
                $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
            }
            redirect (base_url('pilih-kamar'));
        }
    }

    function aksi_edit_pembayaran(){
        $id_penghuni = $this->input->post('id_penghuni');
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $no_kamar = $this->input->post('no_kamar');
        $biaya = $this->input->post('biaya');

        $id_pembayaran = $this->input->post('id_pembayaran');
        $tgl_bayar = $this->input->post('tgl_bayar');
        $bayar = $this->input->post('bayar');
        $ket = $this->input->post('ket');

        $data_penghuni = array(
            'biaya' => $biaya
        );

        $data_pembayaran = array(
            'tgl_bayar' => $tgl_bayar,
            'bayar' => $bayar,
            'ket'   => $ket
        );

        if ($this->m_data->update_penghuni($id_penghuni, $data_penghuni) == true and $this->m_data->update_pembayaran($id_pembayaran, $data_pembayaran) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil memperbarui pembayaran tanggal '.$tgl_bayar.' dari penghuni '.$nama.'")');
        }
        else {
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
        }
        redirect (base_url('riwayat-pembayaran'));
    }

    function aksi_hapus_pembayaran($id_pembayaran = null){

        if (!isset($id_pembayaran)) redirect (base_url('riwayat-pembayaran'));

        $pembayaran = $this->m_data->detail_pembayaran(array('id_pembayaran' => $id_pembayaran))->row();

        if (!$pembayaran){
            show_404();
        }
        else {
            if ($this->m_data->delete_pembayaran($id_pembayaran) == true){
                $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus pembayaran tanggal '.$pembayaran->tgl_bayar.' dari penghuni '.$pembayaran->nama.'")');
            }
            else {
                $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
            }
            redirect (base_url('riwayat-pembayaran'));
        }
    }

    function aksi_ubah_pass(){
        $username = $this->session->userdata('username');
        $password = $this->input->post('password');
        $password_baru = sha1($this->input->post('password_baru'));

        $this->load->model('m_login');
        $cek = $this->m_login->cek_login($username, $password);

        if ($cek->num_rows() > 0){
            if ($this->m_data->update_password($username, $password_baru) == true){
                $this->session->set_flashdata('pesan', 'berhasil_ubah_pass');
                redirect (base_url('login'));
            }
            else{
                echo 'Terjadi Kesalahan';
            }
        }
        else {
            $this->session->set_flashdata('pesan', 'gagal_ubah_pass');
            redirect (base_url('ubah-pass'));
        }
    }

    function aksi_tambah_user(){
        $nama           = $this->input->post('nama');
        $username       = $this->input->post('username');
        $password       = sha1($this->input->post('password'));

        $user_baru = array(
            'nama'           => $nama,
            'username'       => $username,
            'password'       => $password
        );

        if ($this->m_data->insert_user($user_baru) == true){
            $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menambah user '.$nama.' dengan username '.$username.'")');
            redirect (base_url('daftar-user'));
        }
        else {
            $this->session->set_flashdata('pesan', 'gagal_tambah_user');
            redirect (base_url('tambah-user'));
        }
    }

    function aksi_hapus_user($username = null){

        if (!isset($username)) redirect('daftar-user');

        $user = $this->m_data->data_user(array('username' => $username))->row();

        if (!$user){
            show_404();
        }
        else if ($user->username == 'admin'){
            $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
            redirect (base_url('daftar-user'));
        }
        else {
            if ($this->m_data->delete_user($username) == true){
                $this->session->set_flashdata('pesan', 'toastr.success("Berhasil menghapus user '.$user->nama.' dengan username '.$user->username.'")');
            }
            else {
                $this->session->set_flashdata('pesan', 'toastr.error("Terjadi kesalahan")');
            }
            redirect (base_url('daftar-user'));
        }
    }
}

