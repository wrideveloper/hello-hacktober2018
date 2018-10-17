<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_transaksi');
	}

	public function index()
	{
		$data['transaksi'] = $this->M_transaksi->tampil_data();
		$this->load->view('datatransaksi', $data);
	}

	public function index_owner()
	{
		$data['transaksi'] = $this->M_transaksi->tampil_data();
		$this->load->view('datatransaksi_owner', $data);
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */