<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_personil extends CI_Model {

function __construct() {
        parent::__construct();
    }
    //model menampilkan data seluruh personil
    public function get_all_personil() {
        $query = $this->db->query("SELECT * FROM user ");
        return $query->result_array();
    }
    //model menampilkan data personil berdasarkan id
    public function get_personil($param) {
        $query = $this->db->query("SELECT * FROM user where id_user=".$param);
        return $query->result_array();
    }
    //model tambah data
    public function add_personil($tabel, $data) {
        $result = $this->db->insert($tabel, $data);
        return $result;
    }
    public function update_personil($tabel, $data, $param) {
        $this->db->where('id_user', $param);
        $this->db->update($tabel, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function delete_personil($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
        if ($this->db->affected_rows() > 0) {
        return TRUE;
        }
        else{
        return FALSE;
        }
	}
}    