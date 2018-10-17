<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {
	public function tampil_data()
	{
		return $this->db->get('user');
	}
	
	public function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function detail_data($where)
	{
		$this->db->select('user.*');
		$this->db->from('user');
		$this->db->where('user.id', $where);
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file M_member.php */
/* Location: ./application/models/M_member.php */