<?php

defined('BASEPATH') or exit('No dirct script access allowed');

class M_auth extends CI_Model
{

	public function siswa_login($email, $password_siswa)
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->where(array('email' => $email, 'password_siswa' => $password_siswa));
		return $this->db->get()->row();
	}
	public function user_login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('username' => $username, 'password' => $password));
		return $this->db->get()->row();
	}
	public function register($data)
	{
		$this->db->insert('calon_siswa', $data);
	}

	public function profil()
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->where('id_siswa', $this->session->userdata('id_siswa'));
		return $this->db->get()->result();
	}

	public function user()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id_user', 'desc');
		return $this->db->get()->result();
	}
	public function add($data)
	{
		$this->db->insert('user', $data);
	}
	public function detail_user($id_user)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id_user', $id_user);
		return $this->db->get()->row();
	}
	public function update($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->update('user', $data);
	}
	public function delete($data)
	{
		$this->db->where('id_user', $data['id_user']);
		$this->db->delete('user', $data);
	}
}
