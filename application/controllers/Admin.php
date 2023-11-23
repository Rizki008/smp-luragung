<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
		$this->load->model('m_chatting');
	}

	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Dashboard Admin',
			'isi' => 'v_admin'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s Mohon untuk diisi!!!'));
		$this->form_validation->set_rules('password', 'password', 'required', array('required' => '%s Mohon untuk diisi!!!'));

		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->admin_login->login($username, $password);
		}
		$data = array(
			'title' => 'Login',
		);
		$this->load->view('backend/admin/v_login', $data, FALSE);
	}

	public function logout()
	{
		$this->admin_login->logout();
	}

	public function view_chatting($id_siswa)
	{
		$data = array(
			'title' => 'SMP Negeri 2 Luragung',
			'id_siswa' => $id_siswa,
			'daftar_chat' => $this->m_chatting->view_chatting($id_siswa),
			'isi' => 'backend/chatting/v_chatting'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
	public function balas($id_siswa)
	{
		$data = array(
			'id_siswa' => $id_siswa,
			// 'id_user' => '1',
			'admin_send' => $this->input->post('pesan')
		);
		$this->db->insert('chatting', $data);
		redirect('Admin/view_chatting/' . $id_siswa);
	}
}

/* End of file Admin.php */
