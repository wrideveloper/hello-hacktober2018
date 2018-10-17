<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_member');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['member'] = $this->M_member->tampil_data()->result();
		$this->load->view('datamember', $data);
	}

	public function inputadmin()
	{
		$this->load->view('input_dataadmin');
	}

	public function aksi_input()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|callback_alpha_dash_space');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->inputadmin();
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
				'level' => 1 
			);
			$this->M_member->input_data($data, 'user');
			redirect(base_url('Member/index'));
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->M_member->hapus_data($where, 'user');
		redirect('Member/index');
	}

	public function update($id)
	{
		$where = array('id' => $id);
		$data['user'] = $this->M_member->edit_data($where, 'user')->result();
		$this->load->view('edit_datamember', $data);
	}

	public function aksi_edit($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$where = array('id' => $id);
			$data['user'] = $this->M_member->edit_data($where, 'user')->result();
			$this->load->view('edit_datamember', $data);
		} else {
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$ttl = $this->input->post('ttl');
			$jk = $this->input->post('jk');
			$alamat = $this->input->post('alamat');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'id' => $id,
				'nama' => $nama,
				'ttl' => $ttl,
				'jk' => $jk,
				'alamat' => $alamat,
				'username' => $username,
				'password' => md5($password), 
			);

			$where = array('id' => $id);

			$this->M_member->update_data($where, $data, 'user');
			redirect('Member/index');
		}

	}

	public function detail($id)
	{
		$where = $id;
		$data["user"] = $this->M_member->detail_data($where);
		$this->load->view('detail_datamember', $data);
	}

	public function inputowner()
	{
		$this->load->view('input_dataowner');
	}

	public function aksi_input_owner()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|callback_alpha_dash_space');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->inputowner();
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
				'level' => 3 
			);
			$this->M_member->input_data($data, 'user');
			redirect(base_url('Member/index'));
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

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */