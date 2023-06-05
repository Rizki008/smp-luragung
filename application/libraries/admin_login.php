<?php



defined('BASEPATH') or exit('No direct script access allowed');

class admin_login
{

	protected $ci;
	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	// List all your items
	public function login($username, $password)
	{
		$cek = $this->ci->m_auth->user_login($username, $password);

		if ($cek) {
			$id_user = $cek->id_user;
			$nama_user = $cek->nama_user;
			$no_hp = $cek->no_hp;
			$alamat = $cek->alamat;
			$username = $cek->username;
			$password = $cek->password;
			$level_user = $cek->level_user;

			$this->ci->session->set_userdata('id_user', $id_user);
			$this->ci->session->set_userdata('nama_user', $nama_user);
			$this->ci->session->set_userdata('no_hp', $no_hp);
			$this->ci->session->set_userdata('alamat', $alamat);
			$this->ci->session->set_userdata('username', $username);
			$this->ci->session->set_userdata('level_user', $level_user);
			$this->ci->session->set_userdata('password', $password);

			// redirect('admin');
			if ($level_user == 1) {
				redirect('admin');
			} elseif ($level_user == 2) {
				redirect('konten');
			} elseif ($level_user == 3) {
				redirect('kesiswaan');
			}
		} else {
			$this->ci->session->set_flashdata('error', 'username atau Password Error');
			redirect('admin/login');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('username') == '') {
			$this->ci->session->set_flashdata('error', 'Anda belum Login!!!');
			redirect('admin/login');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('id_user');
		$this->ci->session->unset_userdata('nama_user');
		$this->ci->session->unset_userdata('no_hp');
		$this->ci->session->unset_userdata('alamat');
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('level_user');
		$this->ci->session->unset_userdata('password');
		$this->ci->session->set_flashdata('pesan', 'Berhasil Logout!!!');
		redirect('admin/login');
	}
}

/* End of file admin_login.php */
