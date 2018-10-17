<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_register');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function aksi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|callback_alpha_dash_space|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('register');
		} else {
			$nama = $this->input->post('nama');
			$ttl = $this->input->post('ttl');
			$jk = $this->input->post('jk');
			$alamat = $this->input->post('alamat');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'id' => NULL,
				'nama' => $nama,
				'ttl' => $ttl,
				'jk' => $jk,
				'alamat' => $alamat,
				'username' => $username,
				'password' => md5($password),
				'level' => 2
			);
			$this->M_register->input_data($data, 'user');
			redirect(base_url('Login/index'));
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

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */