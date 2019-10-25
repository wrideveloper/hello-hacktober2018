<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->model('GeneralModel');
    }

    public function index()
    {   
        $this->load->view('admin/HomeAdmin');
    }

    public function contact_us(){
        $data['contactus'] = $this->AdminModel->get_contactus();
        $this->load->view('admin/kontak', $data);
    }

    public function edit()
    {
        $id = $this->uri->segment(3);

        if (empty($id))
        {
            show_404();
        }

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['contactus'] = $this->AdminModel->get_contactus_by_id($id);

        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('Admin/kontakEdit', $data);

        }
        else
        {
            $this->AdminModel->set_contactus($id);
                //$this->load->view('news/success');
            redirect( base_url() . 'index.php/Admin/contact_us');
        }
    }

    public function delete()
    {
        $id = $this->uri->segment(3);

        if (empty($id))
        {
            show_404();
        }

        $contactus = $this->AdminModel->get_contactus_by_id($id);

        $this->AdminModel->delete_contactus($id);        
        redirect( base_url() . 'index.php/Admin/contact_us');        
    }

		//Galery
    public function gallery() 
    {
     $data['glry'] = $this->GeneralModel->get_data('galery')->result();
     $this->load->view('admin/Galery', $data);
 }

 public function add_gallery()
 {
     $config['upload_path']     = './assets/user/images';
     $config['allowed_types']  = 'gif|jpg|png';
     $config['max_size']        = 1000000000;
     $config['max_width']       = 10240;
     $config['max_height']      = 7680;

     $this->load->library('upload',$config);
     $result = '';
     if (!$this->upload->do_upload('galery'))
     {
        $result = $this->upload->display_errors();

        $allowed = explode("|", $config['allowed_types']);
        $filename = $this->upload->data('file_name');
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            $result = 'harap sesuaikan tipe file';
        }
    }
    else
    {
        $data = array(   
            'galery'          => $this->upload->data('file_name'),
            'keterangan'     => $this->input->post('keterangan')
        );

        $result = $this->GeneralModel->add_data('galery', $data);

                //$this->GeneralModel->add_data();
        $this->load->view('admin/Galery');
        $result = 'true';
    }

    echo json_encode($result);

}


public function get_gallery()
{
    $id = $this->input->post('id');
    $data = $this->GeneralModel->get_selected('galery', array('id_galery' => $id))->row();

    echo json_encode($data);
}

public function edit_gallery()
{
    $config['upload_path']     = './assets/user/images';
    $config['allowed_types']  = 'gif|jpg|png';
    $config['max_size']        = 1000000000;
    $config['max_width']       = 10240;
    $config['max_height']      = 7680;

    $this->load->library('upload',$config);
    $result='';

    $id = array('id_galery' => $this->input->post('edit_id') );
    $data = array(
        'keterangan'     => $this->input->post('edit_keterangan'), 

    );

    if ($this->upload->do_upload('edit_galery'))
    {
       $data['galery'] = $this->upload->data('file_name');
       $result = $this->GeneralModel->update_data('galery', $data, $id );
   }
   else
   {
    $allowed = explode("|", $config['allowed_types']);
    $filename = $this->upload->data('file_name');
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$allowed) ) {
        $result = 'harap sesuaikan tipe file';
    }
}

echo json_encode($result);
}

public function delete_gallery()
{
   $id = array('id_galery' => $this->input->post('id') );
   $result = $this->GeneralModel->delete_data($id,'galery');
   echo json_encode($result);
}


		//Kategori
public function kategori() 
{
 
 // $data['ktg'] = $this->GeneralModel->get_data('kategori')->result();
 // //$data['subktg'] = $this->GeneralModel->get_data('sub_kategori')->result();

 // $this->load->view('admin/Kategori', $data);
     $data['keterangan_status'] = 0;
 $data['subktg'] = $this->GeneralModel->get_selected('sub_kategori', $data)->result();
 $this->load->view('admin/Kategori', $data);
}

public function add_kategori() 
{

}

public function edit_kategori()
{

}

public function delete_kategori()
{

}

		//Subkategori
public function subkategori() 
{
 $data['keterangan_status'] = 0;
 $data['subktg'] = $this->GeneralModel->get_selected('sub_kategori', $data)->result();
 $this->load->view('admin/Kategori', $data);
}



