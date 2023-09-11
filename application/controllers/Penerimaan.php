<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Penerimaan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_penerimaan');
		$this->load->model('m_chatting');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Data Calon Siswa Jalur Umum',
			'calon_siswa' => $this->M_penerimaan->calon_siswa(),
			'isi' => 'backend/siswa/v_calon_siswa'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	// JALUR PRESTASI
	public function prestasi()
	{
		$data = array(
			'title' => 'Data Calon Siswa Jalur Prestasi',
			'calon_siswa' => $this->M_penerimaan->prestasi(),
			'isi' => 'backend/siswa/v_prestasi'
		);
		// echo $this->db->last_query();
		// die();
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	// JALUR ZONASI
	public function zonasi()
	{
		$data = array(
			'title' => 'Data Calon Siswa Jalur Zonasi',
			'calon_siswa' => $this->M_penerimaan->zonasi(),
			'isi' => 'backend/siswa/v_zonasi'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function diterima()
	{
		$data = array(
			'title' => 'Data Calon Siswa Baru',
			'calon_siswa_lulus' => $this->M_penerimaan->calon_siswa_lulus(),
			'isi' => 'backend/siswa/v_calon_siswa_lulus'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function ditolak()
	{
		$data = array(
			'title' => 'Data Calon Siswa Baru',
			'calon_siswa_tidaklulus' => $this->M_penerimaan->calon_siswa_tidaklulus(),
			'isi' => 'backend/siswa/v_calon_siswa_tidaklulus'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function detail($id_siswa = null)
	{
		$data = array(
			'title' => "Detail Data calon siswa",
			'detail' => $this->M_penerimaan->detail_calon_siswa($id_siswa),
			'isi' => 'backend/siswa/v_detail'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function detail_prestasi($id_siswa = null)
	{
		$data = array(
			'title' => "Detail Data calon siswa",
			'detail' => $this->M_penerimaan->detail_calon_siswa_prestasi($id_siswa),
			'isi' => 'backend/siswa/v_detail_prestasi'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function detail_zonasi($id_siswa = null)
	{
		$data = array(
			'title' => "Detail Data calon siswa",
			'detail' => $this->M_penerimaan->detail_calon_siswa_zonasi($id_siswa),
			'isi' => 'backend/siswa/v_detail_zonasi'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function lulus($id_siswa = null)
	{
		$data = array(
			'id_siswa' => $id_siswa,
			'status' => 1
		);
		$this->M_penerimaan->update($data);
		$this->session->set_flashdata('pesan', 'Lulus');
		redirect('penerimaan/detail/' . $id_siswa);
	}
	public function lulus_prestasi($id_siswa = null)
	{
		$data = array(
			'id_siswa' => $id_siswa,
			'status' => 1
		);
		$this->M_penerimaan->update($data);
		$this->session->set_flashdata('pesan', 'Lulus');
		redirect('penerimaan/detail_prestasi/' . $id_siswa);
	}
	public function lulus_zonasi($id_siswa = null)
	{
		$data = array(
			'id_siswa' => $id_siswa,
			'status' => 1
		);
		$this->M_penerimaan->update($data);
		$this->session->set_flashdata('pesan', 'Lulus');
		redirect('penerimaan/detail_zonasi/' . $id_siswa);
	}
	public function tidaklulus($id_siswa = null)
	{
		$data = array(
			'id_siswa' => $id_siswa,
			'status' => 2
		);
		$this->M_penerimaan->update($data);
		$this->session->set_flashdata('pesan', 'Tidak Lulus');
		redirect('penerimaan/detail/' . $id_siswa);
	}
	public function tidaklulus_prestasi($id_siswa = null)
	{
		$data = array(
			'id_siswa' => $id_siswa,
			'status' => 2
		);
		$this->M_penerimaan->update($data);
		$this->session->set_flashdata('pesan', 'Tidak Lulus');
		redirect('penerimaan/detail_prestasi/' . $id_siswa);
	}
	public function tidaklulus_zonasi($id_siswa = null)
	{
		$data = array(
			'id_siswa' => $id_siswa,
			'status' => 2
		);
		$this->M_penerimaan->update($data);
		$this->session->set_flashdata('pesan', 'Tidak Lulus');
		redirect('penerimaan/detail_zonasi/' . $id_siswa);
	}
}

/* End of file Penerimaan.php */
