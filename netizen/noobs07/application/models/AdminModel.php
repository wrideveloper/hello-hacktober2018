<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {
   	public function __construct()
    {
        $this->load->database();
    }

	public function get_contactus($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('contact_us');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('contact_us', array('slug' => $slug));
        return $query->row_array();
    }

    public function get_contactus_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('contact_us');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('contact_us', array('id_contact' => $id));
        return $query->row_array();
    }
    
    public function set_contactus($id = 0)
    {
        $this->load->helper('url');
 
        $data = array(
            'contact' => $this->input->post('contact'),
            'keterangan' => $this->input->post('keterangan')
        );
        
        if ($id == 0) {
            return $this->db->insert('contact_us', $data);
        } else {
            $this->db->where('id_contact', $id);
            return $this->db->update('contact_us', $data);
        }
    }
    
    public function delete_contactus($id)
    {
        $this->db->where('id_contact', $id);
        return $this->db->delete('contact_us');
    }
}

/* End of file AdminModel.php */
/* Location: ./application/models/AdminModel.php */