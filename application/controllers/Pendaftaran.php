<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_daftar');
	}

	public function index()
	{
		$this->siswa_login->proteksi_halaman();
		$data = array(
			'title' => "Data Pendaftaran",
			'persyaratan' => $this->m_daftar->gambar(),
			'isi' => 'frontend/pendaftaran/v_data'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function daftar()
	{
		$this->siswa_login->proteksi_halaman();
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('jml_sdra', 'Jumlah Sodara', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('status', 'Status', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('jarak_rmh', 'Jarak Rumah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('agama', 'Agama', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Pendafatran Calon Baru',
				'isi' => 'frontend/pendaftaran/v_daftar'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_pendaftaran' => $this->input->post('id_pendaftaran'),
				'id_siswa' => $this->session->userdata('id_siswa'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'jml_sdra' => $this->input->post('jml_sdra'),
				'anak_ke' => $this->input->post('anak_ke'),
				'jarak_rmh' => $this->input->post('jarak_rmh'),
				'status' => $this->input->post('status'),
				'agama' => $this->input->post('agama'),
				'tgl_daftar' => date('Y-m-d'),
			);
			$this->m_daftar->add($data);
			$this->session->set_flashdata('success', 'Data Pebdaftaran Berhasil Dikirim');
			redirect('pendaftaran');
		}

		$data = array(
			'title' => 'Pendaftaran Calon Baru',
			'isi' => 'frontend/pendaftaran/v_daftar'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}



	public function add($id_pendaftaran)
	{
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/syarat';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
			$config['max_size']     = '2000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = array(
					'title' => 'Upload Persyaratan',
					'error_upload' => $this->upload->display_errors(),
					'persyaratan' => $this->m_daftar->detail($id_pendaftaran),
					'gambar' => $this->m_daftar->detail_gambar($id_pendaftaran),
					'isi' => 'frontend/pendaftaran/v_upload'
				);
				$this->load->view('frontend/v_wrapper', $data, FALSE);
			} else {
				$upload_data = array('uploads' => $this->upload->data());
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/syarat' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
					'id_pendaftaran' => $id_pendaftaran,
					'keterangan' => $this->input->post('keterangan'),
					'gambar' => $upload_data['uploads']['file_name'],
				);
				$this->m_daftar->add_syarat($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
				redirect('pendaftaran/add/' . $id_pendaftaran);
			}
		}
		$data = array(
			'title' => 'Upload Persyaratan',
			'persyaratan' => $this->m_daftar->detail($id_pendaftaran),
			'gambar' => $this->m_daftar->detail_gambar($id_pendaftaran),
			'isi' => 'frontend/pendaftaran/v_upload'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}


	public function delete($id_pendaftaran, $id_gambar)
	{
		//hapus gambar
		$gambar = $this->m_foto->detail($id_gambar);
		if ($gambar->gambar !== "") {
			unlink('./assets/foto/' . $gambar->gambar);
		}

		$data = array(
			'id_gambar' => $id_gambar
		);
		$this->m_foto->delete($data);
		$this->session->set_flashdata('pesan', 'Gambar Berhasil Dihapus');
		redirect('foto/add/' . $id_pendaftaran);
	}
}
