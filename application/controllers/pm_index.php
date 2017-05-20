<?php defined('BASEPATH')OR exit('tidak ada akses perintah terhadap halaman ini');
/**
 * 
 */
 class Pm_index extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		if ($this->session->userdata('nama')&&$this->session->userdata('idUser')&&$this->session->userdata('email')){
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/index');
 		$this->load->view('attribute/footer_pm');	
 		}
 		else{
 			redirect('c_login');
 		}
 		
 	}
 } ?>