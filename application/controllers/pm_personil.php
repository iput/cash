<?php defined('BASEPATH')OR exit('akses ditolak');
/**
 * 
 */
 class Pm_personil extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/pm_personil');
 		$this->load->view('attribute/footer_pm'); 		
 	}
 } ?>