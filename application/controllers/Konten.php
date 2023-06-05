<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Konten extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_konten');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Dashboard Konten',
			'isi' => 'v_konten'
		);
		$this->load->view('konten/v_wrapper', $data, FALSE);
	}
	public function kelola()
	{
		$data = array(
			'title' => 'Dashboard Konten',
			'konten' => $this->m_konten->konten(),
			'isi' => 'konten/konten/v_konten'
		);
		$this->load->view('konten/v_wrapper', $data, FALSE);
	}
	public function add()
	{
		$this->form_validation->set_rules('isi_konten', 'Isi Konten', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));



		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Tambah data Konten',
				'isi' => 'konten/konten/v_add'
			);
			$this->load->view('konten/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'tgl_mulai' => $this->input->post('tgl_mulai'),
				'tgl_akhir' => $this->input->post('tgl_akhir'),
				'isi_konten' => $this->input->post('isi_konten'),
			);
			$this->m_konten->add($data);
			$this->session->set_flashdata('pesan', 'Data berhasil di tambahkan!!!');
			redirect('konten/kelola', 'refresh');
		}
		$data = array(
			'title' => 'Tambah data Konten',
			'isi' => 'konten/konten/v_add'
		);
		$this->load->view('konten/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function update($id_konten = NULL)
	{
		$this->form_validation->set_rules('isi_konten', 'Isi Konten', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Update data konten',
				'konten' => $this->m_konten->detail($id_konten),
				'isi' => 'konten/konten/v_edit'
			);
			$this->load->view('konten/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_konten' => $id_konten,
				'tgl_mulai' => $this->input->post('tgl_mulai'),
				'tgl_akhir' => $this->input->post('tgl_akhir'),
				'isi_konten' => $this->input->post('isi_konten'),
			);
			$this->m_konten->update($data);
			$this->session->set_flashdata('pesan', 'Data berhasil di Updatekan!!!');
			redirect('konten/kelola', 'refresh');
		}
		$data = array(
			'title' => 'Update data konten',
			'konten' => $this->m_konten->detail($id_konten),
			'isi' => 'konten/konten/v_edit'
		);
		$this->load->view('konten/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id_konten = NULL)
	{
		$data = array(
			'id_konten' => $id_konten,
		);
		$this->m_konten->delete($data);
		$this->session->set_flashdata('pesan', 'Data berhasil di Hapus!!!');
		redirect('konten/kelola', 'refresh');
	}
}

/* End of file Admin.php */
