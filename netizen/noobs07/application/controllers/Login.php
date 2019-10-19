<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('GeneralModel');
            
        }

        public function index()
        {   
            $this->load->view('Login');
        }

        public function logout()
        {
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            redirect('Login','refresh');
        }

         public function cekLogin()
        {
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['level'] = $session_data['level'];
                if ($data['level']=='1') {
                    redirect('Admin','refresh');
                }else if( $data['level']=='2'){
                    redirect('User','refresh');
                }else if( $data['level']=='3'){
                    redirect('Terapis','refresh');
                }else{
                    $this->load->view('403-error');
                }
            }
        }

        public function cekDb($password)
        {
            $username = $this->input->post('username'); 
            $where = array('username' => $username);
            $where2 = array('password' => md5($password));
            $result = $this->GeneralModel->get_selected_2where('user',$where,$where2)->result();
            if($result){
                $session_array = array();
                foreach ($result as $key) {
                    $session_array = array(
                        'id_user'=>$key->id_user,
                        'username'=>$key->username,
                        'level'=>$key->level,
                        'password' => $key->password
                    );
                    $this->session->set_userdata('logged_in',$session_array);
                }
                return true;
            }else{
                $this->form_validation->set_message('cekDb',"login failed");
                return false;
            }
        }

        public function register(){
            $this->load->view('Register');
        }

        public function addUser(){
            $data = array(   
            'full_name'     => $this->input->post('fullname'), 
            'username'      => $this->input->post('username'), 
            'email'         => $this->input->post('email'),   
            'no_telp'       => $this->input->post('notelp'),               
            'alamat'        => $this->input->post('alamat'),   
            'password'      => md5($this->input->post('password')),
            'level'         => '2'
            );

           $result = $this->GeneralModel->add_data('user', $data);
           echo json_encode($result);
        }
    }
?>