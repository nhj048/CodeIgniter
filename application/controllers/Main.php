<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	/*
		Main Controller
	*/

class Main extends CI_Controller {

	public function index()
	{
		$this->home();
	}

	public function home()
	{
		$this->load->view('template/head');
		$this->load->view('template/top');
		$this->load->view('page/home');
		$this->load->view('template/footer');
	}
}
