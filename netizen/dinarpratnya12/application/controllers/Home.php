<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level') == 1) {
				$this->load->view('home_admin');
			}
			else {
				redirect('Login/index');
			}
		}
		else {
			redirect('Login/index');
		}
	}

	public function user()
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level') == 2) {
				$this->load->view('home_user');
			}
			else {
				redirect('Login/index');
			}
		}
		else {
			redirect('Login/index');
		}
	}

	public function owner()
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level') == 3) {
				$this->load->view('home_owner');
			}
			else {
				redirect('Login/index');
			}
		}
		else {
			redirect('Login/index');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */