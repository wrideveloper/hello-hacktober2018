<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keranjang extends CI_Model {
	public function get_produk_all()
	{
		$query = $this->db->get('buku');
		return $query->result_array();
	}

	public function get_produk_kategori($kategori)
	{
		if ($kategori > 0) {
			$this->db->where('id_cat', $kategori);
		}
		$query = $this->db->get('buku');
		return $query->result_array();
	}

	public function get_kategori_all()
	{
		$query = $this->db->get('kategori');
		return $query->result_array();
	}
	
	public function get_produk_id($id)
	{
		$this->db->select('buku.*, nama_kategori');
		$this->db->from('buku');
		$this->db->join('kategori', 'buku.id_cat = kategori.id', 'left');
		$this->db->where('id', $id);
		return $this->db->get();
	}

	public function tambah_pelanggan($data)
	{
		$this->db->insert('user', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function tambah_order($data)
	{
		$this->db->insert('order', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

	public function tambah_detail_order($data)
	{
		$this->db->insert('detail_order', $data);
	}
}

/* End of file M_keranjang.php */
/* Location: ./application/models/M_keranjang.php */