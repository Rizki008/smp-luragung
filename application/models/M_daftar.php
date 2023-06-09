<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_daftar extends CI_Model
{
	public function gambar()
	{
		$this->db->select('pendaftaran.*,COUNT(persyaratan.id_pendaftaran)as total_gambar');
		$this->db->from('pendaftaran');
		$this->db->join('persyaratan', 'persyaratan.id_pendaftaran = pendaftaran.id_pendaftaran', 'left');
		$this->db->group_by('pendaftaran.id_pendaftaran');
		$this->db->order_by('pendaftaran.id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}

	// List all your items
	public function detail($id_pendaftaran)
	{
		$this->db->select('*');
		$this->db->from('pendaftaran');
		$this->db->where('id_pendaftaran', $id_pendaftaran);
		return $this->db->get()->row();
	}

	public function detail_gambar($id_pendaftaran)
	{
		$this->db->select('*');
		$this->db->from('persyaratan');
		$this->db->where('id_pendaftaran', $id_pendaftaran);
		return $this->db->get()->result();
	}

	// Add a new item
	public function add($data)
	{
		$this->db->insert('pendaftaran', $data);
	}
	// Add a new item
	public function add_syarat($data)
	{
		$this->db->insert('persyaratan', $data);
	}




	// public function getRows($id_persyaratan = '')
	// {
	// 	$this->db->select('id_persyaratan,file_name,uploaded_on');
	// 	$this->db->from('persyaratan');
	// 	if ($id_persyaratan) {
	// 		$this->db->where('id_persyaratan ', $id_persyaratan);
	// 		$query = $this->db->get();
	// 		$result = $query->row_array();
	// 	} else {
	// 		$this->db->order_by('uploaded_on', 'desc');
	// 		$query = $this->db->get();
	// 		$result = $query->result_array();
	// 	}
	// 	return !empty($result) ? $result : false;
	// }

	// public function insert($data = array())
	// {
	// 	$insert = $this->db->insert_batch('persyaratan', $data);
	// 	return $insert ? true : false;
	// }
}

/* End of file M_daftar.php */
