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
        $username = strip_tags($this->input->post('txt_log_user'));
    	$password = strip_tags($this->input->post('txt_log_password'));
    	$level = $this->input->post('combo_pengguna');
        
        $query = $this->m_login->login($username, $level);
        if ($query){
            $pass = base64_decode($query->password);
            $id_user = $query->id_user;
            $nama_user = $query->nama_user;
            if ($password == $pass){
                if ($level==1){
                    $this->session->set_userdata('id_user', $id_user);
                    $this->session->set_userdata('nama_user', $nama_user);
                    redirect('c_index');
                }
                else if ($level==2) {
                    $this->session->set_userdata('id_user', $id_user);
                    $this->session->set_userdata('nama_user', $nama_user);
                    redirect('Welcome');
                }
                else if($level==3){
                    $this->session->set_userdata('id_user', $id_user);
                    $this->session->set_userdata('nama_user', $nama_user);
                    redirect('pm_index');
                }
            }
            else{
                echo $pass;
                echo $password;
            }
        }
        else{
            redirect('C_login');
        }
        
        }
public function logout(){
    $this->session->sess_destroy();
        redirect(c_login / index);
}

}