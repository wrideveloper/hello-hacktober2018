<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_komentar extends CI_Model {
	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function tampil_data()
	{
		return $this->db->get('komentar')->result();
	}
	

}

/* End of file M_komentar.php */
/* Location: ./application/models/M_komentar.php */