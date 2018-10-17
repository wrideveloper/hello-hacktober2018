<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_kategori');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['kategori'] = $this->M_kategori->tampil_data()->result();
		$this->load->view('datakategori', $data);
	}

	public function aksi_input()
	{
		$this->form_validation->set_rules('nama', 'Kategori', 'required|callback_alpha_dash_space');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
			//redirect('Kategori/index');
		} else {
			$nama = $this->input->post('nama');
			$data = array(
				'id' => NULL,
				'nama_kategori' => $nama
			);
			$this->M_kategori->input_data($data, 'kategori');
			redirect('Kategori/index');
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->M_kategori->hapus_data($where, 'kategori');
		redirect('Kategori/index');
	}

	public function update($id)
	{
		$where = array('id' => $id);
		$data['kategori'] = $this->M_kategori->edit_data($where, 'kategori')->result();
		$this->load->view('edit_datakategori', $data);
	}

	public function aksi_update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Kategori', 'required|callback_alpha_dash_space');

		if ($this->form_validation->run() == FALSE) {
			$where = array('id' => $id);
			$data['kategori'] = $this->M_kategori->edit_data($where, 'kategori')->result();
			$this->load->view('edit_datakategori', $data);
		} else {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');

			$data = array(
				'id' => $id,
				'nama_kategori' => $nama 
			);

			$where = array('id' => $id);

			$this->M_kategori->update_data($where, $data, 'kategori');
			redirect('Kategori/index');
		}
	}

	public function alpha_dash_space($name)
	{
		if (! preg_match('/^[a-zA-Z\s]+$/', $name)) {
			$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alphabet and space');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */