<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->model('GeneralModel');

    }

    public function index()
    {   

        $where = array('level' => 3 );
        $where1 = array('contact' => 'Location' );
        $where2 = array('contact' => 'Phone' );
        $where3 = array('contact' => 'Email' );
        $where4 = array('contact' => 'Social Media');

        $on = 'sub_kategori.kategori_id = kategori.id_kategori';

        $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['level']=$session_data['level'];

        $data['trps'] = $this->GeneralModel->get_selected('user',$where)->result();
        $data['loc'] = $this->GeneralModel->get_selected('contact_us',$where1)->result();
        $data['phone'] = $this->GeneralModel->get_selected('contact_us',$where2)->result();
        $data['email'] = $this->GeneralModel->get_selected('contact_us',$where3)->result();
        $data['socmed'] = $this->GeneralModel->get_selected('contact_us',$where4)->result();
        $data['subkategori'] = $this->GeneralModel->get_join('sub_kategori','kategori',$on)->result();
        $data['service'] = $this->GeneralModel->get_data('kategori')->result();
        $data['berita'] = $this->GeneralModel->get_data('berita')->result();
        $data['activate'] = 'active';

        $this->load->view('user/headerfooter/header',$data);
        $this->load->view('user/HomeUser',$data);
        $this->load->view('user/headerfooter/footer');        
    }

    function get_subkategori(){
        $id=$this->input->post('id');
        $where = array('kategori_id' => $id);
        $data=$this->GeneralModel->get_selected('sub_kategori',$where)->result();
        echo json_encode($data);
    }

    function get_sesiuser(){
        $tgl=$this->input->post('tgl');
        $convert_tgl = date('Y-m-d', strtotime($tgl));
        //var_dump($convert_tgl);
        // $where = array('reservasi.tgl_reservasi' => $convert_tgl);
        // $on = 'sesi_reservasi.id_sesi = reservasi.sesi_id';
        // // $data=$this->GeneralModel->get_selected_join('sesi_reservasi','reservasi',$where,$on,'right')->result();
        $data = $this->db
        ->select(' *,(select count(terapis_id) from reservasi inner join user on reservasi.terapis_id = user.id_user where sesi_id=sesi_reservasi.id_sesi and tgl_reservasi="'.$convert_tgl.'" and status != "Cancelled") jml, (select count(id_user) from user where level=3) jml_terapis')
        ->get('sesi_reservasi')
        ->result();
        echo json_encode($data);
    }

    function addReservation(){

        $message = true;
        if ($this->session->userdata('logged_in')) {
            $session_data=$this->session->userdata('logged_in');

            $tgl=$this->input->post('tanggal');
            $convert_tgl = date('Y-m-d', strtotime($tgl));

            $where = array('level' => 3);

            $get = $this->db
            ->select('*,(select count(terapis_id) from reservasi inner join sesi_reservasi where reservasi.sesi_id=sesi_reservasi.id_sesi and tgl_reservasi="'.$convert_tgl.'" and terapis_id=id_user) jml')
            ->where($where)
            ->order_by('id_user','asc')
            ->group_by('jml')
            ->having('jml != 4')
            ->limit(1)
            ->get('user')
            ->row();

            if (isset($get)) {
                $data = array(   
                'pemesan_id'     => $session_data['id_user'], 
                'terapis_id'       => $get->id_user, 
                'sesi_id'          => $this->input->post('sesi'),   
                'tgl_reservasi'    => $convert_tgl            
                );

                $result = $this->GeneralModel->add_data1('reservasi', $data);

                $get1 = $this->db
                ->select('harga')
                ->where('id_sub_kategori',$this->input->post('sub_kategori0'))
                ->get('sub_kategori')
                ->row();

                $data1 = array(   
                'reservasi_id'     => $result, 
                'subkategori_id'   => $this->input->post('sub_kategori0'), 
                'harga'            => $get1->harga,
                'jmlh'            => $this->input->post('jumlah0')      
                );

                $result1 = $this->GeneralModel->add_data('detail_reservasi', $data1);

               if(!empty($this->input->post('sub_kategori1'))){
                    $get1 = $this->db
                    ->select('harga')
                    ->where('id_sub_kategori',$this->input->post('sub_kategori1'))
                    ->get('sub_kategori')
                    ->row();

                    $data1 = array(   
                    'reservasi_id'     => $result, 
                    'subkategori_id'   => $this->input->post('sub_kategori1'), 
                    'harga'            => $get1->harga,
                    'jmlh'            => $this->input->post('jumlah1')           
                    );

                    $result1 = $this->GeneralModel->add_data('detail_reservasi', $data1);
               }

               $harga = 0;

               foreach ($this->db->get_where('detail_reservasi', array('reservasi_id' => $result))->result() as $key) {
                  $harga += $key->harga;
               }

               $data2 = array('total_harga_awal' => $harga);

               $where2 = array('id_reservasi' => $result);
               $this->GeneralModel->update_data('reservasi',$data2,$where2);
               //echo json_encode($result); 
            }else{
               $message = false;  
            }     
        }else{
            $message = false;
        }

        echo json_encode($message);
    }

    function profileUser(){
        $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['level']=$session_data['level'];
        $data['id_user']=$session_data['id_user'];

        $where = array('id_user' => $session_data['id_user']);

        $data['name'] = $this->GeneralModel->get_selected('user',$where)->result();

        $this->load->view('user/headerfooter/header',$data);
        $this->load->view('user/ProfileUser',$data);
        $this->load->view('user/headerfooter/footer');
    }

    function beritaHomeUser(){
        $this->load->library('pagination');

        $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['level']=$session_data['level'];
        $data['id_user']=$session_data['id_user'];

        $jumlah_data = $this->GeneralModel->num_row('berita');

        $config['base_url'] = site_url().'/User/beritaHomeUser/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 4;

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center" style="margin-left:0;"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     
        $data['berita'] = $this->GeneralModel->data_offset('berita',$config['per_page'],$from);
        
        $this->load->view('user/headerfooter/header',$data);
        $this->load->view('user/BeritaUser',$data);
        $this->load->view('user/headerfooter/footer');
    }

    function editProfileUser(){

        $session_data=$this->session->userdata('logged_in');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('add', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required');
        if($this->form_validation->run())
        {
            $array = array(
            'success' => true
            );

            $data = array(
                'full_name' => $this->input->post('name'),
                'alamat' => $this->input->post('add'),
                'no_telp' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username')
            );

            $where = array('id_user' => $session_data['id_user']);
            
            $this->GeneralModel->update_data('user',$data,$where);
        }
        else
        {
           $array = array(
            'error'   => true,
            'name_error' => form_error('name'),
            'add_error' => form_error('add'),
            'phone_error' => form_error('phone'),
            'email_error' => form_error('email'),
            'username_error' => form_error('username')
           );
        }
          echo json_encode($array);
    }

    function editPassUser(){

        $session_data=$this->session->userdata('logged_in');

        $this->form_validation->set_rules('old', 'Old Password', 'trim|required|callback_cekDbUser');
        $this->form_validation->set_rules('password', 'New Password', 'trim|required');
        $this->form_validation->set_rules('confirm', 'Confirm Password', 'trim|required|matches[password]');
        if($this->form_validation->run())
        {
            $array = array(
            'success' => true
            );

            $data = array(
                'password' => md5($this->input->post('password'))
            );

            $session_data['password'] = md5($this->input->post('password'));

            $where = array('id_user' => $session_data['id_user']);
            
            $this->GeneralModel->update_data('user',$data,$where);
        }
        else
        {
           $array = array(
            'error'   => true,
            'old_error' => form_error('old'),
            'password_error' => form_error('password'),
            'confirm_error' => form_error('confirm')
           );
        }
        
        echo json_encode($array);
    }

    public function cekDbUser($password){
        $session_data=$this->session->userdata('logged_in');
        if(md5($password) == $session_data['password']){
            return true;
        }else{
            $this->form_validation->set_message('cekDbUser',"Old Password Wrong");
            return false;
        }
    }

    public function detailBeritaUser($id){
        $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $data['level']=$session_data['level'];
        $data['id_user']=$session_data['id_user'];

        $where = array('id_berita' => $id);
        $where2 = array('id_berita !=' => $id);

        $data['data'] = $this->GeneralModel->get_selected('berita',$where)->result();
        $data['data2'] = $this->GeneralModel->get_selected_offset('berita',$where2,'5')->result();

        $this->load->view('user/headerfooter/header',$data);
        $this->load->view('user/detailBeritaUser',$data);
        $this->load->view('user/headerfooter/footer');
    }

}
?>