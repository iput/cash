<?php 
defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class C_anggaran_proyek extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}
 	public function index()
 	{
 		$data['stat1']="";
		$data['stat2']="";
		$data['stat3']="";
		$data['stat4']="";
		$data['stat5']="active";
		$data['stat6']="";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_aproyek');
		$this->load->view('attribute/footer');
 	}
 }