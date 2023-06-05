<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_chatting extends CI_Model
{
	public function chat()
	{
		$this->db->select('*');
		$this->db->from('chatting');
		$this->db->join('calon_siswa', 'chatting.id_siswa = calon_siswa.id_siswa', 'left');
		$this->db->where('chatting.id_siswa=', $this->session->userdata('id_siswa'));
		return $this->db->get()->result();
	}
	public function siswa_send($data)
	{
		$this->db->insert('chatting', $data);
	}

	public function jml_chatting()
	{
		$this->db->select('*');
		$this->db->from('chatting');
		$this->db->group_by('id_siswa');
		return $this->db->get()->num_rows();
	}

	public function daftar_chat()
	{
		$this->db->select('*');
		$this->db->from('chatting');
		$this->db->join('calon_siswa', 'chatting.id_siswa = calon_siswa.id_siswa', 'left');
		$this->db->group_by('chatting.id_siswa');
		return $this->db->get()->result();
	}

	public function view_chatting($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('chatting');
		$this->db->join('calon_siswa', 'chatting.id_siswa = calon_siswa.id_siswa', 'left');
		$this->db->where('chatting.id_siswa', $id_siswa);
		return $this->db->get()->result();
	}
}

/* End of file mChatting.php */
