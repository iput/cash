<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_login extends CI_Model
{
	
	function __construct()
	{
		
	}

public function process_login($username, $pass, $level){
$this->db->select('project_personil.id_user, nama_user, email');
$this->db->from('user');
$this->db->where('username', $username);
$this->db->where('password', $pass);
$this->db->where('id_level_user', $level);
$this->db->join('project_personil', 'project_personil.id_user=user.id_user');
$result=$this->db->get();
return $result->result_array();	
}


public function login($username, $level){
	$query = $this->db->query("select project_personil.id_user, nama_user, password, id_level_user, email from user, project_personil where username='".$username."' and project_personil.id_level_user='".$level."'and  project_personil.id_user = user.id_user");
	if (count($query->row())==1) {
			return $query->row();
		}else{
			return false;
		}
}

}