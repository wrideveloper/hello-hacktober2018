<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerbit extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_penerbit');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['penerbit'] = $this->M_penerbit->tampil_data()->result();
		$this->load->view('datapenerbit', $data);
	}

	public function aksi_input()
	{
		$this->form_validation->set_rules('nama', 'Nama Penerbit', 'required|callback_alpha_dash_space');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$nama = $this->input->post('nama');
			$data = array(
				'id' => NULL,
				'nama_penerbit' => $nama
			);
			$this->M_penerbit->input_data($data, 'penerbit');
			redirect('Penerbit/index');
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->M_penerbit->hapus_data($where, 'penerbit');
		redirect('Penerbit/index');
	}

	public function update($id)
	{
		$where = array('id' => $id);
		$data['penerbit'] = $this->M_penerbit->edit_data($where, 'penerbit')->result();
		$this->load->view('edit_datapenerbit', $data);
	}

	public function aksi_update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Penerbit', 'required|callback_alpha_dash_space');

		if ($this->form_validation->run() == FALSE) {
			$where = array('id' => $id);
			$data['penerbit'] = $this->M_penerbit->edit_data($where, 'penerbit')->result();
			$this->load->view('edit_datapenerbit', $data);
		} else {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');

			$data = array(
				'id' => $id,
				'nama_penerbit' => $nama 
			);

			$where = array('id' => $id);

			$this->M_penerbit->update_data($where, $data, 'penerbit');
			redirect('Penerbit/index');
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

/* End of file Penerbit.php */
/* Location: ./application/controllers/Penerbit.php */