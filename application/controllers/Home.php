<?php

defined('BASEPATH') or exit('No direct access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_konten');
	}

	public function index()
	{
		$data = array(
			'title' => 'SMP NEGERI 2 Luragung',
			'konten' => $this->m_konten->konten(),
			'isi' => 'v_home'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
}
