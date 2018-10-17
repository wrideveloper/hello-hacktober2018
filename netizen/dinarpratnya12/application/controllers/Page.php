<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('cart');
		$this->load->model('M_keranjang');
	}

	public function index()
	{
		$data['buku'] = $this->M_keranjang->get_produk_all();
		$data['kategori'] = $this->M_keranjang->get_kategori_all();
		$this->load->view('themes/header', $data);
		$this->load->view('shopping/list_produk', $data);
		$this->load->view('themes/footer');
	}

	public function tentang()
	{
		$data['kategori'] = $this->M_keranjang->get_kategori_all();
		$this->load->view('themes/header', $data);
		$this->load->view('pages/tentang', $data);
		$this->load->view('themes/footer');
	}

	public function cara_bayar()
	{
		$data['kategori'] = $this->M_keranjang->get_kategori_all();
		$this->load->view('themes/header', $data);
		$this->load->view('pages/cara_bayar', $data);
		$this->load->view('themes/footer');
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */