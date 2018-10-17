<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Preorder extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {

    }

    public function getAllProduk()
    {
        $query = $this->db->query("SELECT nama_produk FROM produk");
        return $query->result();
    }
    
    public function getProdukById($namabarang)
    {
        $query = $this->db->query("SELECT * FROM produk WHERE nama_produk='".$namabarang."'");
        return $query->row_array();
    }

    public function inputproduk($data)
    {
        $this->db->insert('produk',$data);
    }

    public function getAllCustomer()
    {
        $query = $this->db->query("SELECT namaperusahaan FROM customer");
        return $query->result();
    }

    public function getPerusahaanFrom($namaperusahaanfrom)
    {
        $query = $this->db->query("SELECT * FROM customer WHERE namaperusahaan='" . $namaperusahaanfrom . "'");
        return $query->row_array();
    }

    public function getPerusahaanTo($namaperusahaanto)
    {
        $query = $this->db->query("SELECT * FROM customer WHERE namaperusahaan='" . $namaperusahaanto . "'");
        return $query->row_array();
    }

}

/* End of file preorder.php */
/* Location: ./application/models/preorder.php */

?>