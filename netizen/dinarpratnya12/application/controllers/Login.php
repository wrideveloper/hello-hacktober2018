<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_login');
		$this->load->library(array('session'));
		$this->load->library('user_agent');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function aksi()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek = $this->M_login->cek_login($username, $password);
			if ($cek > 0) {
				$data_session = array(
					'username' => $cek->username,
					'level' => $cek->level,
					'nama' => $cek->nama,
					'id' =>$cek->id
				);
				$this->session->set_userdata($data_session);
				if ($this->session->userdata('level') == 1) {
					redirect('Home/index');
				}
				else if ($this->session->userdata('level') == 2) {
					redirect('Home/user');
				}
				else if ($this->session->userdata('level') == 3) {
					redirect('Home/owner');
				}
			}
			else {
				$data['error'] = "Username / Password Anda Salah!";
				$this->load->view('login', $data);
			}	
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Login/index'));
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */