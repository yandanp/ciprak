<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Mahasiswa_model');
    }

    public function index()
    {
      //  $data["tbsiswa"] = $this->mahasiswa_model->getAll();
	  //  $data["tbsiswa"] = $this->mahasiswa_model->get_by_role();
		  ini_set('error_reporting', E_STRICT);
		  $data['biodata'] ="";
		  $data['view_biodata'] = $this->Mahasiswa_model->read_data();
		  $data['view_biodata'] = $this->Mahasiswa_model->get_by_role();
        $this->load->view("mahasiswa/mahasiswa_list", $data);
    }

	public function read($id)
	{
		$id = $this->input->post('id');
		if (!empty($id)) $id = $id;
		else $id = $this->security->xss_clean($this->uri->segment(3));
		$result = $this->Mahasiswa_model->get_data($id);
		
		if ($result == null) redirect('mahasiswa');
		else /* $data['biodata'] = $result; */
		$data = array(
			'id' 		   => set_value('id', $result->id),
			'nama_lengkap' => set_value('nama_lengkap', $result->nama_lengkap),
			'tempat_lahir' => set_value('tempat_lahir', $result->tempat_lahir),
			'tgl_lahir'    => set_value('tgl_lahir', $result->tgl_lahir),
			'agama'        => set_value('agama', $result->agama),
			'jkel'         => set_value('jkel', $result->jkel),
			'status'       => set_value('status', $result->status),
			'alamat'       => set_value('alamat', $result->alamat),
			'telp'         => set_value('telp', $result->telp),
			'asal_sklh'    => set_value('asal_sklh', $result->asal_sklh),
			'thn_lulus'    => set_value('thn_lulus', $result->thn_lulus),
			'n_ijazah'     => set_value('n_ijazah', $result->n_ijazah),
			'n_un'         => set_value('n_un', $result->n_un),
			'nama_ayah'    => set_value('nama_ayah', $result->nama_ayah),
			'nama_ibu'     => set_value('nama_ibu', $result->nama_ibu),
			'krj_ayah'     => set_value('krj_ayah', $result->krj_ayah),
			'krj_ibu'      => set_value('krj_ibu', $result->krj_ibu),
			'id_prodi'     => set_value('id_prodi', $result->id_prodi),
		);
		$data['view_biodata'] = $this->Mahasiswa_model->read_data();
		$this->load->view('mahasiswa/mahasiswa_read', $data);
	}

    public function add()
    {
        $data = array(
			'nama_lengkap' => set_value('nama_lengkap'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'tgl_lahir' => set_value('tgl_lahir'),
			'agama' => set_value('agama'),
			'jkel' => set_value('jkel'),
			'status' => set_value('status'),
			'alamat' => set_value('alamat'),
			'telp' => set_value('telp'),
			'asal_sklh' => set_value('asal_sklh'),
			'thn_lulus' => set_value('thn_lulus'),
			'n_ijazah' => set_value('n_ijazah'),
			'n_un' => set_value('n_un'),
			'n_un' => set_value('n_un'),
			'nama_ayah' => set_value('nama_ayah'),
			'nama_ibu' => set_value('nama_ibu'),
			'krj_ayah' => set_value('krj_ayah'),
			'krj_ibu' => set_value('krj_ibu'),
			'id_prodi' => set_value('id_prodi'),
		);
        $this->load->view("mahasiswa/mahasiswa_form", $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
		if (!empty($id)) $id = $id;
		else $id = $this->security->xss_clean($this->uri->segment(3));
		$result = $this->Mahasiswa_model->get_data($id);
		if ($result == null) redirect('mahasiswa');
		else /* $data['biodata'] = $result; */
		$data = array(
			'id' 		   => set_value('id', $result->id),
			'nama_lengkap' => set_value('nama_lengkap', $result->nama_lengkap),
			'tempat_lahir' => set_value('tempat_lahir', $result->tempat_lahir),
			'tgl_lahir'    => set_value('tgl_lahir', $result->tgl_lahir),
			'agama'        => set_value('agama', $result->agama),
			'jkel'         => set_value('jkel', $result->jkel),
			'status'       => set_value('status', $result->status),
			'alamat'       => set_value('alamat', $result->alamat),
			'telp'         => set_value('telp', $result->telp),
			'asal_sklh'    => set_value('asal_sklh', $result->asal_sklh),
			'thn_lulus'    => set_value('thn_lulus', $result->thn_lulus),
			'n_ijazah'     => set_value('n_ijazah', $result->n_ijazah),
			'n_un'         => set_value('n_un', $result->n_un),
			'nama_ayah'    => set_value('nama_ayah', $result->nama_ayah),
			'nama_ibu'     => set_value('nama_ibu', $result->nama_ibu),
			'krj_ayah'     => set_value('krj_ayah', $result->krj_ayah),
			'krj_ibu'      => set_value('krj_ibu', $result->krj_ibu),
			'id_prodi'     => set_value('id_prodi', $result->id_prodi),
		);
		$data['view_biodata'] = $this->Mahasiswa_model->read_data();
		$this->load->view('mahasiswa/mahasiswa_edit', $data);
    }

    function create() //Untuk menambah data cd
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('jkel', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('telp', 'Telp', 'trim|required');
		$this->form_validation->set_rules('asal_sklh', 'Asal', 'trim|required');
		$this->form_validation->set_rules('thn_lulus', 'Thn_lulus', 'trim|required');
		$this->form_validation->set_rules('n_ijazah', 'Nilai ijazah', 'trim|required');
		$this->form_validation->set_rules('n_un', 'Nilai UN', 'trim|required');
		$this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'trim|required');
		$this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'trim|required');
		//$this->form_validation->set_rules('krj_ayah', 'Kerja_ayah', 'trim|required');
		//$this->form_validation->set_rules('krj_ibu', 'Kerja_ibu', 'trim|required');
		$this->form_validation->set_rules('id_prodi', 'Prodi', 'trim|required');
		$this->form_validation->set_error_delimiters('<span id="error">', '</span>');
		if ($this->form_validation->run() == FALSE){
			$this->add();
		} else {
			$data = array(
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir'    => $this->input->post('tgl_lahir'),
				'agama'        => $this->input->post('agama'),
				'jkel'         => $this->input->post('jkel'),
				'status'       => $this->input->post('status'),
				'alamat'       => $this->input->post('alamat'),
                'telp'         => $this->input->post('telp'),
                'asal_sklh'    => $this->input->post('asal_sklh'),
                'thn_lulus'    => $this->input->post('thn_lulus'),
                'n_ijazah'     => $this->input->post('n_ijazah'),
                'n_un'         => $this->input->post('n_un'),
                'nama_ayah'    => $this->input->post('nama_ayah'),
                'nama_ibu'     => $this->input->post('nama_ibu'),
                'krj_ayah'     => $this->input->post('krj_ayah'),
                'krj_ibu'      => $this->input->post('krj_ibu'),
                'id_prodi'     => $this->input->post('id_prodi')
			);
			$create = $this->Mahasiswa_model->create_data($data);
			if ($create) $this->session->set_flashdata('message', 'Data berhasil disimpan!');
			else $this->session->set_flashdata('message', 'Data gagal disimpan!');
			redirect('mahasiswa/index');
		}
    }
	
	public function update()
	{
		$id = $this->input->post('id');
			$data = array(
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir'    => $this->input->post('tgl_lahir'),
				'agama'        => $this->input->post('agama'),
				'jkel'         => $this->input->post('jkel'),
				'status'       => $this->input->post('status'),
				'alamat'       => $this->input->post('alamat'),
                'telp'         => $this->input->post('telp'),
                'asal_sklh'    => $this->input->post('asal_sklh'),
                'thn_lulus'    => $this->input->post('thn_lulus'),
                'n_ijazah'     => $this->input->post('n_ijazah'),
                'n_un'         => $this->input->post('n_un'),
                'nama_ayah'    => $this->input->post('nama_ayah'),
                'nama_ibu'     => $this->input->post('nama_ibu'),
                'krj_ayah'     => $this->input->post('krj_ayah'),
                'krj_ibu'      => $this->input->post('krj_ibu'),
                'id_prodi'     => $this->input->post('id_prodi')			
			);
			$update = $this->Mahasiswa_model->update_data($id,$data);
			if ($update) $this->session->set_flashdata('message', 'Data berhasil dirubah!');
			else $this->session->set_flashdata('message', 'Data gagal dirubah!');
			redirect('mahasiswa');
	}
    public function delete()
    {
        $id = $this->security->xss_clean($this->uri->segment(3));
		$result = $this->Mahasiswa_model->get_data($id);
		if ($result == null) {
			redirect('mahasiswa');
		} else { 
			$delete = $this->Mahasiswa_model->delete_data($id);
			if ($delete) $this->session->set_flashdata('message', 'Data deleted!');
			else $this->session->set_flashdata('message', 'Failed to delete data!');
			redirect('mahasiswa');
		}
    }
}