<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_pembayaran extends CI_Model
{

	public function pembayaran()
	{
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->order_by('id_pembayaran', 'desc');
		return $this->db->get()->result();
	}

	// Add a new item
	public function add($data)
	{
		$this->db->insert('pembayaran', $data);
	}

	public function detail($id_pembayaran)
	{
		$this->db->select('*');
		$this->db->from('pembayaran');
		$this->db->where('id_pembayaran', $id_pembayaran);
		return $this->db->get()->row();
	}
	//Update one item
	public function update($data = NULL)
	{
		$this->db->where('id_pembayaran', $data['id_pembayaran']);
		$this->db->update('pembayaran', $data);
	}

	//Delete one item
	public function delete($data = NULL)
	{
		$this->db->where('id_pembayaran', $data['id_pembayaran']);
		$this->db->delete('pembayaran', $data);
	}
}

/* End of file M_konten.php */
