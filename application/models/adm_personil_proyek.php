<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Adm_personil_proyek extends CI_Model
{
	
	function __construct() {
        parent::__construct();
    }

public function get_all_PP(){
	$this->db->select('id_project_personil, user.nama_user, project.nama_project, level_user.nama_level');
    $this->db->from('project_personil');
    $this->db->join('user', 'project_personil.id_user=user.id_user');
    $this->db->join('project', 'project_personil.id_project=project.id_project');
    $this->db->join('level_user', 'project_personil.id_level_user=level_user.id_level');

    $query = $this->db->get();
	return $query->result_array();
}    
public function get_all_level(){
	$query = $this->db->query('select * from level_user');
	return $query->result_array();
}

public function add_personil_project($tabel, $data){
	$result = $this->db->insert($tabel, $data);
        return $result;
}

public function update_personil_project($tabel, $data, $param){
$this->db->where('id_project_personil', $param);
        $this->db->update($tabel, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
}

public function delete_personil_project($id){
	$this->db->where('id_project_personil', $id);
    $this->db->delete('project_personil');
        if ($this->db->affected_rows() > 0) {
        return TRUE;
        }
        return FALSE;

}

public function get_personil_project($param){
    $query = $this->db->query('select * from project_personil where id_project_personil='.$param);
    return $query -> result_array();

}

}