<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Pemrograman Framework .:: Sri Wahyuni ::..
class Prodi extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Prodi_model');
    }

	function index() //Untuk menampilkan form awal yaitu form tambah data cd 
	{
	ini_set('error_reporting', E_STRICT);
		$data['prodi'] ="";
		$data['view_prodi'] = $this->Prodi_model->read_data();
		$this->load->view('prodi/prodi_view', $data);
	}
	
	function edit() //Untuk menampilkan form edit data cd
	{
		$id = $this->input->post('id');
		if (!empty($id)) $id = $id;
		else $id = $this->security->xss_clean($this->uri->segment(3));
		$result = $this->Prodi_model->get_data($id);
		if ($result == null) redirect('prodi');
		else $data['prodi'] = $result;
		$data['view_prodi'] = $this->Prodi_model->read_data();
		$this->load->view('prodi/prodi_edit', $data);
	}
	
	function delete() //Untuk menghapus data cd
	{   
		$id = $this->security->xss_clean($this->uri->segment(3));
		$result = $this->Prodi_model->get_data($id);
		if ($result == null) {
			redirect('prodi');
		} else { 
			$delete = $this->Prodi_model->delete_data($id);
			if ($delete) $this->session->set_flashdata('message', 'Data deleted!');
			else $this->session->set_flashdata('message', 'Failed to delete data!');
			redirect('prodi');
		}
	}
	
	function create() //Untuk menambah data cd
	{
		$this->form_validation->set_error_delimiters('<span id="error" class="text-danger">', '</span>');
		$this->form_validation->set_rules('kode', 'Kode', 'trim|required');
		$this->form_validation->set_rules('nama_prodi', 'Nama', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			$this->index();
		} else {
			$data = array(
				'kode' => $this->input->post('kode'),
				'nama_prodi' => $this->input->post('nama_prodi')		
			);
			$create = $this->Prodi_model->create_data($data);
			if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
			else $this->session->set_flashdata('message', 'Data gagal disimpan!');
			redirect('prodi');
		}
	}
	
	function update() //Untuk meng-update data cd
	{
		$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
		$this->form_validation->set_rules('kode', 'kode', 'trim|required');
		$this->form_validation->set_rules('nama_prodi', 'nama_prodi', 'trim|required');
		if ($this->form_validation->run() == FALSE){
			$this->edit();
		} else {
			$id = $this->input->post('id');
			$data = array(
				'kode' => $this->input->post('kode'),
				'nama_prodi' => $this->input->post('nama_prodi')			
			);
			$update = $this->Prodi_model->update_data($id,$data);
			if ($update) $this->session->set_flashdata('message', 'Data berhasil dirubah!');
			else $this->session->set_flashdata('message', 'Data gagal dirubah!');
			redirect('prodi');
		}
	 }
	
}