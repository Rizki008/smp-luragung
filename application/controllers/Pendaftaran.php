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

	public function detail($id_pendaftaran = null)
	{
		$data = array(
			'title' => "Detail Upload Data Persyaratan",
			'detail' => $this->m_daftar->detail_calon_siswa($id_pendaftaran),
			'isi' => 'frontend/pendaftaran/v_detail'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function daftar()
	{
		$this->siswa_login->proteksi_halaman();
		$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('jml_sdra', 'Jumlah Sodara', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('rt', 'Rt', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('rw', 'Rw', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('lingkungan', 'Lingkungan', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('desa', 'Desa', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('agama', 'Agama', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nisn', 'NISN', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('email_orangtua', 'Email', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Pendafatran Jalur Umum',
				'isi' => 'frontend/pendaftaran/v_daftar'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_pendaftaran' => $this->input->post('id_pendaftaran'),
				'id_siswa' => $this->session->userdata('id_siswa'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'nisn' => $this->input->post('nisn'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'jml_sdra' => $this->input->post('jml_sdra'),
				'anak_ke' => $this->input->post('anak_ke'),
				'rt' => $this->input->post('rt'),
				'rw' => $this->input->post('rw'),
				'lingkungan' => $this->input->post('lingkungan'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kabupaten' => $this->input->post('kabupaten'),
				'status' => '0',
				'jalur' => 'umum',
				'agama' => $this->input->post('agama'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'email_orangtua' => $this->input->post('email_orangtua'),
				// 'tgl_daftar' => date('Y-m-d'),
			);
			$this->m_daftar->add($data);
			$this->session->set_flashdata('success', 'Data Pebdaftaran Berhasil Dikirim');
			redirect('pendaftaran');
		}

		$data = array(
			'title' => 'Pendaftaran Jalur Umum',
			'isi' => 'frontend/pendaftaran/v_daftar'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function prestasi()
	{
		$this->siswa_login->proteksi_halaman();
		$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nik_ayah', 'NIK Ayah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nik_ibu', 'NIK Ibu', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('rt', 'Rt', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('rw', 'Rw', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('lingkungan', 'Lingkungan', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('desa', 'Desa', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('kordinat_rumah', 'kordinat_rumah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nisn', 'NISN', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nik_siswa', 'NIK Siswa', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('no_usbn', 'NO USBN', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('jarak_rumah', 'Jarak Rumah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('transport', 'Transportasi', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('prestasi', 'Bidang Prestasi', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('kejuaraan', 'Kejuaraan Prestasi', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('tingkat', 'Tingkat Prestasi', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('juara', 'Juara', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('keterangan', 'Keterangan Prestasi', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('email_orangtua', 'Email', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Pendafatran Jalur Prestasi',
				'isi' => 'frontend/pendaftaran/v_prestasi'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_pendaftaran' => $this->input->post('id_pendaftaran'),
				'id_siswa' => $this->session->userdata('id_siswa'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nik_ayah' => $this->input->post('nik_ayah'),
				'nik_ibu' => $this->input->post('nik_ibu'),
				'tempat' => $this->input->post('tempat'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'rt' => $this->input->post('rt'),
				'rw' => $this->input->post('rw'),
				'lingkungan' => $this->input->post('lingkungan'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kabupaten' => $this->input->post('kabupaten'),
				'kordinat_rumah' => $this->input->post('kordinat_rumah'),
				'nisn' => $this->input->post('nisn'),
				'nik_siswa' => $this->input->post('nik_siswa'),
				'no_usbn' => $this->input->post('no_usbn'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
				'tahun_lulus' => $this->input->post('tahun_lulus'),
				'jarak_rumah' => $this->input->post('jarak_rumah'),
				'transport' => $this->input->post('transport'),
				'prestasi' => $this->input->post('prestasi'),
				'kejuaraan' => $this->input->post('kejuaraan'),
				'tingkat' => $this->input->post('tingkat'),
				'juara' => $this->input->post('juara'),
				'penyelenggara' => $this->input->post('penyelenggara'),
				'keterangan' => $this->input->post('keterangan'),
				'email_orangtua' => $this->input->post('email_orangtua'),
				// 'tgl_daftar' => date('Y-m-d'),
				'status' => '0',
				'jalur' => 'prestasi',
			);
			$this->m_daftar->add($data);
			$this->session->set_flashdata('success', 'Data Pebdaftaran Berhasil Dikirim');
			redirect('pendaftaran');
		}

		$data = array(
			'title' => 'Pendaftaran Jalur Prestasi',
			'isi' => 'frontend/pendaftaran/v_prestasi'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function zonasi()
	{
		$this->siswa_login->proteksi_halaman();
		$this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nik_siswa', 'NIK Siswa', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nisn', 'NISN', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('agama', 'agamaasi', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('kordinat_rumah', 'kordinat_rumah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('jarak_rumah', 'Jarak Rumah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('satuan_pendidikan', 'Satuan Pendidikan', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nik_ayah', 'NIK Ayah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nik_ibu', 'NIK Ibu', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('rt', 'Rt', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('rw', 'Rw', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('lingkungan', 'Lingkungan', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('desa', 'Desa', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('no_hp', 'NO HP', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('email_orangtua', 'Email', 'required', array('pesan' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Pendafatran Jalur Zonasi',
				'isi' => 'frontend/pendaftaran/v_zonasi'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_pendaftaran' => $this->input->post('id_pendaftaran'),
				'id_siswa' => $this->session->userdata('id_siswa'),
				'nama_siswa' => $this->input->post('nama_siswa'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'nik_siswa' => $this->input->post('nik_siswa'),
				'nisn' => $this->input->post('nisn'),
				'tempat' => $this->input->post('tempat'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'agama' => $this->input->post('agama'),
				'kordinat_rumah' => $this->input->post('kordinat_rumah'),
				'jarak_rumah' => $this->input->post('jarak_rumah'),
				'satuan_pendidikan' => $this->input->post('satuan_pendidikan'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nik_ayah' => $this->input->post('nik_ayah'),
				'nik_ibu' => $this->input->post('nik_ibu'),
				'rt' => $this->input->post('rt'),
				'rw' => $this->input->post('rw'),
				'lingkungan' => $this->input->post('lingkungan'),
				'desa' => $this->input->post('desa'),
				'kecamatan' => $this->input->post('kecamatan'),
				'kabupaten' => $this->input->post('kabupaten'),
				'no_hp' => $this->input->post('no_hp'),
				'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
				'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
				'email_orangtua' => $this->input->post('email_orangtua'),
				// 'tgl_daftar' => date('Y-m-d'),
				'status' => '0',
				'jalur' => 'zonasi',
			);
			$this->m_daftar->add($data);
			$this->session->set_flashdata('success', 'Data Pebdaftaran Berhasil Dikirim');
			redirect('pendaftaran');
		}

		$data = array(
			'title' => 'Pendaftaran Jalur Zonasi',
			'isi' => 'frontend/pendaftaran/v_zonasi'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function add($id_pendaftaran)
	{
		$this->form_validation->set_rules('keterangan_syarat', 'Keterangan', 'required', array('required' => '%s Mohon Untuk Diisi !!!'));

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
					'keterangan_syarat' => $this->input->post('keterangan_syarat'),
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


	public function delete($id_pendaftaran, $id_persyaratan)
	{
		//hapus gambar
		$gambar = $this->m_daftar->detail_gambarh($id_persyaratan);
		if ($gambar->gambar !== "") {
			unlink('./assets/syarat/' . $gambar->gambar);
		}

		$data = array(
			'id_persyaratan' => $id_persyaratan
		);
		$this->m_daftar->delete($data);
		$this->session->set_flashdata('pesan', 'Gambar Berhasil Dihapus');
		redirect('pendaftaran/add/' . $id_pendaftaran);
	}

	public function status()
	{
		$this->siswa_login->proteksi_halaman();
		$data = array(
			'title' => "Data Status Penerimaan",
			'status' => $this->m_daftar->all_data(),
			'isi' => 'frontend/pendaftaran/v_datastatus'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
	public function status1()
	{
		$this->siswa_login->proteksi_halaman();
		$data = array(
			'title' => "Data Status Penerimaan",
			'status' => $this->m_daftar->data_siswa(),
			'isi' => 'frontend/pendaftaran/v_datastatus1'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
}
