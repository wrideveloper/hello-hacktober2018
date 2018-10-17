<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('cart');
		$this->load->model('M_keranjang');
	}

	public function index()
	{
		
	}

}

/* End of file Shopping.php */
/* Location: ./application/controllers/Shopping.php */