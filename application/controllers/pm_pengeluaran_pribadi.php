<?php defined('BASEPATH')OR exit('akses di tolak');
/**
 * 
 */
 class Pm_pengeluaran_pribadi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/Pm_pPengeluaran');
 		$this->load->view('attribute/footer_pm'); 
 	}
 } ?>