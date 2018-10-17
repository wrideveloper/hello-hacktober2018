<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_buku');
		$this->load->library('form_validation');
		$this->load->library('pdf');
		$this->load->library('pagination');
		$this->load->model('M_komentar');
	}

	public function index()
	{
		$data['buku'] = $this->M_buku->tampil_data();
		$this->load->view('databuku', $data);
	}

	public function input()
	{
		$data["penerbit"] = $this->M_buku->tampil_penerbit()->result();
		$data["kategori"] = $this->M_buku->tampil_kategori()->result();
		$this->load->view('input_databuku', $data);
	}

	public function aksi_input()
	{
		$this->form_validation->set_rules('judul', 'Judul Buku', 'trim|required|callback_alpha_number_dash_space');
		$this->form_validation->set_rules('pengarang', 'Pengarang', 'required|callback_alpha_number_dash_space');
		$this->form_validation->set_rules('jumlah', 'Jumlah Stok', 'required|numeric');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$this->input();
		} else {
			$upload = $this->M_buku->upload();
			if ($upload['result'] == "success") {
				$this->M_buku->input_data($upload);
				redirect('Buku/index');
			}
			else {
				$data['message'] = $upload['error'];
				echo "error";
			}
		}
	}

	public function delete($id)
	{
		$where = array('id' => $id);
		$this->M_buku->hapus_data($where, 'buku');
		redirect('Buku/index');
	}

	public function detail($id)
	{
		$where = $id;
		$data["buku"] = $this->M_buku->detail_data($where);
		$this->load->view('detail_databuku', $data);
	}

	public function update($id)
	{
		$where = array('id' => $id);
		$data['buku'] = $this->M_buku->edit_data($where, 'buku')->result();
		$data['penerbit'] = $this->M_buku->tampil_penerbit()->result();
		$data['kategori'] = $this->M_buku->tampil_kategori()->result();
		$this->load->view('edit_databuku', $data);
	}

	public function aksi_edit($id)
	{
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('pengarang', 'Pengarang', 'trim|required|callback_alpha_number_dash_space');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|numeric|required');
		$this->form_validation->set_rules('harga', 'Harga', 'trim|numeric|required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'trim|required|numeric');
		if ($this->form_validation->run() == FALSE) {
			$where = array('id' => $id);
			$data['buku'] = $this->M_buku->edit_data($where, 'buku')->result();
			$data['penerbit'] = $this->M_buku->tampil_penerbit()->result();
			$data['kategori'] = $this->M_buku->tampil_kategori()->result();
			$this->load->view('edit_databuku', $data);
		} else {
			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$pengarang = $this->input->post('pengarang');
			$jumlah = $this->input->post('jumlah');
			$harga = $this->input->post('harga');
			$tahun = $this->input->post('tahun');
			$penerbit = $this->input->post('penerbit');
			$kategori = $this->input->post('kategori');

			$data = array(
				'id' => $id,
				'judul' => $judul,
				'pengarang' => $pengarang,
				'id_penerbit' => $penerbit,
				'id_cat' => $kategori,
				'jumlah' => $jumlah,
				'harga' => $harga,
				'tahun' => $tahun,
			);

			$where = array('id' => $id);

			$this->M_buku->update_data($where, $data, 'buku');
			redirect('Buku/index');
		}
	}

	public function alpha_number_dash_space($name)
	{
		if (! preg_match('/^[a-zA-Z0-9\s]+$/', $name)) {
			$this->form_validation->set_message('alpha_number_dash_space', 'The %s field may only contain alphabet and space');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}

	public function generate_to_pdf()
	{
		$data['buku'] = $this->M_buku->tampil_data();
		$this->pdf->load_view('laporan_buku', $data);
		$this->pdf->render();
		$this->pdf->stream("data-laporan-buku.pdf");
	}

	public function index_user()
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level') == 2) {
				$data['buku'] = $this->M_buku->tampil_data();
				$this->load->view('databuku_user', $data);
			}
			else {
				redirect('Login/index');
			}
		}
		else {
			redirect('Login/index');
		}
	}

	public function detail_user($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level') == 2) {
				$where = $id;
				$data["buku"] = $this->M_buku->detail_data($where);
				$data["komentar"] = $this->M_komentar->tampil_data();
				$this->load->view('detail_databuku_user', $data);
			}
			else {
				redirect('Login/index');
			}
		}
		else {
			redirect('Login/index');
		}
	}

	public function index_owner()
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level') == 3) {
				$data['buku'] = $this->M_buku->tampil_data();
				$this->load->view('databuku_owner', $data);
			}
			else {
				redirect('Login/index');
			}
		}
		else {
			redirect('Login/index');
		}
	}

	public function detail_owner($id)
	{
		if ($this->session->userdata('username')) {
			if ($this->session->userdata('level') == 3) {
				$where = $id;
				$data["buku"] = $this->M_buku->detail_data($where);
				$this->load->view('detail_databuku_owner', $data);
			}
			else {
				redirect('Login/index');
			}
		}
		else {
			redirect('Login/index');
		}
	}

	public function search_buku()
	{
		$cari = ($this->input->post("jumlah_stok")) ? $this->input->post("jumlah_stok") : "";
		$cari = ($this->uri->segment(3)) ? $this->uri->segment(3) : $cari;
		
		$config['base_url'] = site_url('Buku/search_buku/$cari');
		$config['total_rows'] = $this->M_buku->get_stok_count($cari);
		$config['per_page'] = 5;
		$config['uri_segment'] = 4;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = floor($choice);
		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['buku'] = $this->M_buku->get_stok($config['per_page'], $data['page'], $cari);

		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('databuku_user', $data);
	}

}

/* End of file Buku.php */
/* Location: ./application/controllers/Buku.php */