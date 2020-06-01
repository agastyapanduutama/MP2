<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_mahasiswa');
		$this->load->model('model_admin');
	}

	public function index()
	{
		$this->surat();		
	}

	public function profile()
	{
		
		$data = array('title'	=>  'Profil',
					  'isi'		=>	'mahasiswa/profil');
		$this->load->view('templates/wrapper', $data, FALSE);
		
	}

	public function cetak()
	{
		
	}

	public function simpan_profile($id_user)
	{
		$user = $this->model_mahasiswa->detail_user($id_user);
		$i = $this->input;
			$data = array(	
				'id_user'			=> $id_user,
				'nama_user'			=> $i->post('nama_user'),
				'nama'				=> $i->post('nama'),
				'nim'				=> $i->post('nim'),
				'username'			=> $i->post('username'),
				'password'			=> SHA1($i->post('password')),
		);
			$this->model_mahasiswa->edit_user($data);
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			$this->session->set_userdata('nama_user',$i->post('nama_user'));
			$this->session->set_userdata('nama',$i->post('nama'));
			$this->session->set_userdata('nim',$i->post('nim'));
			$this->session->set_userdata('username',$i->post('username'));
			$this->session->set_userdata('password',$i->post('password'));
			redirect(base_url('dashboard'),'refresh');	
	}

	public function surat()
	{
		$pengajuan = $this->model_mahasiswa->cetak_surat();

		$data = array('title' => 'Cetak Surat',
					  'pengajuan' => $pengajuan,
					  'isi' => 'mahasiswa/surat' , );

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function pengajuan()
	{
		$surat = $this->model_admin->data_surat();
		$pengajuan = $this->model_mahasiswa->pengajuan();

		$data = array('title' => 'Pengajuan Surat',
					  'surat' => $surat,
					  'pengajuan' => $pengajuan,
					  'isi' => 'mahasiswa/pengajuan' , );

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function buat_pengajuan()
	{
		$i = $this->input;
			$data = array(	
				'id_user'	=> $_SESSION['id_user'],
				// 'nim'	=> $_SESSION['nim'],
				'jenis'	=> $i->post('jenis'),
				'status'=> '0',
		);
			$this->model_mahasiswa->tambah_pengajuan($data);
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
			redirect(base_url('surat/pengajuan'),'refresh');	
	}

}

/* End of file C_Mahasiswa.php */
/* Location: ./application/controllers/mahasiswa/C_Mahasiswa.php */