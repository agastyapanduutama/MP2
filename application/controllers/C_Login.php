<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Login extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
		$this->load->library('auntentikasi');
	}


	public function index()
	{
		$this->load->view('v_login');
	}


	public function login()
	{
		$this->form_validation->set_rules('username', 'username','required',
				array('required' => '%s Harus Diisi'));
		$this->form_validation->set_rules('password', 'password','required',
				array('required' => '%s Harus Diisi'));

		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->auntentikasi->login($username,$password);
		}
		$this->load->view('v_login');
	}


	public function cek()
	{

		$level = $_SESSION['level'];

		if ($level == '1') {
			redirect(base_url('admin/C_Admin'),'refresh');
		}elseif($level == '2'){
			redirect(base_url('mahasiswa/C_Mahasiswa'),'refresh');	
		}
	}

	public function logout()
	{
		$this->auntentikasi->logout();
	}

}

/* End of file C_Login.php */
/* Location: ./application/controllers/C_Login.php */