<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {
	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
}

/* End of file M_register.php */
/* Location: ./application/models/M_register.php */