public function add_subkategori() 
{
 $config['upload_path']     = './assets/upload';
 $config['allowed_types']  = 'gif|jpg|png';
 $config['max_size']        = 1000000000;
 $config['max_width']       = 10240;
 $config['max_height']      = 7680;

 $this->load->library('upload',$config);
 $result = false;
 if (!$this->upload->do_upload('foto_sub'))
 {
    $result = $this->upload->display_errors();

}
else
{
    $data = array(   
        'judul_sub'     => $this->input->post('edit_judul_sub'),
        'keterangan_sub'=> $this->input->post('edit_keterangan_sub'),
        'foto_sub'      => $this->upload->data('file_name'),
        'harga' 		=> $this->input->post('edit_harga_sub')
    );

    $result = $this->GeneralModel->add_data('sub_kategori', $data);

                    //$this->GeneralModel->add_data();
    //$this->load->view('admin/Kategori');
    $result = true;
}
echo json_encode($result); 
}

public function get_subkategori()
{
    $id = $this->input->post('id');
    //$data = $this->GeneralModel->get_selected('sub_kategori', array('id_sub_kategori' => $id))->row();
    $data['keterangan_status'] = 1;
    $data = $this->GeneralModel->get_selected('sub_kategori', $data);
    echo json_encode($data);
}

public function edit_subkategori()
{
 $config['upload_path']     = './assets/user/images';
 $config['allowed_types']  = 'gif|jpg|png';
 $config['max_size']        = 1000000000;
 $config['max_width']       = 10240;
 $config['max_height']      = 7680;

 $this->load->library('upload',$config);
 $result='';

 $id = array('id_sub_kategori' => $this->input->post('edit_id') );
 $data = array(

    'judul_sub'     => $this->input->post('edit_judul_sub'), 

    'keterangan_sub'     => $this->input->post('edit_keterangan_sub'),
    'harga'     => $this->input->post('edit_harga'),


);

 if ($this->upload->do_upload('edit_foto_sub'))
 {
   $data['foto_sub'] = $this->upload->data('file_name');
}

$result = $this->GeneralModel->update_data('sub_kategori', $data, $id );

echo json_encode($result);
}

public function delete_subkategori()
{
 $id = array('id_sub_kategori' => $this->input->post('id') );
 $data['keterangan_status'] = 1;
 $result = $this->GeneralModel->update_data('sub_kategori', $data, $id);
    //$result = $this->GeneralModel->delete_data($id,'sub_kategori');
 echo json_encode($result);
}

		//Terapis
public function terapis()
{
            

    $data1['keterangan_status'] = 0;
    $level['level'] = 3;
    $data['terps'] = $this->GeneralModel->get_selected_2where('user',$data1,$level)->result();
    $this->load->view('admin/Terapis', $data);

}

public function add_terapis()
{
    $config['upload_path']     = './assets/upload';
    $config['allowed_types']  = 'gif|jpg|png|jpeg';
    $config['max_size']        = 1000000000;
    $config['max_width']       = 10240;
    $config['max_height']      = 7680;

    $this->load->library('upload',$config);
    $result = '';
    if (!$this->upload->do_upload('foto'))
    {
        $result = $this->upload->display_errors();

        $allowed = explode("|", $config['allowed_types']);
        $filename = $this->upload->data('file_name');
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            $result = 'harap sesuaikan tipe file .png, .jpg, .jpeg';
        }
    }
    else
    {
        $data = array(   
            'full_name'     => $this->input->post('full_name'), 
            'username'      => $this->input->post('username'), 
            'password'      => $this->input->post('password'),
            'email'         => $this->input->post('email'),   
            'no_telp'       => $this->input->post('no_telp'),               
            'alamat'        => $this->input->post('alamat'),
            'foto'          => $this->upload->data('file_name'),
            'level'         => '3'
        );

        $result = $this->GeneralModel->add_data('user', $data);


        $this->load->view('admin/Terapis');
        $result = 'true';
    }

    echo json_encode($result);
}

public function search_terapis()
{
    $text = $this->input->post('text');
    $data = $this->GeneralModel->search_dataTerapis($text);
    $output = '
    <table id="demo-datatables" class="table table-striped table-bordered datatable no-footer dtr-inline" role="grid" aria-describedby="demo-dt-add-info">

    <thead>
    <tr role="row">
    <th class="sorting_asc" tabindex="0" aria-controls="demo-datatables" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Id User</th>
    <th>Full Name</th>
    <th>Username</th>
    <th>Email</th>
    <th>No Tlp</th>
    <th>Alamat</th>
    <th>Foto</th>
    <th>Action</th>

    </tr>
    </thead>
    <tbody>
    ';
    if($data->num_rows() > 0)
    {

        foreach($data->result() as $row)
        {
            $output .= '
            <tr>
            <td>'.$row->id_user.'</td>
            <td>'.$row->full_name.'</td>
            <td>'.$row->username.'</td>
            <td>'.$row->email.'</td>
            <td>'.$row->no_telp.'</td>
            <td>'.$row->alamat.'</td>
            <td>
            <img src="'.base_url().'/assets/upload/'.$row->foto.'" alt="" width=100 height=100>
            </td>
            <td>
            <a href="'.base_url().'/Admin/edit_terapis/'.$row->id_user.'" class="mdi mdi-pencil-box-outline btn-icon-append" aria-hidden="true" data-toggle="modal" data-target="#modal-edit" name="tombolEdit" value="'.$row->id_user.'"></a>
            <a href="'.base_url().'/Admin/delete_terapis/'.$row->id_user.'" class="mdi mdi-delete btn-icon-append" aria-hidden="true" name="tombolDelete" value="'.$value->id_user.'"></a>
            </td>
            </tr>
            ';
        }
    }
    else
    {
       $output .= '<tr>
       <td colspan="8">No Data Found</td>
       </tr>';
   }

   $output .= '<tr><td></td></tr></tbody></table>';

   echo $output;

            //echo json_encode($output);

}

