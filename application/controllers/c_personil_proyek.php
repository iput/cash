<?php 
defined('BASEPATH')OR exit('Nor direct script sccess allowed');
/**
 * 
 */
 class C_personil_proyek extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
		$data['stat1']="";
		$data['stat2']="";
		$data['stat3']="active";
		$data['stat4']="";
		$data['stat5']="";
		$data['stat6']="";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_personil_proyek');
		$this->load->view('attribute/footer');
 	}
 } ?>