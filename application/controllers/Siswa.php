<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
	}

	public function register()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama siswa', 'required', array(
			'required' => '%s Mohon untuk diisi!!!'
		));
		$this->form_validation->set_rules('username_siswa', 'Username_siswa', 'required', array(
			'required' => '%s Mohon untuk diisi!!!'
		));
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[calon_siswa.email]', array(
			'required' => '%s Mohon untuk diisi!!!',
			'is_unique' => '%s Email Sudah Terdaptar'
		));
		$this->form_validation->set_rules('no_hp_siswa', 'No Telephone', 'required|min_length[12]|max_length[13]', array(
			'required' => '%s Mohon untuk diisi!!!',
			'min_length' => '%s Minimal 11',
			'max_length' => '%s Maksimal 13',
		));
		$this->form_validation->set_rules('password_siswa', 'Password Siswa', 'required|min_length[8]', array(
			'required' => '%s Mohon untuk diisi!!!',
			'min_length' => '%s Password_siswa Minimal 8',
			// 'regex_match' => '%s Password_siswa Harus Gabungan Huruf Besar, Angka Dan Hurup Kecil'
		));
		$this->form_validation->set_rules('ulangi_password_siswa', 'Ulangi Password Siswa', 'required|matches[password_siswa]', array(
			'required' => '%s Mohon Untuk Diisi !!!',
			'matches' => '%s Tidak Sama !!!'
		));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('nis', 'nis', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('ttl', 'Tempat Tanggal Lahir', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', array('required' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() ==  FALSE) {
			$data = array(
				'title' => 'Register Siswa',
				'isi'  => 'frontend/siswa/v_register'
			);
			$this->load->view('frontend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'username_siswa' => $this->input->post('username_siswa'),
				'email' => $this->input->post('email'),
				'password_siswa' => $this->input->post('password_siswa'),
				'no_hp_siswa' => $this->input->post('no_hp_siswa'),
				'alamat' => $this->input->post('alamat'),
				'nis' => $this->input->post('nis'),
				'ttl' => $this->input->post('ttl'),
				'jk' => $this->input->post('jk'),
				'asal_sekolah' => $this->input->post('asal_sekolah'),
			);
			$this->m_auth->register($data);
			$this->session->set_flashdata('pesan', 'Register Berhasi, Silahkan Untuk Login');
			redirect('siswa/login');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('password_siswa', 'Password_siswa', 'required', array('required' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == TRUE) {
			$email = $this->input->post('email');
			$password_siswa = $this->input->post('password_siswa');
			$this->siswa_login->login($email, $password_siswa);
		}
		$data = array(
			'title' => 'Login siswa',
			'isi'  => 'frontend/siswa/v_login'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}

	public function logout()
	{
		$this->siswa_login->logout();
	}

	public function profil()
	{
		$data = array(
			'title' => 'Profil',
			'profil' => $this->m_auth->profil(),
			'isi' => 'frontend/siswa/v_profil'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
}