public function get_terapis()
{
    $id = $this->input->post('id');
    $data = $this->GeneralModel->get_selected('user', array('id_user' => $id))->row();

    echo json_encode($data);
}

public function edit_terapis()
{
    $config['upload_path']     = './assets/upload';
    $config['allowed_types']  = 'gif|jpg|png';
    $config['max_size']        = 1000000000;
    $config['max_width']       = 10240;
    $config['max_height']      = 7680;

    $this->load->library('upload',$config);
    
    $id = array('id_user' => $this->input->post('edit_id') );
    $data = array(
        'full_name'     => $this->input->post('edit_full_name'), 
        'username'      => $this->input->post('edit_username'), 
        'password'      => $this->input->post('edit_password'),
        'email'         => $this->input->post('edit_email'),   
        'no_telp'       => $this->input->post('edit_no_telp'),               
        'alamat'        => $this->input->post('edit_alamat'),
        'level'         => $this->input->post('edit_level'),
    );

    $result=false;
    if ($this->upload->do_upload('edit_foto'))
    {
        $data['foto'] = $this->upload->data('file_name');
        
        $result = $this->GeneralModel->update_data('user', $data, $id );
        $result=true;
    }
    else
    {
        $result = $this->upload->display_errors();
        $allowed = explode("|", $config['allowed_types']);
        $filename = $this->upload->data('file_name');
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            $result = 'harap sesuaikan tipe file';
        }
    }

    echo json_encode($result);
}


public function delete_terapis()
{



   $id = array('id_user' => $this->input->post('id') );
   $data['keterangan_status'] = 1;
   $result = $this->GeneralModel->update_data('user', $data, $id);
   echo json_encode($result);
}

        //user
public function user()
{

    $data1['keterangan_status'] = 0;
    $level['level'] = 2;
    $data['usr'] = $this->GeneralModel->get_selected_2where('user',$data1,$level)->result();

    $this->load->view('admin/User', $data);
}

public function add_user()
{
    $config['upload_path']     = './assets/upload';
    $config['allowed_types']  = 'gif|jpg|png';
    $config['max_size']        = 1000000000;
    $config['max_width']       = 10240;
    $config['max_height']      = 7680;

    $this->load->library('upload',$config);
    $result = '';
    if (!$this->upload->do_upload('foto'))
    {
        $result = $this->upload->display_errors();
    }
    else
    {
        $data = array(   
            'full_name'     => $this->input->post('full_name'), 
            'username'      => $this->input->post('username'), 
            'password'      => $this->input->post('password'),
            'email'         => $this->input->post('email'),   
            'no_telp'       => $this->input->post('no_telp'),               
            'alamat'        => $this->input->post('alamat'),
            'foto'          => $this->upload->data('file_name'),
            'level'         => '2'
        );

        $result = $this->GeneralModel->add_data('user', $data);


        $this->load->view('admin/User');
        $result = 'true';
    }

    echo json_encode($result);
}

