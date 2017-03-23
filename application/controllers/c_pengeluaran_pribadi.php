<?php 
defined('BASEPATH')OR exit('no direct script access allowed');
/**
 * 
 */
 class C_pengeluaran_pribadi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('adm_pribadi', 'adm');
 	}

 	public function index()
 	{
 		$data['stat1']="";
		$data['stat2']="";
		$data['stat3']="";
		$data['stat4']="";
		$data['stat5']="";
		$data['stat6']="active";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_ppribadi');
		$this->load->view('attribute/footer');
 	}

 	public function editPengeluaranP()
 	{
 		$data = $this->adm->getDataPengeluaran();
 		echo json_encode($data);
 	}
 } ?>