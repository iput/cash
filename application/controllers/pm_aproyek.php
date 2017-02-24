<?php defined('BASEPATH')OR exit('akses ditolak');
/**
 * 
 */
 class Pm_aproyek extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->load->view('attribute/header_pm');
 		$this->load->view('pmanager/Pm_aproyek');
 		$this->load->view('attribute/footer_pm');
 	}
 } ?>