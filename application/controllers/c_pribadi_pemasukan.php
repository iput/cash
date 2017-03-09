<?php 
defined('BASEPATH')OR exit('tak ada akses yang diizinkan');
/**
 * 
 */
 class C_pribadi_pemasukan extends CI_Controller
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
		$data['stat5']="";
		$data['stat6']="active";
		$data['stat7']="";
		$data['stat8']="";
		$data['stat9']="";
		$this->load->view('attribute/header', $data);
		$this->load->view('admin/v_pribadi');
		$this->load->view('attribute/footer');
 	}

 	public function add_pribadi($param){
		if ($param=="debit"){
			$kredit ="0";
			$debit = $this->input->post('');
		}
		else{
			$debit ="0";
			$kredit = $this->input->post('');
		}

		}

 }