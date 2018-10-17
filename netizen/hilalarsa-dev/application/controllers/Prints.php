<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prints extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Preorder');
	}
	public function index()
	{
		$this->load->view('sidebar');
		$data['customer'] = $this->Preorder->getAllCustomer();
		$data['barang'] = $this->Preorder->getAllProduk();
		$this->load->view('inputpo',$data);
	}

	public function cetakpo()
	{
		$this->load->library('pdfgenerator');
		// print_r($this->input->post());

		$data['nopo']=$this->input->post('nopo');
		
		$namabarang = $this->input->post('namabarang');
		$data['namabarang'] = $this->Preorder->getProdukById($namabarang);

		$namaperusahaanfrom = $this->input->post('namaperusahaanfrom');
		$data['namaperusahaanfrom'] = $this->Preorder->getPerusahaanFrom($namaperusahaanfrom);

		$namaperusahaanto = $this->input->post('namaperusahaanto');
		$data['namaperusahaanto'] = $this->Preorder->getPerusahaanTo($namaperusahaanto);

		
		$data['tempattanggal'] = $this->input->post('tempattanggal');
		$data['qty'] = $this->input->post('qty');
		$data['harga'] = $this->input->post('harga');
		$data['trucking'] = $this->input->post('trucking');
		$data['delivery_time'] = $this->input->post('delivery_time');
		$data['delivery_site'] = $this->input->post('delivery_site');
		$data['payment'] = $this->input->post('payment');
		

		// print_r($data);
		$html = $this->load->view('cetakpo', $data, true);
		$this->pdfgenerator->generate($html,'contoh');
	}

	public function viewproduk()
	{
		$this->load->view('sidebar');
		$this->load->view('inputproduk');
	}

	public function inputproduk()
	{
		$data['nama_produk'] = $this->input->post('nama_produk');
		$data['material'] = $this->input->post('material');
		$data['content'] = $this->input->post('content');
		$data['warna'] = $this->input->post('warna');
		$data['merk'] = $this->input->post('merk');
		$data['spesifikasi'] = $this->input->post('spesifikasi');
		$data['packing'] = $this->input->post('packing');

		$this->Preorder->inputproduk($data);
		$this->load->view('inputproduk');
	}

	public function viewdo()
	{
		$this->load->view('sidebar');
		$data['barang'] = $this->Preorder->getAllProduk();
		$this->load->view('inputdo',$data);
	}

	public function tambahcustomer()
	{
		
	}

}
