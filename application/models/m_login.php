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

public function login($username, $pass, $level){
	$query = $this->db->query('select project_personil.id_user, nama_user, id_level_user, email from user, project_personil where (username or email)='.$username.'and password='.$pass.'and id_level_user='.$level.'and project_personil.id_user = user.id_user');
	return $query->result_array();	
}

}