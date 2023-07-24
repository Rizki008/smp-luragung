<?php



defined('BASEPATH') or exit('No direct script access allowed');

class siswa_login
{

	protected $ci;
	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	// List all your items
	public function login($email, $password_siswa)
	{
		$cek = $this->ci->m_auth->siswa_login($email, $password_siswa);

		if ($cek) {
			$id_siswa = $cek->id_siswa;
			$nama_lengkap = $cek->nama_lengkap;
			$nis = $cek->nis;
			$ttl = $cek->ttl;
			$jk = $cek->jk;
			$alamat = $cek->alamat;
			$email = $cek->email;
			$no_hp_siswa = $cek->no_hp_siswa;
			$asal_sekolah = $cek->asal_sekolah;
			$username_siswa = $cek->username_siswa;
			$password_siswa = $cek->password_siswa;
			$status = $cek->status;

			$this->ci->session->set_userdata('id_siswa', $id_siswa);
			$this->ci->session->set_userdata('nama_lengkap', $nama_lengkap);
			$this->ci->session->set_userdata('nis', $nis);
			$this->ci->session->set_userdata('ttl', $ttl);
			$this->ci->session->set_userdata('jk', $jk);
			$this->ci->session->set_userdata('alamat', $alamat);
			$this->ci->session->set_userdata('email', $email);
			$this->ci->session->set_userdata('no_hp_siswa', $no_hp_siswa);
			$this->ci->session->set_userdata('asal_sekolah', $asal_sekolah);
			$this->ci->session->set_userdata('username_siswa', $username_siswa);
			$this->ci->session->set_userdata('password_siswa', $password_siswa);
			$this->ci->session->set_userdata('status', $status);
			redirect('home');
		} else {
			$this->ci->session->set_flashdata('error', 'Email atau Password Error');
			redirect('siswa/login');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('email') == '') {
			$this->ci->session->set_flashdata('error', 'Anda belum Login!!!');
			redirect('siswa/login');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('id_siswa');
		$this->ci->session->unset_userdata('nama_lengkap');
		$this->ci->session->unset_userdata('nis');
		$this->ci->session->unset_userdata('ttl');
		$this->ci->session->unset_userdata('jk');
		$this->ci->session->unset_userdata('alamat');
		$this->ci->session->unset_userdata('email');
		$this->ci->session->unset_userdata('no_hp_siswa');
		$this->ci->session->unset_userdata('asal_sekolah');
		$this->ci->session->unset_userdata('username_siswa');
		$this->ci->session->unset_userdata('password_siswa');
		$this->ci->session->unset_userdata('status');
		$this->ci->session->set_flashdata('pesan', 'Berhasil Logout!!!');
		redirect('siswa/login');
	}

	// Add a new item
	public function add()
	{
	}

	//Update one item
	public function update($id = NULL)
	{
	}

	//Delete one item
	public function delete($id = NULL)
	{
	}
}

/* End of file siswa_login.php */
