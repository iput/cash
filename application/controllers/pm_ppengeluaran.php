<?php defined('BASEPATH')OR  exit('tidak ada akses');
/**
 * 
 */
 class Pm_ppengeluaran extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/Pm_pproyek');
 		$this->load->view('attribute/footer_pm'); 		
 	}
 } ?>