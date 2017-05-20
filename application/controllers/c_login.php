<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class C_login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index() {
        $this->load->view('v_login');
    }

    public function login_process(){
    	$idUser="";
        $namaUser="";
        $email ="";
        $username = strip_tags($this->input->post('txt_log_user'));
    	$password = md5(strip_tags($this->input->post('txt_log_password'))) ;
    	$level = $this->input->post('combo_pengguna');
        
        $query = $this->m_login->process_login($username, $password, $level);
        foreach ($query as $key) {
            $namaUser = $key['nama_user'];
            $idUser = $key['id_user'];
            $email = $key['email'];

        }

        if ($query){
            if ($level == 1){
                $this->session->set_userdata('nama', $namaUser);
                $this->session->set_userdata('idUser', $idUser);
                $this->session->set_userdata('email', $email);
                redirect('c_index');
            }

            elseif ($level ==2) {
                redirect('Welcome');
            }

            elseif ($level == 3) {
                $this->session->set_userdata('nama', $namaUser);
                $this->session->set_userdata('idUser', $idUser);
                $this->session->set_userdata('email', $email);
                redirect('pm_index');
            }

           
        }

        else{
            redirect('C_login');
        }
        
        }


}