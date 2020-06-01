<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'C_Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['keluar'] = 'C_Login/logout';

$route['surat'] = 'mahasiswa/C_Mahasiswa/surat';
$route['surat/kirim'] = 'mahasiswa/C_Mahasiswa/buat_pengajuan';
$route['surat/pengajuan'] = 'mahasiswa/C_Mahasiswa/pengajuan';

$route['dashboard'] = 'mahasiswa/C_Mahasiswa';

$route['profile'] = 'mahasiswa/C_Mahasiswa/profile/';
$route['profile/simpan/'] = 'mahasiswa/C_Mahasiswa/simpan_profile/';


$route['admin/data-mahasiswa'] = 'admin/C_Admin/mahasiswa/';
$route['admin/data-pengajuan'] = 'admin/C_Admin/pengajuan/';
$route['admin/data-surat'] 	   = 'admin/C_Admin/surat/';

$route['admin/surat/tambah'] 	   = 'admin/C_Admin/tambah_surat/';

$route['admin/konfirmasi/'] = 'admin/C_Admin/konfirmasi_pengajuan/';

$route['admin/mahasiswa/tambah'] = 'admin/C_Admin/mahasiswa_tambah';
$route['admin/mahasiswa/edit/'] = 'admin/C_Admin/mahasiswa_edit/';
$route['admin/mahasiswa/hapus/'] = 'admin/C_Admin/mahasiswa_hapus/';