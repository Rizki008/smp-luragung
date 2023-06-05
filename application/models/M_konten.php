<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_konten extends CI_Model
{

	public function konten()
	{
		$this->db->select('*');
		$this->db->from('konten');
		$this->db->order_by('id_konten', 'desc');
		return $this->db->get()->result();
	}

	// Add a new item
	public function add($data)
	{
		$this->db->insert('konten', $data);
	}

	public function detail($id_konten)
	{
		$this->db->select('*');
		$this->db->from('konten');
		$this->db->where('id_konten', $id_konten);
		return $this->db->get()->row();
	}
	//Update one item
	public function update($data = NULL)
	{
		$this->db->where('id_konten', $data['id_konten']);
		$this->db->update('konten', $data);
	}

	//Delete one item
	public function delete($data = NULL)
	{
		$this->db->where('id_konten', $data['id_konten']);
		$this->db->delete('konten', $data);
	}
}

/* End of file M_konten.php */
