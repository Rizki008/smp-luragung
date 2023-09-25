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
		$this->db->where('pendaftaran.jalur', 'umum');
		$this->db->group_by('calon_siswa.id_siswa');
		$this->db->order_by('calon_siswa.id_siswa', 'desc');
		return $this->db->get()->result();
	}
	// List all your items
	public function prestasi()
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->join('pendaftaran', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->join('persyaratan', 'pendaftaran.id_pendaftaran = persyaratan.id_pendaftaran', 'left');
		$this->db->where('pendaftaran.status=0');
		$this->db->where('pendaftaran.jalur', 'prestasi');
		// $this->db->group_by('calon_siswa.id_siswa');
		$this->db->order_by('calon_siswa.id_siswa', 'desc');
		return $this->db->get()->result();
	}
	// List all your items
	public function zonasi()
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->join('pendaftaran', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->join('persyaratan', 'pendaftaran.id_pendaftaran = persyaratan.id_pendaftaran', 'left');
		$this->db->where('pendaftaran.status=0');
		$this->db->where('pendaftaran.jalur', 'zonasi');
		// $this->db->group_by('calon_siswa.id_siswa');
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
		$this->db->where('pendaftaran.jalur', 'umum');
		// $this->db->group_by('calon_siswa.id_siswa');
		return $this->db->get()->result();
	}
	public function detail_calon_siswa_prestasi($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->join('pendaftaran', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->join('persyaratan', 'pendaftaran.id_pendaftaran = persyaratan.id_pendaftaran', 'left');
		$this->db->where('pendaftaran.id_siswa', $id_siswa);
		$this->db->where('pendaftaran.jalur', 'prestasi');
		// $this->db->group_by('calon_siswa.id_siswa');
		return $this->db->get()->result();
	}
	public function detail_calon_siswa_zonasi($id_siswa)
	{
		$this->db->select('*');
		$this->db->from('calon_siswa');
		$this->db->join('pendaftaran', 'calon_siswa.id_siswa = pendaftaran.id_siswa', 'left');
		$this->db->join('persyaratan', 'pendaftaran.id_pendaftaran = persyaratan.id_pendaftaran', 'left');
		$this->db->where('pendaftaran.id_siswa', $id_siswa);
		$this->db->where('pendaftaran.jalur', 'zonasi');
		// $this->db->group_by('calon_siswa.id_siswa');
		return $this->db->get()->result();
	}

	public function update($data)
	{
		$this->db->where('id_siswa', $data['id_siswa']);
		$this->db->update('pendaftaran', $data);
	}

	public function hasil_cetak()
	{
		return $this->db->query("SELECT nama_siswa,nisn,asal_sekolah,jalur,alasan_lulus, CASE WHEN status = 1 THEN 'lulus' WHEN status = 2 THEN 'tidak lulus' ELSE 'belum ada status' END AS hasil FROM `pendaftaran` WHERE pendaftaran.id_siswa='" . $this->session->userdata('id_siswa') . "'")->result();
	}
	public function hasil_jalur($tahun, $jalur)
	{
		return $this->db->query("SELECT nama_siswa,nisn,asal_sekolah,jalur,alasan_lulus, CASE WHEN status = 1 THEN 'lulus' WHEN status = 2 THEN 'tidak lulus' ELSE 'belum ada status' END AS hasil FROM `pendaftaran` WHERE YEAR(tgl_daftar)='" . $tahun . "' AND jalur='" . $jalur . "'")->result();
	}
	public function asal_sekolah($asal_sekolah)
	{
		return $this->db->query("SELECT nama_siswa,nisn,asal_sekolah,jalur,alasan_lulus, CASE WHEN status = 1 THEN 'lulus' WHEN status = 2 THEN 'tidak lulus' ELSE 'belum ada status' END AS hasil FROM `pendaftaran` WHERE asal_sekolah='" . $asal_sekolah . "'")->result();
	}
	public function asal_sekolahe()
	{
		$this->db->select('asal_sekolah');
		$this->db->from('pendaftaran');
		return $this->db->get()->result();
	}
}

/* End of file M_penerimaan.php */
