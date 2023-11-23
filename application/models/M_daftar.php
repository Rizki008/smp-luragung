<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_daftar extends CI_Model
{
	public function gambar()
	{
		$this->db->select('pendaftaran.*,COUNT(persyaratan.id_pendaftaran)as total_gambar');
		$this->db->from('pendaftaran');
		$this->db->where('pendaftaran.id_siswa=', $this->session->userdata('id_siswa'));
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

	public function detail_gambarh($id_persyaratan)
	{
		$this->db->select('*');
		$this->db->from('persyaratan');
		$this->db->where('id_persyaratan', $id_persyaratan);
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
	public function delete($data)
	{
		$this->db->where('id_persyaratan', $data['id_persyaratan']);
		$this->db->delete('persyaratan', $data);
	}

	public function all_data()
	{
		$this->db->select('pendaftaran.asal_sekolah,pendaftaran.status,`pendaftaran`.`lingkungan`,`pendaftaran`.`desa`,`pendaftaran`.`kecamatan`,`pendaftaran`.`kabupaten`,`pendaftaran`.`rt`,`pendaftaran`.`rw`,calon_siswa.nama_lengkap,pendaftaran.nisn,pendaftaran.jalur');
		$this->db->from('pendaftaran');
		$this->db->join('calon_siswa', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->order_by('id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}

	public function data_siswa()
	{
		$this->db->select('pendaftaran.asal_sekolah,pendaftaran.status,`pendaftaran`.`lingkungan`,`pendaftaran`.`desa`,`pendaftaran`.`kecamatan`,`pendaftaran`.`kabupaten`,`pendaftaran`.`rt`,`pendaftaran`.`rw`,calon_siswa.nama_lengkap,pendaftaran.nisn,pendaftaran.jalur');
		$this->db->from('pendaftaran');
		$this->db->join('calon_siswa', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->where('pendaftaran.id_siswa=', $this->session->userdata('id_siswa'));
		$this->db->order_by('id_pendaftaran', 'desc');
		return $this->db->get()->result();
	}

	public function detail_calon_siswa($id_pendaftaran)
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->join('pendaftaran', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->join('persyaratan', 'pendaftaran.id_pendaftaran = persyaratan.id_pendaftaran', 'left');
		$this->db->where('pendaftaran.id_pendaftaran', $id_pendaftaran);
		// $this->db->group_by('calon_siswa.id_siswa');
		return $this->db->get()->result();
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
