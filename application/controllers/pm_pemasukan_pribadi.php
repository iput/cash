<?php defined('BASEPATH')OR exit('akses tidak diizinkan');
/**
 * 
 */
 class Pm_pemasukan_pribadi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/Pm_pPendapatan');
 		$this->load->view('attribute/footer_pm'); 		
 	}
 } ?>