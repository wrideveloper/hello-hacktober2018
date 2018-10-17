<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penerbit extends CI_Model {
	public function tampil_data()
	{
		return $this->db->get('penerbit');
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
}

/* End of file M_penerbit.php */
/* Location: ./application/models/M_penerbit.php */