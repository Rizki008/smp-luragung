<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kesiswaan extends CI_Controller
{


	// List all your items
	public function index()
	{
		$data = array(
			'title' => 'Dashboard Konten',
			'isi' => 'v_kesiswaan'
		);
		$this->load->view('kesiswaan/v_wrapper', $data, FALSE);
	}
}

/* End of file Admin.php */
