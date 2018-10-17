<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beli extends CI_Model {
	public function get_buku($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function input_order($data)
	{
		$this->db->insert('order', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function input_detail_order($data)
	{
		$this->db->insert('detail_order', $data);
	}
}

/* End of file M_beli.php */
/* Location: ./application/models/M_beli.php */