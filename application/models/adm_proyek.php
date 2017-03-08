<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Adm_proyek extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_all_project(){
		$query = $this->db->query("select * from project");
		return $query->result_array();
	}

	public function get_project($param){
		$query = $this->db->query("select * from project where id_project=".$param);
		return $query->result_array();
	}

	public function add_project($tabel, $data){
		$result = $this->db->insert($tabel, $data);
		return $result;

	}

	public function update_project($tabel, $data, $param){
		$this->db->where('id_project', $param);
		$this->db->update($tabel, $data);
		if ($this->db->affected_rows()>0){
			return true;			
		}
		else{
				return false;
			}
	}

	public function delete_project($id){
        $this->db->where('id_project', $id);
        $this->db->delete('project');
        if ($this->db->affected_rows() > 0) {
        return TRUE;
        }
        return FALSE;

	}

	//model untuk suntikan dana proyek
	public function add_suntikan_anggaran($tabel, $data){
		$result = $this->db->insert($tabel, $data);
		return $result;
	}
	public function get_all_suntikan(){
	$this->db->select('project.nama_project, id_tambahan, nama_tambahan, jumlah_tambahan, waktu_tambahan');
	$this->db->from('tambahan_anggaran');
	$this->db->join('project', 'tambahan_anggaran.id_project = project.id_project');
	$query = $this->db->get();
		return $query->result_array();	
	}

	public function get_suntikan($param){
	$query = $this->db->query("select * from tambahan_anggaran where id_tambahan=".$param);
		return $query->result_array();
	}

	public function update_suntikan($tabel, $data, $param){
		$this->db->where('id_tambahan', $param);
		$this->db->update($tabel, $data);
		if ($this->db->affected_rows()>0){
			return true;			
		}
		else{
				return false;
			}
	}

	public function delete_suntikan($id){
	$this->db->where('id_project', $id);
        $this->db->delete('project');
        if ($this->db->affected_rows() > 0) {
        return TRUE;
        }
        return FALSE;		
	}
}