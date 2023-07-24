<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_penerimaan extends CI_Model
{

	// List all your items
	public function calon_siswa()
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->join('pendaftaran', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->join('persyaratan', 'pendaftaran.id_pendaftaran = persyaratan.id_pendaftaran', 'left');
		$this->db->where('pendaftaran.status=0');
		$this->db->group_by('calon_siswa.id_siswa');
		$this->db->order_by('calon_siswa.id_siswa', 'desc');
		return $this->db->get()->result();
	}
	public function calon_siswa_lulus()
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->join('pendaftaran', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->join('persyaratan', 'pendaftaran.id_pendaftaran = persyaratan.id_pendaftaran', 'left');
		$this->db->where('pendaftaran.status=1');
		$this->db->group_by('calon_siswa.id_siswa');
		$this->db->order_by('calon_siswa.id_siswa', 'desc');
		return $this->db->get()->result();
	}
	public function calon_siswa_tidaklulus()
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->join('pendaftaran', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->join('persyaratan', 'pendaftaran.id_pendaftaran = persyaratan.id_pendaftaran', 'left');
		$this->db->where('pendaftaran.status=2');
		$this->db->group_by('calon_siswa.id_siswa');
		$this->db->order_by('calon_siswa.id_siswa', 'desc');
		return $this->db->get()->result();
	}

	public function detail_calon_siswa($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->join('pendaftaran', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->join('persyaratan', 'pendaftaran.id_pendaftaran = persyaratan.id_pendaftaran', 'left');
		$this->db->where('pendaftaran.id_siswa', $id_siswa);
		// $this->db->group_by('calon_siswa.id_siswa');
		return $this->db->get()->result();
	}

	public function update($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->update('pendaftaran', $data);
	}
}

/* End of file M_penerimaan.php */
