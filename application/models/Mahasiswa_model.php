<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Pemrograman Framework .:: Sri Wahyuni ::..

class Mahasiswa_model extends CI_Model {
	private $table_name; 
	
	public function __construct()
	{
		parent::__construct();
		$this->table_name = 'biodata'; 
		
	}

	function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
	}
	
	public function get_by_role()
    {
        $this->db->select('
            biodata.*, prodi.id AS idprodi, prodi.nama_prodi
        ');
        $this->db->join('prodi', 'biodata.id_prodi = prodi.id');
        $this->db->from('biodata');
        $query = $this->db->get();
        return $query->result();
	}
	
	function create_data($data)
	{
	  	$this->db->insert($this->table_name, $data);
	  	if($this->db->affected_rows() > 0){
			return true;
		} else{
			return false;
		}
	}
	
	function read_data() 
	{
		$sql = $this->db->get($this->table_name);
	  	if($sql->num_rows() > 0){			
			foreach($sql->result() as $row){
				$data[] = $row;
			}			
			return $data;
		} else {
			return null;
		}
	}
	
	function update_data($kode,$data) 
	{
	  	$this->db->where('id', $kode);
	  	$this->db->update($this->table_name, $data);
	  	if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}
	
	function delete_data($kode) 
	{
	  	$this->db->where('id', $kode);
	  	$this->db->delete($this->table_name);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}	  	
	}
	
	function get_data($kode)
	{
		$this->db->where('id', $kode);
		$query = $this->db->get($this->table_name);
		if($query->num_rows() > 0){
			return $query->row();
		}
		else{
			return null;
		}
	}	
	
}