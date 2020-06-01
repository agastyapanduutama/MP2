<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auntentikasi
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function login($username,$password)
	{
		$check = $this->ci->model_admin->login($username,$password);
		if ($check) {
			$id_user 	= $check->id_user;
			$nama_user	= $check->nama_user;
			$level		= $check->level;
			$nim		= $check->nim;
			$nama		= $check->nama;
			
			$this->ci->session->set_userdata('id_user',$id_user);
			$this->ci->session->set_userdata('nama_user',$nama_user);
			$this->ci->session->set_userdata('username',$username);
			$this->ci->session->set_userdata('level',$level);
			$this->ci->session->set_userdata('nim',$nim);
			$this->ci->session->set_userdata('nama',$nama);

			redirect(base_url('C_Login/cek'),'refresh');
		}else{
			$this->ci->session->set_flashdata('warning', 'Login salah, periksa username dan password');
			redirect(base_url('C_Login/login'),'refresh');
		}
	}

	public function cek_login()
	{
		if ($this->ci->session->userdata('username') =="") {
			$this->ci->session->set_flashdata('warning', 'Anda harus login terlebih dahulu');
			redirect(base_url('C_Login/login'),'refresh');
		}
	}

	public function logout() 
	{
			$this->ci->session->unset_userdata('id_user');
			$this->ci->session->unset_userdata('nama_user');
			$this->ci->session->unset_userdata('username');
			$this->ci->session->set_flashdata('success', 'Anda sudah keluar');
			redirect(base_url('C_Login/login'),'refresh');
	}
	

}

/* End of file Auntentikasi.php */
/* Location: ./application/libraries/Auntentikasi.php */