public function search_user()
{
    $text = $this->input->post('text');
    $data = $this->GeneralModel->search_dataUser($text);
    $output = '
    <table id="demo-datatables" class="table table-striped table-bordered datatable no-footer dtr-inline" role="grid" aria-describedby="demo-dt-add-info">

    <thead>
    <tr role="row">
    <th class="sorting_asc" tabindex="0" aria-controls="demo-datatables" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >Id User</th>
    <th>Full Name</th>
    <th>Username</th>
    <th>Email</th>
    <th>No Tlp</th>
    <th>Alamat</th>
    <th>Foto</th>
    <th>Action</th>

    </tr>
    </thead>
    <tbody>
    ';
    if($data->num_rows() > 0)
    {

        foreach($data->result() as $row)
        {
            $output .= '
            <tr>
            <td>'.$row->id_user.'</td>
            <td>'.$row->full_name.'</td>
            <td>'.$row->username.'</td>
            <td>'.$row->email.'</td>
            <td>'.$row->no_telp.'</td>
            <td>'.$row->alamat.'</td>
            <td>
            <img src="'.base_url().'/assets/upload/'.$row->foto.'" alt="" width=100 height=100>
            </td>
            <td>
            <a href="'.base_url().'/Admin/edit_terapis/'.$row->id_user.'" class="mdi mdi-pencil-box-outline btn-icon-append" aria-hidden="true" data-toggle="modal" data-target="#modal-edit-user" name="tombolEditUser" value="'.$row->id_user.'"></a>
            <a href="'.base_url().'/Admin/delete_terapis/'.$row->id_user.'" class="mdi mdi-delete btn-icon-append" aria-hidden="true" name="tombolDeleteUser" value="'.$value->id_user.'"></a>
            </td>
            </tr>
            ';
        }
    }
    else
    {
       $output .= '<tr>
       <td colspan="8">No Data Found</td>
       </tr>';
   }

   $output .= '<tr><td></td></tr></tbody></table>';

   echo $output;

            //echo json_encode($output);

}
public function get_user()
{
    $id = $this->input->post('id');
    $data = $this->GeneralModel->get_selected('user', array('id_user' => $id))->row();

    echo json_encode($data);
}

public function edit_user()
{
    $config['upload_path']     = './assets/upload';
    $config['allowed_types']  = 'gif|jpg|png';
    $config['max_size']        = 1000000000;
    $config['max_width']       = 10240;
    $config['max_height']      = 7680;

    $this->load->library('upload',$config);
    $result='';

    $id = array('id_user' => $this->input->post('edit_id') );
    $data = array(
        'full_name'     => $this->input->post('edit_full_name'), 
        'username'      => $this->input->post('edit_username'), 
        'password'      => $this->input->post('edit_password'),
        'email'         => $this->input->post('edit_email'),   
        'no_telp'       => $this->input->post('edit_no_telp'),               
        'alamat'        => $this->input->post('edit_alamat'),
        'level'         => $this->input->post('edit_level'),
    );

    if ($this->upload->do_upload('edit_foto'))
    {
        $data['foto'] = $this->upload->data('file_name');
    }

    $result = $this->GeneralModel->update_data('user', $data, $id );

    echo json_encode($result);
}



public function delete_user()
{


   
    $id = array('id_user' => $this->input->post('id') );
    $data['keterangan_status'] = 1;
    $result = $this->GeneralModel->update_data('user', $did,$data);
    echo json_encode($result);
}

            //Berita

public function berita()
{

    $data['keterangan_status'] = 0;

    $data['brt'] = $this->GeneralModel->get_selected('berita',$data)->result();
    $this->load->view('admin/Berita', $data);
}

public function add_berita()
{
    $config['upload_path']     = './assets/upload';
    $config['allowed_types']  = 'gif|jpg|png';
    $config['max_size']        = 1000000000;
    $config['max_width']       = 10240;
    $config['max_height']      = 7680;

    $this->load->library('upload',$config);
    $result = '';
    if (!$this->upload->do_upload('foto_berita'))
    {
        $result = $this->upload->display_errors();
    }
    else
    {
        $data = array(   
            'judul_berita'  => $this->input->post('judul_berita'), 
            'deskripsi'     => $this->input->post('deskripsi'), 
            'foto_berita'   => $this->upload->data('file_name')

        );

        $result = $this->GeneralModel->add_data('berita', $data);

                //$this->GeneralModel->add_data();
        $this->load->view('admin/Berita');
        $result = 'true';
    }

    echo json_encode($result);
}

public function get_berita()
{
    $id = $this->input->post('id');
    $data = $this->GeneralModel->get_selected('berita', array('id_berita' => $id))->row();

    echo json_encode($data);
}


public function edit_berita()
{
    $config['upload_path']     = './assets/upload';
    $config['allowed_types']  = 'gif|jpg|png';
    $config['max_size']        = 1000000000;
    $config['max_width']       = 10240;
    $config['max_height']      = 7680;

    $this->load->library('upload',$config);
    $result='';

    $id = array('id_berita' => $this->input->post('edit_id') );
    $data = array(
        'judul_berita'     => $this->input->post('edit_judul_berita'), 
        'deskripsi'        => $this->input->post('edit_deskripsi')

    );

    if ($this->upload->do_upload('edit_foto'))
    {
        $data['foto_berita'] = $this->upload->data('file_name');
    }

    $result = $this->GeneralModel->update_data('berita', $data, $id );

    echo json_encode($result);
}



public function delete_berita()
{

    $id = array('id_berita' => $this->input->post('id') );
    $data['keterangan_status'] = 1;
    $result = $this->GeneralModel->update_data('berita', $data,$id);
    echo json_encode($result);
}

}
?>
