<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beli extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_beli');
		$this->load->helper('url', 'form');
	}

	public function index($id)
	{
		$where = array('id' => $id);
		$data['buku'] = $this->M_beli->get_buku($where, 'buku')->result();
		$this->load->view('checkout', $data);
	}

	public function order($id)
	{
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$where = array('id' => $id);
			$data['buku'] = $this->M_beli->get_buku($where, 'buku')->result();
			$this->load->view('checkout', $data);
		} else {
			$id_buku = $this->input->post('id_buku');
			$id_user = $this->input->post('id_user');
			$tanggal = $this->input->post('tanggal');
			$jumlah = $this->input->post('jumlah');
			$stok = $this->input->post('stok');

			if ($jumlah > $stok - 1) {
				$data['error'] = "Jumlah Terlalu Banyak";
				$this->load->view('databuku_user', $data);
			}
			else {
				#--Data Order--#
				$data_order = array(
				'id_user' => $id_user,
				'tanggal' => date('Y-m-d')
				);
				$id_order = $this->M_beli->input_order($data_order);

				#--Detail Order--#
				$data_detail = array(
				'id' => NULL,
				'id_buku' => $id,
				'id_order' => $id_order,
				'qty' => $jumlah,
				'harga' => $jumlah * 20000 
				);
				$this->M_beli->input_detail_order($data_detail);
				$data = array('harga' => $jumlah * 20000);
				$this->load->view('sukses', $data);
			}

			
		}
	}
}

/* End of file Beli.php */
/* Location: ./application/controllers/Beli.php */