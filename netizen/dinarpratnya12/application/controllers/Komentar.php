<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_komentar');
	}

	public function index()
	{
		$data['komen'] = $this->M_komentar->tampil_data()->result();
		$this->load->view('detail_databuku_user', $data);
	}

	public function input_komen($id1)
	{
		$komentar = $this->input->post('komentar');
		$id_user = $_SESSION['id'];
		$id_buku = $id1;
		$jam = date("h:i:sa");

		$data = array(
			'id' => NULL,
			'komentar' => $komentar,
			'id_user' => $id_user,
			'id_buku' => $id_buku,
			'jam' => $jam 
		);
		$this->M_komentar->input_data($data, 'komentar');
		redirect('Buku/index_user');
	}

}

/* End of file Komentar.php */
/* Location: ./application/controllers/Komentar.php */