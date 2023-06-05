<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pembayaran');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Dashboard Konten',
			'pembayaran' => $this->m_pembayaran->pembayaran(),
			'isi' => 'kesiswaan/pembayaran/v_pembayaran'
		);
		$this->load->view('kesiswaan/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules('nama_pembayar', 'Nama Pembayar', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('jml_bayar', 'Jumlah Bayar', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));



		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Tambah data Pembayaran',
				'isi' => 'kesiswaan/pembayaran/v_add'
			);
			$this->load->view('kesiswaan/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama_pembayar' => $this->input->post('nama_pembayar'),
				'jml_bayar' => $this->input->post('jml_bayar'),
			);
			$this->m_pembayaran->add($data);
			$this->session->set_flashdata('pesan', 'Data berhasil di tambahkan!!!');
			redirect('pembayaran', 'refresh');
		}
		$data = array(
			'title' => 'Tambah data Pembayaran',
			'isi' => 'kesiswaan/pembayaran/v_add'
		);
		$this->load->view('kesiswaan/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function update($id_pembayaran = NULL)
	{
		$this->form_validation->set_rules('nama_pembayar', 'Nama Pembayar', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('jml_bayar', 'Jumlah Bayar', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Update data Pembayaran',
				'pembayaran' => $this->m_pembayaran->detail($id_pembayaran),
				'isi' => 'kesiswaan/pembayaran/v_edit'
			);
			$this->load->view('kesiswaan/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_pembayaran' => $id_pembayaran,
				'nama_pembayar' => $this->input->post('nama_pembayar'),
				'jml_bayar' => $this->input->post('jml_bayar'),
			);
			$this->m_pembayaran->update($data);
			$this->session->set_flashdata('pesan', 'Data berhasil di Updatekan!!!');
			redirect('pembayaran', 'refresh');
		}
		$data = array(
			'title' => 'Update data Pembayaran',
			'pembayaran' => $this->m_pembayaran->detail($id_pembayaran),
			'isi' => 'kesiswaan/pembayaran/v_edit'
		);
		$this->load->view('kesiswaan/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id_pembayaran = NULL)
	{
		$data = array(
			'id_pembayaran' => $id_pembayaran,
		);
		$this->m_pembayaran->delete($data);
		$this->session->set_flashdata('pesan', 'Data berhasil di Hapus!!!');
		redirect('konten/kelola', 'refresh');
	}
}

/* End of file Admin.php */
