<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {
	public function tampil_data()
	{
		$this->db->select('order.*, detail_order.*');
		$this->db->from('order');
		$this->db->join('detail_order', 'order.id = detail_order.id_order');
		$query = $this->db->get();
		return $query->result();
	}
	

}

/* End of file M_transaksi.php */
/* Location: ./application/models/M_transaksi.php */