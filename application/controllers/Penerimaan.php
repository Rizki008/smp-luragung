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
			'title' => 'Data Calon Siswa Baru',
			'calon_siswa' => $this->M_penerimaan->calon_siswa(),
			'isi' => 'backend/siswa/v_calon_siswa'
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
}

/* End of file Penerimaan.php */
