<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_admin');
	}

	public function index()
	{
		$this->pengajuan();
	}

	public function surat()
	{
		$surat = $this->model_admin->data_surat();

		$data = array('title' 		=> 'Data surat' ,
					  'surat' 		=> $surat,
					  'isi'			=> 'admin/surat/index' );

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function tambah_surat()
	{

		$valid = $this->form_validation;
		$valid->set_rules('nama_surat', 'Nama Surat','required',
				array('required'	=> '%s Harus diisi'));
		
		if ($valid->run()) {
			
			$config['upload_path']          = './assets/upload/';
            $config['allowed_types']        = 'pdf|doc|docx';
            $config['max_size']             = 10000;

			$this->upload->initialize($config);
			
			if (!$this->upload->do_upload('file')){
			
			$data = array('title'	=>  'surat',
						  'error'	=>  $this->upload->display_errors(),
						  'isi'		=>	'admin/surat/add' );
	
		$this->load->view('templates/wrapper', $data, FALSE);
		
		}else{

			$file_upload=$this->upload->data();
			$file = $file_upload['file_name'];

			$i = $this->input;
			$data = array(	'nama_surat'	=> $i->post('nama_surat'),
							'file'			=> $file,
		);



			$this->model_admin->tambah_surat($data);
			$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
			redirect(base_url('admin/data-surat'),'refresh');	
		}}
		$data = array(	  'title'	=>  'surat',
						  'isi'		=>	'admin/surat/add' );
	
		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function surat_hapus($id_surat)
	{
			$data = array('id_surat' => $id_surat);
			$this->model_admin->hapus_surat($data);
			$this->session->set_flashdata('sukses', 'Data berhasil Dihapus');
			redirect(base_url('admin/data-surat'),'refresh');	
	}




	// pengajuan
	public function pengajuan()
	{
		$pengajuan = $this->model_admin->data_pengajuan();
		$pengajuan_konfirmasi = $this->model_admin->data_pengajuan_konfirmasi();
		$pengajuan_ditolak = $this->model_admin->data_pengajuan_ditolak();


		$data = array('title' 		=> 'Data Pengajuan' ,
					  'tolak'		=> $pengajuan_ditolak,
					  'konfirmasi'  => $pengajuan_konfirmasi,
					  'pengajuan' 	=> $pengajuan,
					  'isi'			=> 'admin/pengajuan' );

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function konfirmasi_pengajuan($id_pengajuan) {

			$pengajuan = $this->model_admin->detail_pengajuan($id_pengajuan);

			$i = $this->input;
			$data = array(	'id_pengajuan'	=> $id_pengajuan,
							'status'	=> '1',
		);
			$this->model_admin->edit_pengajuan($data);
			$this->session->set_flashdata('sukses', 'Data berhasil diedit');
			redirect(base_url('admin/data-pengajuan'),'refresh');	
		
	}

	public function tolak_pengajuan($id_pengajuan) {

			$pengajuan = $this->model_admin->detail_pengajuan($id_pengajuan);

			$i = $this->input;
			$data = array(	'id_pengajuan'		=> $id_pengajuan,
							'status'			=> '3',
		);
			$this->model_admin->edit_pengajuan($data);
			$this->session->set_flashdata('sukses', 'Data berhasil diedit');
			redirect(base_url('admin/data-pengajuan'),'refresh');	
		
	}

	public function mahasiswa()
	{
		$data = $this->model_admin->data_mahasiswa();

		$data = array('title' => 'Data Mahasiswa' ,
					  'mahasiswa' => $data,
					  'isi'  =>'admin/mahasiswa' );

		$this->load->view('templates/wrapper', $data, FALSE);
	}

	public function mahasiswa_tambah()
	{
			$i = $this->input;
			$data = array(	
							'nama_user'	=> $i->post('nama_user'),
							'nama'		=> $i->post('nama'),
							'nim'		=> $i->post('nim'),
							'username'	=> $i->post('username'),
							'password'	=> sha1($i->post('password')),
							'level'		=> '2',
		);
			$this->model_admin->tambah_mahasiswa($data);
			$this->session->set_flashdata('sukses', 'Data berhasil ditambahkan');
			redirect(base_url('admin/data-mahasiswa'),'refresh');	
		
	}

	public function mahasiswa_hapus($id_user)
	{
			$data = array('id_user' => $id_user);
			$this->model_admin->hapus_mahasiswa($data);
			$this->session->set_flashdata('sukses', 'Data berhasil Dihapus');
			redirect(base_url('admin/data-mahasiswa'),'refresh');	
	}


}

/* End of file C_Admin.php */
/* Location: ./application/controllers/admin/C_Admin.php */