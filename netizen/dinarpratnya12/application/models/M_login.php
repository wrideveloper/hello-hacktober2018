<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	public function cek_login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		return $this->db->get()->row();
	}
	

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */