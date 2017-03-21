<?php defined('BASEPATH')OR exit('akses ditolak');


/**
* 
*/
class Prm_personil extends CI_Model
{
	
	function __construct()
	{
		 parent::__construct();
	}

	public function get_pm_proyek($id){
		$this->db->select('project_personil.id_project, nama_project');
		$this->db->from('project');
		$this->db->where('project_personil.id_user', $id);
		$this->db->join('project_personil','project_personil.id_level_user=3 and project_personil.id_project=project.id_project');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_all_personil(){
		$this->db->select('id_user, nama_user');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function add_project_personil($tabel, $data){
		$result = $this->db->insert($tabel, $data);
		return $result;

	}

	public function update_project_personil($tabel, $data, $param){
		$this->db->where('id_project_personil', $param);
		$this->db->update($tabel, $data);
		if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
	}

	public function delete_project_personil($param){
		$this->db->where('id_project_personil', $param);
    	$this->db->delete('project_personil');
        if ($this->db->affected_rows() > 0) {
        return TRUE;
        }
        return FALSE;
	}

	public function get_all_PP(){
	$this->db->select('id_project_personil, user.nama_user, project.nama_project, level_user.nama_level');
    $this->db->from('project_personil');
    $this->db->where('project_personil.id_project', 2);
    $this->db->join('user', 'project_personil.id_user=user.id_user');
    $this->db->join('project', 'project_personil.id_project=project.id_project');
    $this->db->join('level_user', 'project_personil.id_level_user=level_user.id_level');

    $query = $this->db->get();
	return $query->result_array();
}

	public function get_project_personil($id){
		$query = $this->db->query('select * from project_personil where id_project_personil='.$id);
		return $query->result_array();
	}



}