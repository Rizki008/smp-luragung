<?php



defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth');
		$this->load->model('m_chatting');
	}

	// List all your items
	public function index($offset = 0)
	{
		$data = array(
			'title' => 'Data User',
			'user' => $this->m_auth->user(),
			'isi' => 'backend/admin/v_user'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('nama_user', 'Nama User', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('level_user', 'Level User', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Tambah data user',
				'isi' => 'backend/admin/v_add'
			);
			$this->load->view('backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama_user'),
				'no_hp' => $this->input->post('no_hp'),
				'alamat' => $this->input->post('alamat'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_user' => $this->input->post('level_user'),
			);
			$this->m_auth->add($data);
			$this->session->set_flashdata('pesan', 'Data berhasil di tambahkan!!!');
			redirect('user', 'refresh');
		}
		$data = array(
			'title' => 'Tambah data user',
			'isi' => 'backend/admin/v_add'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	//Update one item
	public function update($id_user = NULL)
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('nama_user', 'Nama User', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));
		$this->form_validation->set_rules('level_user', 'Level User', 'required', array(
			'required' => '%s Mohon Untuk diisi!!!'
		));


		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'title' => 'Update data user',
				'user' => $this->m_auth->detail_user($id_user),
				'isi' => 'backend/admin/v_edit'
			);
			$this->load->view('backend/v_wrapper', $data, FALSE);
		} else {
			$data = array(
				'id_user' => $id_user,
				'nama_user' => $this->input->post('nama_user'),
				'no_hp' => $this->input->post('no_hp'),
				'alamat' => $this->input->post('alamat'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_user' => $this->input->post('level_user'),
			);
			$this->m_auth->update($data);
			$this->session->set_flashdata('pesan', 'Data berhasil di Updatekan!!!');
			redirect('user', 'refresh');
		}
		$data = array(
			'title' => 'Update data user',
			'isi' => 'backend/admin/v_edit'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	//Delete one item
	public function delete($id_user = NULL)
	{
		$data = array(
			'id_user' => $id_user,
		);
		$this->m_auth->delete($data);
		$this->session->set_flashdata('pesan', 'Data berhasil di Hapus!!!');
		redirect('user', 'refresh');
	}
}

/* End of file User.php */
