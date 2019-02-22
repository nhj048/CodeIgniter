<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Search Controller
	*/

class Search extends CI_Controller {

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/search/list');
		$this->load->view('template/footer');
	}

	public function detail()
	{
		$this->load->view('template/head');
		$this->load->view('page/search/ca_view');
	}
}
