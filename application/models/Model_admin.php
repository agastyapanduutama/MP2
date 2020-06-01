<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {

	public function login($username,$password){
	
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where(array('username' => $username, 
							   'password' => SHA1($password)));
		$query = $this->db->get();
		return $query->row();
	}

	public function data_mahasiswa()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('level', '2');
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail_mahasiswa($id_user)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('id_user', $id_user);
		$this->db->order_by('id_user', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function tambah_mahasiswa($data){
		$this->db->insert('tb_user', $data);
	}

	public function edit_mahasiswa($data) {
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('tb_user', $data);
	}

	public function hapus_mahasiswa($data) {
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('tb_user', $data);
	}

	public function data_pengajuan()
	{
		$this->db->select('*');
		$this->db->from('tb_pengajuan','tb_user');
		$this->db->join('tb_user', 'tb_user.id_user = tb_pengajuan.id_user', 'left');
		$this->db->where('status', '0');
		$this->db->order_by('id_pengajuan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail_pengajuan($id_pengajuan)
	{
		$this->db->select('*');
		$this->db->from('tb_pengajuan');
		$this->db->where('id_pengajuan', $id_pengajuan);
		$this->db->order_by('id_pengajuan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function data_pengajuan_konfirmasi()
	{
		$this->db->select('*');
		$this->db->from('tb_pengajuan','tb_user');
		$this->db->join('tb_user', 'tb_user.id_user = tb_pengajuan.id_user', 'left');
		$this->db->where('status', '1');
		$this->db->order_by('id_pengajuan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function data_pengajuan_ditolak()
	{
		$this->db->select('*');
		$this->db->from('tb_pengajuan','tb_user');
		$this->db->join('tb_user', 'tb_user.id_user = tb_pengajuan.id_user', 'left');
		$this->db->where('status', '3');
		$this->db->order_by('id_pengajuan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}


	public function tambah_pengajuan($data){
		$this->db->insert('tb_pengajuan', $data);
	}

	public function edit_pengajuan($data) {
		$this->db->where('id_pengajuan', $data['id_pengajuan']);
		$this->db->update('tb_pengajuan', $data);
	}

	public function hapus_pengajuan($data) {
		$this->db->where('id_pengajuan', $data['id_pengajuan']);
		$this->db->delete('tb_pengajuan', $data);
	}



	// Surat
	public function data_surat()
	{
		$this->db->select('*');
		$this->db->from('tb_surat');
		$this->db->order_by('id_surat', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail_surat($id_surat)
	{
		$this->db->select('*');
		$this->db->from('tb_surat');
		$this->db->where('id_surat', $id_surat);
		$this->db->order_by('id_surat', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function tambah_surat($data){
		$this->db->insert('tb_surat', $data);
	}

	public function edit_surat($data) {
		$this->db->where('id_surat', $data['id_surat']);
		$this->db->update('tb_surat', $data);
	}

	public function hapus_surat($data) {
		$this->db->where('id_surat', $data['id_surat']);
		$this->db->delete('tb_surat', $data);
	}

}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */