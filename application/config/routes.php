<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

$route['dasbor'] = 'c_admin/dasbor';
$route['daftar-user'] = 'c_admin/daftar_user';
$route['send-email'] = 'c_admin/send_email';                                // test verif email
$route['pilih-kamar'] = 'c_admin/pilih_kamar';
$route['daftar-gedung'] = 'c_admin/daftar_gedung';                          // baru
$route['daftar-kamar'] = 'c_admin/daftar_kamar';                            // baru
$route['daftar-tipe'] = 'c_admin/daftar_tipe';                              // baru
$route['daftar-harga'] = 'c_admin/daftar_harga';
$route['daftar-penghuni'] = 'c_admin/daftar_penghuni';
$route['daftar-ekspenghuni'] = 'c_admin/daftar_ekspenghuni';
$route['riwayat-pembayaran'] = 'c_admin/riwayat_pembayaran';
$route['laporan-keuangan'] = 'c_admin/laporan_keuangan';

$route['daftar-kamar-cetak'] = 'c_admin/daftar_kamar_cetak';
$route['daftar-penghuni-cetak'] = 'c_admin/daftar_penghuni_cetak';
$route['daftar-ekspenghuni-cetak'] = 'c_admin/daftar_ekspenghuni_cetak';
$route['riwayat-pembayaran-cetak'] = 'c_admin/riwayat_pembayaran_cetak';
$route['laporan-keuangan-cetak'] = 'c_admin/laporan_keuangan_cetak';

$route['ubah-pass'] = 'c_admin/ubah_pass';
$route['tambah-user'] = 'c_admin/tambah_user';
$route['tambah-kamar'] = 'c_admin/tambah_kamar';                            // baru
$route['tambah-gedung'] = 'c_admin/tambah_gedung';                          // baru
$route['tambah-tipe'] = 'c_admin/tambah_tipe';                              // baru
$route['tambah-penghuni/(:any)'] = 'c_admin/tambah_penghuni/$1';
$route['edit-penghuni/(:num)'] = 'c_admin/edit_penghuni/$1';
$route['edit-pembayaran/(:num)'] = 'c_admin/edit_pembayaran/$1';
$route['edit-harga-kamar/(:any)'] = 'c_admin/edit_harga_kamar/$1';
$route['edit-kamar/(:any)'] = 'c_admin/edit_kamar/$1';                      // baru
$route['edit-gedung/(:any)'] = 'c_admin/edit_gedung/$1';                    // baru
$route['edit-tipe/(:num)'] = 'c_admin/edit_tipe/$1';                        // baru

$route['get-prodi'] = 'c_aksi/get_prodi';
$route['get-kamar'] = 'c_aksi/get_kamar';
$route['get-detail-kamar'] = 'c_aksi/get_detail_kamar';
$route['get-detail-penghuni'] = 'c_aksi/get_detail_penghuni';
$route['aksi-tambah-penghuni'] = 'c_aksi/aksi_tambah_penghuni';
$route['aksi-edit-penghuni'] = 'c_aksi/aksi_edit_penghuni';
$route['aksi-hapus-penghuni/(:num)'] = 'c_aksi/aksi_hapus_penghuni/$1';
$route['perpanjang/(:num)'] = 'c_aksi/perpanjang/$1';
$route['eks-penghuni/(:num)'] = 'c_aksi/eks_penghuni/$1';
$route['aksi-edit-pembayaran'] = 'c_aksi/aksi_edit_pembayaran';
$route['aksi-hapus-pembayaran/(:num)'] = 'c_aksi/aksi_hapus_pembayaran/$1';
$route['aksi-ubah-pass'] = 'c_aksi/aksi_ubah_pass';
$route['aksi-tambah-user'] = 'c_aksi/aksi_tambah_user';
$route['aksi-hapus-user/(:any)'] = 'c_aksi/aksi_hapus_user/$1';
$route['aksi-tambah-kamar'] = 'c_aksi/aksi_tambah_kamar';                   // baru
$route['aksi-edit-kamar'] = 'c_aksi/aksi_edit_kamar';                       // baru
$route['aksi-hapus-kamar/(:any)'] = 'c_aksi/aksi_hapus_kamar/$1';           // baru
$route['aksi-tambah-gedung'] = 'c_aksi/aksi_tambah_gedung';                 // baru
$route['aksi-edit-gedung'] = 'c_aksi/aksi_edit_gedung';                     // baru
$route['aksi-hapus-gedung/(:any)'] = 'c_aksi/aksi_hapus_gedung/$1';         // baru
$route['aksi-tambah-tipe'] = 'c_aksi/aksi_tambah_tipe';                     // baru
$route['aksi-edit-tipe'] = 'c_aksi/aksi_edit_tipe';                         // baru
$route['aksi-hapus-tipe/(:num)'] = 'c_aksi/aksi_hapus_tipe/$1';             // baru
$route['aksi-edit-harga-kamar'] = 'c_aksi/aksi_edit_harga_kamar';

$route['login'] = 'c_login/login';
$route['logout'] = 'c_login/logout';
$route['aksi-login'] = 'c_login/aksi_login';

$route['(c_admin|c_aksi|c_login)/(:any)'] = 'error404';

$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;
