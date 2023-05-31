<?php

defined('BASEPATH') or exit('No direct access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data = array(
			'Title' => 'SMP Luragung',
			'isi' => 'v_home'
		);
		$this->load->view('frontend/v_wrapper', $data, FALSE);
	}
}
