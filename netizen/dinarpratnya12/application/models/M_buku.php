<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_Model {
	public function tampil_data()
	{
		//return $this->db->get('buku');
		$this->db->select('buku.*, penerbit.nama_penerbit, kategori.nama_kategori');
		$this->db->from('buku');
		$this->db->join('penerbit', 'buku.id_penerbit = penerbit.id');
		$this->db->join('kategori', 'buku.id_cat = kategori.id');
		$this->db->order_by('buku.jumlah', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function tampil_penerbit()
	{
		return $this->db->get('penerbit');
	}

	public function tampil_kategori()
	{
		return $this->db->get('kategori');
	}

	public function upload()
	{
		$config['upload_path'] = './foto/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '2048';
		$config['remove_space'] = TRUE;
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('foto')){
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
		else{
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}
	}

	public function input_data($upload)
	{
		$data = array(
			'id' => NULL,
			'judul' => $this->input->post('judul'),
			'pengarang' => $this->input->post('pengarang'),
			'id_penerbit' => $this->input->post('penerbit'),
			'id_cat' => $this->input->post('kategori'),
			'jumlah' => $this->input->post('jumlah'),
			'harga' => $this->input->post('harga'),
			'tahun' => $this->input->post('tahun'),
			'foto' => $upload['file']['file_name']   
		);
		$this->db->insert('buku', $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function detail_data($where)
	{
		$this->db->select('buku.*, penerbit.nama_penerbit, kategori.nama_kategori');
		$this->db->from('buku');
		$this->db->join('penerbit', 'buku.id_penerbit = penerbit.id');
		$this->db->join('kategori', 'buku.id_cat = kategori.id');
		$this->db->where('buku.id', $where);
		$query = $this->db->get();
		return $query->result();
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

	public function get_stok_count($st)
	{
		if ($st == "") {
			$st = "";
		}
		$sql = "SELECT buku.*, penerbit.nama_penerbit, kategori.nama_kategori FROM buku JOIN penerbit ON buku.id_penerbit = penerbit.id JOIN kategori ON buku.id_cat = kategori.id WHERE buku.jumlah LIKE '%st%'";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	public function get_stok($limit, $start, $st)
	{
		if ($st == "") {
			$st = "";
		}
		$sql = "SELECT buku.*, penerbit.nama_penerbit, kategori.nama_kategori FROM buku JOIN penerbit ON buku.id_penerbit = penerbit.id JOIN kategori ON buku.id_cat = kategori.id WHERE buku.jumlah LIKE '%st%' limit ". $start . ", ". $limit;
		$query = $this->db->query($sql);
		return $query->result();
	}

}

/* End of file M_buku.php */
/* Location: ./application/models/M_buku.php */