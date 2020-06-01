<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model {

	public function login($username,$password){
	
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where(array('username' => $username, 
							   'password' => SHA1($password)));
		$query = $this->db->get();
		return $query->row();
	}

	public function user()
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->order_by('id_user', 'DESC');	
		$query = $this->db->get();
		return $query->result();
	}

	public function tambah_user($data){
		$this->db->insert('tb_user', $data);
	}

	public function detail_user($id_user)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('id_user', $id_user);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_user($data) {
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('tb_user', $data);
	}

	public function hapus_user($data) {
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('tb_user', $data);
	}
	

	public function pengajuan()
	{
		$this->db->select('*');
		$this->db->from('tb_pengajuan');
		$this->db->where('id_user',$_SESSION['id_user']);
		$this->db->order_by('id_pengajuan', 'DESC');	
		$query = $this->db->get();
		return $query->result();
	}

	public function cetak_surat()
	{
		$this->db->select('*');
		$this->db->from('tb_pengajuan','tb_surat');
		$this->db->join('tb_surat', 'tb_surat.nama_surat = tb_pengajuan.jenis', 'left');
		$this->db->where('status', '1');
		$this->db->where('id_user', $_SESSION['id_user']);
		$this->db->order_by('id_pengajuan', 'DESC');	
		$query = $this->db->get();
		return $query->result();
	}

	public function tambah_pengajuan($data){
		$this->db->insert('tb_pengajuan', $data);
	}

	public function detail_pengajuan($id_pengajuan)
	{
		$this->db->select('*');
		$this->db->from('tb_pengajuan');
		$this->db->where('id_pengajuan', $id_pengajuan);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_pengajuan($data) {
		$this->db->where('id_pengajuan', $data['id_pengajuan']);
		$this->db->update('tb_pengajuan', $data);
	}

	public function hapus_pengajuan($data) {
		$this->db->where('id_pengajuan', $data['id_pengajuan']);
		$this->db->delete('tb_pengajuan', $data);
	}


	

}

/* End of file Model_admin.php */
/* Location: ./application/models/Model_admin.php */